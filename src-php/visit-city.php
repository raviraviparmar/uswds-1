<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Visit the City - RFPMart + USWDS</title>
    <meta name="description" content="Plan your visit with information on attractions, events, maps, and visitor resources." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-visit-city.webp')" aria-label="Introduction">
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
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Discover RFPMart
                        </span>
                    </h1>
                    <p>
                        From vibrant neighborhoods to natural escapes, discover what makes RFPMart unforgettable.
                    </p>
                    <div class="grid-row">
                        <a class="usa-button margin-bottom-1 grid-col" href="#">Explore Experiences</a>
                        <a class="usa-button margin-bottom-1 grid-col" href="#">Plan A Visit</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Explore
                </h2>
            </div>

            <ul class="grid-row usa-list--unstyled flex-row flex-wrap flex-justify-center">

                <li class="tablet:grid-col-6 desktop:grid-col-3 padding-x-1">
                    <a
                        href="#"
                        class="usa-button height-15 width-full margin-bottom-1 hover:shadow-4"
                        style="background-image: url('images/webp/bt-transportation.webp'); background-size: cover; background-position: center;">
                        <span class="font-heading-lg text-white">Transportation</span>
                    </a>
                </li>

                <li class="tablet:grid-col-6 desktop:grid-col-3 padding-x-1">
                    <a
                        href="#"
                        class="usa-button height-15 width-full margin-bottom-1 hover:shadow-4"
                        style="background-image: url('images/webp/bt-attractions.webp'); background-size: cover; background-position: center;">
                        <span class="font-heading-lg text-white">Attractions</span>
                    </a>
                </li>

                <li class="tablet:grid-col-6 desktop:grid-col-3 padding-x-1">
                    <a
                        href="#"
                        class="usa-button height-15 width-full margin-bottom-1 hover:shadow-4"
                        style="background-image: url('images/webp/bt-dining.webp'); background-size: cover; background-position: center;">
                        <span class="font-heading-lg text-white">Dining</span>
                    </a>
                </li>

                <li class="tablet:grid-col-6 desktop:grid-col-3 padding-x-1">
                    <a
                        href="#"
                        class="usa-button height-15 width-full hover:shadow-4"
                        style="background-image: url('images/webp/bt-accommodation.webp'); background-size: cover; background-position: center;">
                        <span class="font-heading-lg text-white">Accommodation</span>
                    </a>
                </li>

            </ul>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Three Pillars of the City
                </h2>
            </div>
            <ul class="usa-card-group grid-row grid-gap-2">
                <li class="usa-card tablet:grid-col">
                    <div class="usa-card__container hover:shadow-4">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading" id="culture-heritage-heading">Culture & Heritage</h3>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img height-card">
                                <img
                                    src="images/webp/card-visit-culture-heritage.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body padding-bottom-3 text-italic">
                            <p>
                                "Walk through living history"
                            </p>
                        </div>

                        <a href="#"
                            class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                            aria-labelledby="culture-heritage-heading">
                            <span class="usa-sr-only">Read more</span>
                        </a>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col">
                    <div class="usa-card__container hover:shadow-4">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading" id="nature-outdoors-heading">Nature & Outdoors</h3>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img height-card">
                                <img
                                    src="images/webp/card-visit-nature-outdoors.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body padding-bottom-3 text-italic">
                            <p>
                                “Where skyline meets the horizon.”
                            </p>
                        </div>

                        <a href="#"
                            class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                            aria-labelledby="nature-outdoors-heading">
                            <span class="usa-sr-only">Read more</span>
                        </a>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col">
                    <div class="usa-card__container hover:shadow-4">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading" id="community-life-heading">Community & Life</h3>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img height-card">
                                <img
                                    src="images/webp/card-visit-community-life.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body padding-bottom-3 text-italic">
                            <p>
                                “Live the city’s rhythm.”
                            </p>
                        </div>
                        <a href="#"
                            class="display-block position-absolute top-0 left-0 width-full height-full z-200"
                            aria-labelledby="community-life-heading">
                            <span class="usa-sr-only">Read more</span>
                        </a>
                    </div>
                </li>
            </ul>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Local Voices
                </h2>
            </div>

            <div class="grid-row grid-gap">
                <ul class="usa-card-group">
                    <li class="usa-card usa-card--flag">
                        <div class="usa-card__container">
                            <div class="usa-card__media display-flex flex-justify-center">
                                <img class="" src="images/webp/card-visit-resident-2.webp" alt="Image">
                            </div>
                            <div class="usa-card__body font-body-xs">
                                <p>“I’ve lived here for 12 years, and the community spirit still amazes me. Every season brings a new festival or market, and you’re never far from great music or incredible food. Visitors always say it feels instantly welcoming—and they’re right!”</p>
                            </div>
                            <div class="usa-card__footer">
                                <p>John Doe, Resident</p>
                            </div>
                        </div>
                    </li>
                    <li class="usa-card usa-card--flag">
                        <div class="usa-card__container">
                            <div class="usa-card__media display-flex flex-justify-center">
                                <img class="" src="images/webp/card-visit-resident-3.webp" alt="Image">
                            </div>
                            <div class="usa-card__body font-body-xs">
                                <p>"Whether it’s hiking the nearby trails or wandering the historic downtown, there’s always an adventure waiting. I love how easy it is to explore on foot; hidden gems are everywhere. You’ll come for a weekend and wish you stayed longer."</p>
                            </div>
                            <div class=" usa-card__footer">
                                <p>John Doe, Resident</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="usa-section bg-primary-lighter">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl">
                        Our Accomplishments
                    </h2>
                </div>

                <div class="grid-row grid-gap">
                    <div class="tablet:grid-col">

                        <svg
                            class="usa-icon usa-icon--size-9"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <g transform="translate(72, 72)">
                                <path
                                    fill="#FFD43B"
                                    d="M245.9-25.9c-13.4-8.2-30.3-8.2-43.7 0-24.4 14.9-39.5 18.9-68.1 18.3-15.7-.4-30.3 8.1-37.9 21.9-13.7 25.1-24.8 36.2-49.9 49.9-13.8 7.5-22.2 22.2-21.9 37.9 .7 28.6-3.4 43.7-18.3 68.1-8.2 13.4-8.2 30.3 0 43.7 14.9 24.4 18.9 39.5 18.3 68.1-.4 15.7 8.1 30.3 21.9 37.9 22.1 12.1 33.3 22.1 45.1 41.5L42.7 458.5c-5.9 11.9-1.1 26.3 10.7 32.2l86 43c11.5 5.7 25.5 1.4 31.7-9.8l52.8-95.1 52.8 95.1c6.2 11.2 20.2 15.6 31.7 9.8l86-43c11.9-5.9 16.7-20.3 10.7-32.2l-48.6-97.2c11.7-19.4 23-29.4 45.1-41.5 13.8-7.5 22.2-22.2 21.9-37.9-.7-28.6 3.4-43.7 18.3-68.1 8.2-13.4 8.2-30.3 0-43.7-14.9-24.4-18.9-39.5-18.3-68.1 .4-15.7-8.1-30.3-21.9-37.9-25.1-13.7-36.2-24.8-49.9-49.9-7.5-13.8-22.2-22.2-37.9-21.9-28.6 .7-43.7-3.4-68.1-18.3zM224 96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                            </g>
                        </svg>
                        <h3 class="font-heading-md">
                            Best Sustainable City
                        </h3>
                        <p class="margin-top-0">
                            National Urban Innovation Council
                        </p>
                        <p class="margin-top-0">
                            2024
                        </p>
                    </div>

                    <div class="tablet:grid-col">
                        <svg
                            class="usa-icon usa-icon--size-9"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <g transform="translate(0, 72)">
                                <path fill="#64e67a" d="M288 48c0-26.5 21.5-48 48-48l96 0c26.5 0 48 21.5 48 48l0 48 48 0 0-72c0-13.3 10.7-24 24-24s24 10.7 24 24l0 72 16 0c26.5 0 48 21.5 48 48l0 320c0 26.5-21.5 48-48 48l-256 0c-26.5 0-48-21.5-48-48l0-416zm64 64l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm16 80c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM352 304l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zM528 192c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM512 304l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zM96 480l0-160-16 0c-44.2 0-80-35.8-80-80 0-26.7 13.1-50.3 33.2-64.9-.8-4.9-1.2-10-1.2-15.1 0-53 43-96 96-96s96 43 96 96l0 96c0 35.3-28.7 64-64 64l0 160c0 17.7-14.3 32-32 32s-32-14.3-32-32z" />
                            </g>
                        </svg>
                        <h3 class="font-heading-md">
                            Green Community Award
                        </h3>
                        <p class="margin-top-0">
                            Environmental Cities Alliance
                        </p>
                        <p class="margin-top-0">
                            2023
                        </p>
                    </div>

                    <div class="tablet:grid-col">
                        <svg
                            class="usa-icon usa-icon--size-9"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <g transform="translate(72, 72)">
                                <path fill="#b59d79" d="M238.7 5.1c10.5-6.8 24.1-6.8 34.6 0l224 144c11.9 7.7 17.4 22.3 13.4 35.9s-16.5 23-30.7 23l-32 0 0 208 51.2 38.4c8.1 6 12.8 15.5 12.8 25.6 0 17.7-14.3 32-32 32L32 512c-17.7 0-32-14.3-32-32 0-10.1 4.7-19.6 12.8-25.6l51.2-38.4 0 0 0-208-32 0c-14.2 0-26.7-9.4-30.7-23s1.5-28.3 13.4-35.9l224-144zM336 208l0 208 64 0 0-208-64 0zM224 416l64 0 0-208-64 0 0 208zM112 208l0 208 64 0 0-208-64 0z" />
                            </g>
                        </svg>
                        <h3 class="font-heading-md">
                            Cultural Heritage Preservation Award
                        </h3>
                        <p class="margin-top-0">
                            National Arts & History Association
                        </p>
                        <p class="margin-top-0">
                            2022
                        </p>
                    </div>

                    <div class="tablet:grid-col">
                        <svg
                            class="usa-icon usa-icon--size-9"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <g transform="translate(36, 72)">
                                <path fill="#B197FC" d="M368 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm27.2 64l-61.8-48.8c-17.3-13.6-41.7-13.8-59.1-.3l-83.1 64.2c-30.7 23.8-28.5 70.8 4.3 91.6L256 305.1 256 416c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128c0-10.7-5.3-20.7-14.2-26.6L263 232.9 323.3 184.4 364 217c5.7 4.5 12.7 7 20 7l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-52.8 0zM112 512a112 112 0 1 0 0-224 112 112 0 1 0 0 224zm352 0a112 112 0 1 0 0-224 112 112 0 1 0 0 224z" />
                            </g>
                        </svg>
                        <h3 class="font-heading-md">
                            Top Cycling-Friendly City
                        </h3>
                        <p class="margin-top-0">
                            Urban Mobility Federation
                        </p>
                        <p class="margin-top-0">
                            2021
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section">
            <div class="grid-container text-center">
                <div class="grid-row flex-column flex-justify-center border-1px border-base-light radius-lg shadow-3">
                    <h2 class="font-heading-xl">
                        Stay Inspired
                    </h2>
                    <h2 class="font-heading-md text-italic">
                        Get the latest stories from RFPMart
                    </h2>
                    <div class="display-flex flex-justify-center flex-wrap flex-align-center maxw-none">
                        <form class="usa-form">
                            <input class="usa-input width-card-lg" type="email" placeholder="Email address">
                            <button class="usa-button margin-bottom-4">Sign Up</button>
                        </form>
                    </div>
                </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>
