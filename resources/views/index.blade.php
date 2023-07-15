<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chroma | Digital Art</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3 position-relative">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" alt="Logo Brand" width="104">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="">Home</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">About Us</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">Artist Digital</a>
                </div>
            </div>
            <a href="#" class="button-secondary d-none d-lg-flex align-items-center gap-2">
                Contact Us
                <img src="{{ asset('assets/img/icon/arrow-button-dark.svg') }}" class="img-fluid"
                    alt="Arrow Button Dark Icon" width="10">
            </a>
        </div>
    </nav>
    {{-- END NAVBAR --}}


    <main>
        {{-- HERO SECTION --}}
        <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0 position-relative" id="hero">
            <div class="banner-image position-absolute d-none d-lg-inline-block">
                <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="hero Banner Image">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="offset-lg-6 offset-xxl-5 col-lg-6 col-xxl-7">
                        <h1 class="headline" style="margin-bottom: 16px;">Dive into the World of <span
                                class="primary">Chroma</span> - Where Art
                            <span class="primary">Meets Technology</span>
                        </h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph">Welcome to Chroma, the ultimate destination for digital art enthusiasts
                                and creators. Our hero section invites you to explore a world where art and technology
                                intertwine, where imagination knows no bounds, and where colors come alive. Step into a
                                digital art wonderland where your creativity can flourish and your artistic visions can
                                be brought to life.</p>
                            <p class="paragraph d-none d-md-inline-block">Whether you're a seasoned artist or just
                                starting your creative
                                journey, Chroma offers a vibrant palette of tools, inspiration, and community to support
                                and enhance your digital artistry.</p>
                        </div>
                        <div class="wrapper d-flex justify-content-between align-items-end">
                            <div class="wrapper-button d-flex gap-2 align-items-center">
                                <a href="#" class="button-default">Let’s Explore</a>
                                <a href="#" class="button-secondary d-flex align-items-center gap-2">
                                    Our Collection
                                    <img src="{{ asset('assets/img/icon/arrow-button-dark.svg') }}" class="img-fluid"
                                        alt="Arrow Button Dark Icon" width="10">
                                </a>
                            </div>
                            <div class="other text-end d-none d-xl-inline-block">
                                <p class="other-label">scroll down</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END HERO SECTION --}}


        {{-- CATEGORIES SECTION --}}
        <section class="category section-gap" id="category">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h2 class="title">Discover the Boundless <span class="primary">Categories of Digital Art on
                                Chroma</span></h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Dive into digital paintings, mesmerizing 3D creations, thought-provoking
                            photography, and more as you explore the boundless possibilities of artistic expression.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <h6 style="margin-bottom: 6px;">Digital Painting</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">This category encompasses artworks
                                that simulate traditional painting techniques using digital tools and software.</p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="card-default mt-4">
                            <h6 style="margin-bottom: 6px;">Digital Typography and Lettering</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks that focus on the design
                                and arrangement of digital typography and letterforms.</p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <h6 style="margin-bottom: 6px;">Digital Drawing</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks created primarily using
                                digital drawing techniques, including sketching, line art, and illustrative styles.</p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="card-default mt-4">
                            <h6 style="margin-bottom: 6px;">Digital Concept Art</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks created as part of the
                                concept design process for various media, including video games, movies, and animations.
                            </p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="card-default">
                            <h6 style="margin-bottom: 6px;">3D Modeling and Sculpting</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">This category includes artworks
                                that are created using 3D modeling and sculpting software.</p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="card-default mt-4">
                            <h6 style="margin-bottom: 6px;">Digital Animation</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks that involve the creation
                                of moving images or sequences using digital techniques.
                            </p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card-default">
                            <h6 style="margin-bottom: 6px;">Digital Photography</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Digital photographs that have been
                                digitally enhanced, edited, or manipulated fall under this category.</p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="card-default mt-4">
                            <h6 style="margin-bottom: 6px;">Generative Art</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks that are created using
                                algorithms, code, or interactive systems to generate visual output.
                            </p>
                            <button class="card-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END CATEGORIES SECTION --}}


        {{-- ABOUT SECTION --}}
        <section class="about d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0 position-relative"
            id="about">
            <div class="banner-image-reverse position-absolute d-none d-lg-inline-block">
                <img src="{{ asset('assets/img/banner/about-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="banner Banner Image">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-7">
                        <h2 class="title" style="margin-bottom: 16px;">Explore the Infinite Possibilities of <span
                                class="primary">Chroma's
                                Digital Art Universe</span></h2>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph">Welcome to Chroma, a vibrant digital art destination that celebrates
                                the fusion of art and technology. In our About section, we invite you to embark on a
                                journey into the realm of digital artistry. Chroma is a haven where colors come alive,
                                where imagination knows no boundaries, and where artists can unleash their creativity
                                with cutting-edge digital tools.</p>
                            <p class="paragraph d-none d-md-inline-block">Discover the rich tapestry of digital art
                                forms, from mesmerizing illustrations and mind-bending animations to immersive virtual
                                reality experiences. At Chroma, we strive to cultivate an inspiring community that
                                nurtures artistic growth and pushes the boundaries of creative expression.</p>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h4 class="fact-value">168+</h4>
                                <p class="fact-caption">Total Collection</p>
                            </div>
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h4 class="fact-value">12+</h4>
                                <p class="fact-caption">Total Artist Digital</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h4 class="fact-value">03+</h4>
                                <p class="fact-caption">Total Branch Places</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h4 class="fact-value">632+</h4>
                                <p class="fact-caption">Satisfied customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END ABOUT SECTION --}}


        {{-- ADVENTAGE SECTION --}}
        <section class="adventage section-gap" id="adventage" style="padding-bottom: 72px !important;">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h2 class="title">Advantages of Chroma, <span class="primary">Art and Technology
                                Converge</span></h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">This carefully curated collection represents the epitome of artistic
                            brilliance, featuring stunning pieces that push the boundaries of creativity and innovation.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <div class="card-icon" style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-1.svg') }}" class="img-fluid"
                                    alt="Adventage Image" width="26">
                            </div>
                            <h6 style="margin-bottom: 6px;">Unlimited Creative Possibilities</h6>
                            <p class="paragraph-small">With Chroma, artists have access to a vast array of digital
                                tools, brushes, and effects.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <div class="card-icon" style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-2.svg') }}" class="img-fluid"
                                    alt="Adventage Image" width="26">
                            </div>
                            <h6 style="margin-bottom: 6px;">Seamless Workflow Integration</h6>
                            <p class="paragraph-small">Chroma offers a seamless workflow
                                experience, allowing artists to easily import.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="card-default">
                            <div class="card-icon" style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-3.svg') }}" class="img-fluid"
                                    alt="Adventage Image" width="26">
                            </div>
                            <h6 style="margin-bottom: 6px;">Community and Collaboration</h6>
                            <p class="paragraph-small">Chroma fosters a vibrant community of digital artists,
                                opportunities for collaboration.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card-default">
                            <div class="card-icon" style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-4.svg') }}" class="img-fluid"
                                    alt="Adventage Image" width="26">
                            </div>
                            <h6 style="margin-bottom: 6px;">Showcase and Exposure</h6>
                            <p class="paragraph-small">Chroma offers a dedicated space for artists to showcase their
                                work to a global audience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END ADVENTAGE SECTION --}}


        {{-- GALLERY SECTION --}}
        <section class="gallery" id="gallery" style="padding: 72px 0;">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h2 class="title">Journey through the <span class="primary">Vibrant Gallery on Chroma</span>
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">From mesmerizing digital paintings to captivating illustrations, our
                            gallery showcases the limitless possibilities of digital creativity.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="wrapper-image rounded" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-1.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-5.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="wrapper-image rounded" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-2.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-6.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="wrapper-image rounded" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-3.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-7.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="wrapper-image rounded" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-4.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;">
                            <img src="{{ asset('assets/img/gallery/gallery-8.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END GALLERY SECTION --}}


        {{-- PRICING SECTION --}}
        <section class="pricing section-gap" id="pricing" style="padding-top: 72px !important;">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h2 class="title">Discover <span class="primary">Fair and Transparent Pricing</span> at
                            Chroma</h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Our Artist Pricing section showcases a range of options designed to
                            accommodate diverse budgets and preferences.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card-default">
                            <h6>Silver Membership Package</h6>
                            <h5 style="margin-bottom: 5px;">$9.99/month</h5>
                            <p class="paragraph-small">Gain access to our exclusive digital art collection with the
                                Silver Membership Package. Explore a diverse range of artworks from renowned artists,
                                enjoy unlimited digital art downloads, and receive regular updates on new exhibitions
                                and featured artists.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin: 22px 0 28px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">Unlimited access to our digital art collection</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">Download high-quality digital artworks</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">Stay informed about new exhibitions</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">Exclusive access to member-only events</p>
                                </div>
                            </div>
                            <button class="button-primary-secondary d-flex justify-content-center">
                                <div class="wrapper d-flex align-items-center gap-2">
                                    <h6 class="button-label">Buy Ticket</h6>
                                    <div class="arrow-button-icon"></div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-default">
                            <h6>Gold Membership Package</h6>
                            <h5 style="margin-bottom: 5px;">$19.99/month</h5>
                            <p class="paragraph-small">Elevate your digital art experience with the Gold Membership
                                Package. Enjoy all the benefits of the Silver Membership, plus additional perks such as
                                priority access to new exhibitions, personalized art recommendations.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin: 22px 0 28px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">All the benefits of the Silver Package</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">Priority access to new exhibitions</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">Personalized art recommendations</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph">Invitations to exclusive virtual artist talks</p>
                                </div>
                            </div>
                            <button class="button-primary-secondary d-flex justify-content-center">
                                <div class="wrapper d-flex align-items-center gap-2">
                                    <h6 class="button-label">Buy Ticket</h6>
                                    <div class="arrow-button-icon"></div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END PRICING SECTION --}}

    </main>


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>
