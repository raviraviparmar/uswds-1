<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Government - RFPMart + USWDS</title>
    <meta name="description" content="Explore city government departments, leadership, services, and public resources in one place." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-city-gov.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-mobile-lg">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="margin-top-0 margin-bottom-0">
                        Official Website of
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            The City of RFPMart
                        </span>
                    </h1>
                    <p>
                        How can we help you today?
                    </p>
                    <form class="usa-search usa-search--small" role="search">
                        <label class="usa-sr-only" for="hero-search-field">Search</label>
                        <input
                            class="usa-input"
                            id="hero-search-field"
                            type="search"
                            name="search" />
                        <button class="usa-button" type="submit">
                            <img
                                src="uswds/dist/img/usa-icons-bg/search--white.svg"
                                class="usa-search__submit-icon"
                                alt="Search" />
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap-4 flex-justify-center">
                <div class="usa-card usa-card--header-first desktop:grid-col-5 tablet:grid-col-6 tablet:margin-0">
                    <div class="usa-card__container margin-x-0">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading">Meet Mayor RFP Mart</h3>
                        </div>
                        <div class="usa-card__media usa-card__media--exdent">
                            <div class="usa-card__img height-card">
                                <img
                                    src="images/webp/card-city-mayor.webp"
                                    alt="Portrait of Mayor RFP Mart" />
                            </div>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                                possimus similique nemo odit doloremque laudantium?
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <a href="departments-mayors-office.html" class="usa-link display-flex flex-row flex-align-center">
                                Read More
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="desktop:grid-col-7 tablet:grid-col-6">
                    <div class="margin-bottom-4 border-bottom-05">
                        <h2 class="font-heading-xl margin-top-0">
                            Quick Links
                        </h2>
                    </div>

                    <a
                        href="departments-city-council.html"
                        class="usa-button quick-link-arrow flex-justify-start height-7 width-full bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black">
                        <span class="font-body-md text-black">City Council</span>
                    </a>

                    <a
                        href="departments-directory-accordion.html"
                        class="usa-button quick-link-arrow flex-justify-start height-7 width-full margin-top-1 bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black">
                        <span class="font-body-md text-black">City Departments</span>
                    </a>

                    <a
                        href="sample-pages-careers.html"
                        class="usa-button quick-link-arrow flex-justify-start height-7 width-full margin-top-1 bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black">
                        <span class="font-body-md text-black">Careers</span>
                    </a>

                    <a
                        href="departments-police.html"
                        class="usa-button quick-link-arrow flex-justify-start height-7 width-full margin-top-1 bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black">
                        <span class="font-body-md text-black">Police</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-5 desktop:grid-col-5">
                    <h2 class="font-heading-xl">
                        Our Mission
                    </h2>
                </div>
                <div class="usa-prose tablet:grid-col-7 desktop:grid-col-7">
                    <p>
                        Our mission is to foster a safe, vibrant, and inclusive community.
                        We deliver essential services, support economic opportunity, and
                        protect our natural and public spaces.
                    </p>
                    <p>
                        We work in partnership with residents and local organizations to
                        strengthen neighborhoods, maintain reliable infrastructure, and
                        plan for a sustainable future.
                    </p>
                    <p>
                        Our Goals:
                    </p>
                    <ul class="usa-list">
                        <li>Support community well-being</li>
                        <li>Encourage civic participation</li>
                        <li>Maintain strong infrastructure</li>
                        <li>Promote economic stability</li>
                        <li>Protect the environment</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Initiatives & Programs
                </h2>
            </div>
            <div class="grid-row grid-gap-1">
                <div class="usa-card desktop:grid-col-5">
                    <div class="usa-card__container card-overlay display-flex position-relative flex-column flex-justify-center flex-align-center minh-card-lg text-center text-white hover:shadow-4"
                        style="background-image: url('images/webp/bt-sustainable-infra.webp'); background-size: cover; background-position: center;">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading" id="sustainable-heading">
                                Sustainable City Infrastructure Plan
                            </h3>
                        </div>

                        <p class="">
                            Long-term investment to modernize public infrastructure.
                            Focused on reducing emissions, improving transit, building resilient utilities
                        </p>

                        <a href="#"
                            class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                            aria-labelledby="sustainable-heading">
                            <span class="usa-sr-only">Read more</span>
                        </a>
                    </div>
                </div>
                <div class="tablet:grid-col-12 desktop:grid-col-7">
                    <ul class="usa-card-group grid-row grid-gap-1 flex-justify-center flex-align-center text-center">
                        <li class="usa-card tablet:grid-col-6 height-card">
                            <div class="usa-card__container card-overlay display-flex flex-column flex-justify-center text-white hover:shadow-4"
                                style="background-image: url('images/webp/bt-neighborhood-green-spaces.webp'); background-size: cover; background-position: center;">
                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading" id="neighbor-heading">
                                        Neighborhood Green Spaces Program
                                    </h3>
                                </div>

                                <a href="#"
                                    class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                                    aria-labelledby="neighbor-heading">
                                    <span class="usa-sr-only">Read more</span>
                                </a>
                            </div>
                        </li>

                        <li class="usa-card tablet:grid-col-6 height-card">
                            <div class="usa-card__container card-overlay display-flex flex-column flex-justify-center text-white hover:shadow-4"
                                style="background-image: url('images/webp/bt-affordable-housing.webp'); background-size: cover; background-position: center;">
                                <a href="#" class="display-block position-absolute top-0 left-0 width-full height-full z-200">
                                    <span class="usa-sr-only">Read more about Affordable Housing Support</span>
                                </a>
                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading" id="affordable-heading">
                                        Affordable Housing Support
                                    </h3>
                                </div>
                                <a href="#"
                                    class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                                    aria-labelledby="affordable-heading">
                                    <span class="usa-sr-only">Read more</span>
                                </a>
                            </div>
                        </li>

                        <li class="usa-card tablet:grid-col-6 height-card">
                            <div class="usa-card__container card-overlay display-flex flex-column flex-justify-center text-white hover:shadow-4"
                                style="background-image: url('images/webp/bt-small-business-growth.webp'); background-size: cover; background-position: center;">

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading" id="small-business-heading">
                                        Small Business Growth Assistance
                                    </h3>
                                </div>
                                <a href="#"
                                    class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                                    aria-labelledby="small-business-heading">
                                    <span class="usa-sr-only">Read more</span>
                                </a>
                            </div>
                        </li>

                        <li class="usa-card tablet:grid-col-6 height-card">
                            <div class="usa-card__container card-overlay display-flex flex-column flex-justify-center text-white hover:shadow-4"
                                style="background-image: url('images/webp/bt-clean-mobility.webp'); background-size: cover; background-position: center;">

                                <div class="usa-card__header">
                                    <h3 class="usa-card__heading" id="clean-heading">
                                        Clean Mobility Pilot
                                    </h3>
                                </div>
                                <a href="#"
                                    class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                                    aria-labelledby="clean-heading">
                                    <span class="usa-sr-only">Read more</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>

                <a href="#" class="usa-button usa-button--outline width-full margin-x-0 hover:bg-primary-dark hover:text-white">
                    View All Initiatives & Programs
                </a>
            </div>
        </section>

        <section class="grid-container usa-section">
            <div class="grid-row grid-gap-4">
                <div class="tablet:grid-col-6 desktop:grid-col-6">
                    <div class="margin-bottom-4 border-bottom-05">
                        <h2 class="font-heading-xl">
                            Latest News
                        </h2>
                    </div>
                    <ul class="usa-collection">
                        <li class="usa-collection__item margin-top-0 padding-top-0 border-0">
                            <div class="usa-collection__calendar-date">
                                <time datetime="2020-09-30T12:00:00+01:00"><span class="usa-collection__calendar-date-month">SEP</span>
                                    <span class="usa-collection__calendar-date-day">30</span></time>
                            </div>

                            <div class="usa-collection__body">
                                <h3 class="usa-collection__heading">
                                    <a
                                        class="usa-link"
                                        href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President's Award winners</a>
                                </h3>
                                <p class="usa-collection__description text-base">
                                    by John Doe
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date">
                                <time datetime="2020-09-30T12:00:00+01:00"><span class="usa-collection__calendar-date-month">SEP</span>
                                    <span class="usa-collection__calendar-date-day">30</span></time>
                            </div>

                            <div class="usa-collection__body">
                                <h3 class="usa-collection__heading">
                                    <a
                                        class="usa-link"
                                        href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President's Award winners</a>
                                </h3>
                                <p class="usa-collection__description text-base">
                                    by John Doe
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date">
                                <time datetime="2020-09-30T12:00:00+01:00"><span class="usa-collection__calendar-date-month">SEP</span>
                                    <span class="usa-collection__calendar-date-day">30</span></time>
                            </div>

                            <div class="usa-collection__body">
                                <h3 class="usa-collection__heading">
                                    <a
                                        class="usa-link"
                                        href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President's Award winners</a>
                                </h3>
                                <p class="usa-collection__description text-base">
                                    by John Doe
                                </p>
                            </div>
                        </li>
                    </ul>

                    <a href="sample-pages-blog-list.html" class="usa-button usa-button--outline width-full margin-x-0 hover:bg-primary-dark hover:text-white">
                        View All News
                    </a>
                </div>

                <div class="tablet:grid-col-6 desktop:grid-col-6">
                    <div class="margin-bottom-4 border-bottom-05">
                        <h2 class="font-heading-xl">
                            Upcoming Events
                        </h2>
                    </div>
                    <ul class="usa-collection">
                        <li class="usa-collection__item margin-top-0 padding-top-0 border-0">
                            <div class="usa-collection__calendar-date border-right-1px">
                                <time datetime="2020-09-30T12:00:00+01:00" class="text-center">
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        SEP
                                    </p>
                                    <h4 class="font-heading-2xl margin-0">
                                        21
                                    </h4>
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        2025
                                    </p>
                                </time>
                            </div>

                            <div class="usa-collection__body">
                                <p class="font-body-2xs margin-0 text-base line-height-sans-1">
                                    Monday, 11:20 AM
                                </p>
                                <h3 class="usa-collection__heading text-italic margin-top-1">
                                    Public Forum
                                </h3>
                                <p class="font-body-2xs text-base line-height-sans-1">
                                    Albert Hall
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date border-right-1px">
                                <time datetime="2020-09-30T12:00:00+01:00" class="text-center">
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        SEP
                                    </p>
                                    <h4 class="font-heading-2xl margin-0">
                                        21
                                    </h4>
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        2025
                                    </p>
                                </time>
                            </div>

                            <div class="usa-collection__body">
                                <p class="font-body-2xs margin-0 text-base line-height-sans-1">
                                    Monday, 11:20 AM
                                </p>
                                <h3 class="usa-collection__heading text-italic margin-top-1">
                                    Public Forum
                                </h3>
                                <p class="font-body-2xs text-base line-height-sans-1">
                                    Albert Hall
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date border-right-1px">
                                <time datetime="2020-09-30T12:00:00+01:00" class="text-center">
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        SEP
                                    </p>
                                    <h4 class="font-heading-2xl margin-0">
                                        21
                                    </h4>
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        2025
                                    </p>
                                </time>
                            </div>

                            <div class="usa-collection__body">
                                <p class="font-body-2xs margin-0 text-base line-height-sans-1">
                                    Monday, 11:20 AM
                                </p>
                                <h3 class="usa-collection__heading text-italic margin-top-1">
                                    Public Forum
                                </h3>
                                <p class="font-body-2xs text-base line-height-sans-1">
                                    Albert Hall
                                </p>
                            </div>
                        </li>
                    </ul>

                    <a href="sample-pages-events-list.html" class="usa-button usa-button--outline width-full margin-x-0 hover:bg-primary-dark hover:text-white">
                        View All Events
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>
