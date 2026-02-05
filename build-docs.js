const fs = require('fs');
const path = require('path');

const srcDir = path.join(__dirname, 'src-php');
const docsDir = path.join(__dirname, 'docs');

// Read include files
const includes = {
  '1_head.php': fs.readFileSync(path.join(srcDir, '1_head.php'), 'utf8'),
  '2_nav.php': fs.readFileSync(path.join(srcDir, '2_nav.php'), 'utf8'),
  '9_footer.php': fs.readFileSync(path.join(srcDir, '9_footer.php'), 'utf8'),
  'utility-popular-services.php': fs.readFileSync(path.join(srcDir, 'utility-popular-services.php'), 'utf8'),
};

// Page files to process (exclude includes and config)
const excludeFiles = ['0_config.php', '1_head.php', '2_nav.php', '9_footer.php', 'utility-popular-services.php'];
const phpFiles = fs.readdirSync(srcDir)
  .filter(f => f.endsWith('.php') && !excludeFiles.includes(f));

// Create docs directory
if (!fs.existsSync(docsDir)) {
  fs.mkdirSync(docsDir, { recursive: true });
}

// Process each PHP page
phpFiles.forEach(file => {
  let content = fs.readFileSync(path.join(srcDir, file), 'utf8');

  // Replace all PHP include/require patterns
  content = content.replace(/<\?php\s+(?:require_once|require|include_once|include)\s+['"]([^'"]+)['"]\s*;\s*\?>/g, (match, incFile) => {
    if (includes[incFile]) {
      return includes[incFile];
    }
    console.warn(`  Warning: Unknown include "${incFile}" in ${file}`);
    return match;
  });

  // Also replace any remaining .php links to .html (for internal links)
  // Only replace href values that point to local .php files (not external URLs)
  content = content.replace(/href="([^"]*?)\.php"/g, (match, base) => {
    // Skip external URLs
    if (base.startsWith('http') || base.startsWith('//')) return match;
    return `href="${base}.html"`;
  });

  const htmlFile = file.replace('.php', '.html');
  fs.writeFileSync(path.join(docsDir, htmlFile), content, 'utf8');
  console.log(`  Created: ${htmlFile}`);
});

// Copy static asset directories
const assetDirs = ['css', 'images', 'uswds'];

function copyDirSync(src, dest) {
  if (!fs.existsSync(dest)) {
    fs.mkdirSync(dest, { recursive: true });
  }
  const entries = fs.readdirSync(src, { withFileTypes: true });
  for (const entry of entries) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    if (entry.isDirectory()) {
      copyDirSync(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
    }
  }
}

assetDirs.forEach(dir => {
  const srcPath = path.join(srcDir, dir);
  const destPath = path.join(docsDir, dir);
  if (fs.existsSync(srcPath)) {
    copyDirSync(srcPath, destPath);
    console.log(`  Copied: ${dir}/`);
  }
});

console.log(`\nDone! ${phpFiles.length} HTML files generated in docs/`);
