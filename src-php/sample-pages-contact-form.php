<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send a Message - RFPMart + USWDS</title>
    <meta name="description" content="Submit questions or requests directly to the city using the online contact form." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">

        <div class="bg-base-lightest">
            <section class="grid-container usa-section">
                <div class="grid-row flex-justify-center">
                    <div class="grid-col-12 tablet:grid-col-8 desktop:grid-col-6">
                        <div class="bg-white padding-y-3 padding-x-5 border border-base-lighter">

                            <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                                <ul class="usa-breadcrumb__list">
                                    <li class="usa-breadcrumb__list-item">
                                        <a href="./" class="usa-breadcrumb__link">
                                            <span class="">Home</span>
                                        </a>
                                    </li>
                                    <li class="usa-breadcrumb__list-item">
                                        <a href="#" class="usa-breadcrumb__link">
                                            <span class="">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            <h1 class="margin-bottom-0">Contact Us Form</h1>
                            <p>
                                Please fill out all required field and we will get back to you within 48 business hours
                            </p>

                            <form class="usa-form maxw-full">
                                <fieldset class="usa-fieldset">
                                    <label class="usa-label" for="given-name">First Name:</label>
                                    <input
                                        class="usa-input"
                                        id="given-name"
                                        name="first-name"
                                        aria-describedby="gnHint" />
                                    <label class="usa-label" for="family-name">Last Name:</label>
                                    <input
                                        class="usa-input"
                                        id="family-name"
                                        name="last-name"
                                        aria-describedby="lnHint" />
                                    <label class="usa-label" for="email">Email (Required):</label>
                                    <input
                                        class="usa-input"
                                        id="email"
                                        name="email"
                                        type="email"
                                        aria-describedby="emailHint"
                                        required />
                                    <label class="usa-label" for="subject">Subject (Required):</label>
                                    <input
                                        class="usa-input"
                                        id="subject"
                                        name="subject"
                                        aria-describedby="subjectHint"
                                        required />
                                    <label class="usa-label" for="input-type-textarea">Inquiry (Required):</label>
                                    <textarea
                                        class="usa-textarea"
                                        id="input-type-textarea"
                                        name="input-type-textarea"
                                        required></textarea>
                                    <input class="usa-button margin-0" type="submit" value="Submit" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>
