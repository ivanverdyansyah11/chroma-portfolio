<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numerica | Accounting</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- END STYLE CSS --}}
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3 position-relative" data-aos-once="true" data-aos="fade-down" data-aos-duration="1400">
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
                    <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="#home">Home</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="#category">Categories Art</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="#about">About Us</a>
                </div>
            </div>
            <a href="https://wa.me/6281234567890" target="_blank"
                class="button-secondary d-none d-lg-flex align-items-center gap-2">
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
                    alt="hero Banner Image" data-aos-once="true" data-aos="fade" data-aos-duration="1400" data-aos-delay="1000">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="offset-lg-6 offset-xxl-5 col-lg-6 col-xxl-7">
                        <h1 class="headline" style="margin-bottom: 16px;" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="1600">Dive into the World of <span
                                class="primary">Chroma</span> - Where Art
                            <span class="primary">Meets Technology</span>
                        </h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="2200">Welcome to Chroma, the ultimate destination for digital art enthusiasts
                                and creators. Our hero section invites you to explore a world where art and technology
                                intertwine, where imagination knows no bounds, and where colors come alive. Step into a
                                digital art wonderland where your creativity can flourish and your artistic visions can
                                be brought to life.</p>
                            <p class="paragraph d-none d-md-inline-block" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="2400">Whether you're a seasoned artist or just
                                starting your creative
                                journey, Chroma offers a vibrant palette of tools, inspiration, and community to support
                                and enhance your digital artistry.</p>
                        </div>
                        <div class="wrapper d-flex justify-content-between align-items-end">
                            <div class="wrapper-button d-flex gap-2 align-items-center">
                                <a href="#about" class="button-default" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Let’s Explore</a>
                                <a href="#gallery" class="button-secondary d-flex align-items-center gap-2" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">
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
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Discover the Boundless <span class="primary">Categories of Digital Art on
                                Chroma</span></h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">Dive into digital paintings, mesmerizing 3D creations, thought-provoking
                            photography, and more as you explore the boundless possibilities of artistic expression.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">Digital Painting</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">This category encompasses artworks
                                that simulate traditional painting techniques using digital tools and software.</p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category1">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category1" tabindex="-1" aria-labelledby="category1Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Digital Painting</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">This category encompasses artworks that simulate
                                            traditional painting techniques using digital tools and software. It
                                            includes various styles such as realistic, impressionistic, abstract, and
                                            fantasy.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-default mt-4" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">Digital Typography and Lettering</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks that focus on the design
                                and arrangement of digital typography and letterforms.</p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category2">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category2" tabindex="-1" aria-labelledby="category2Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Digital Typography and Lettering</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">Artworks that focus on the design and arrangement of
                                            digital typography and letterforms. It includes hand-lettering, calligraphy,
                                            typographic compositions, and experimental typography.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">Digital Drawing</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks created primarily using
                                digital drawing techniques, including sketching, line art, and illustrative styles.</p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category3">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category3" tabindex="-1" aria-labelledby="category3Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Digital Drawing</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">Artworks created primarily using digital drawing
                                            techniques, including sketching, line art, and illustrative styles. It can
                                            range from simple black and white sketches to intricate and detailed
                                            illustrations.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-default mt-4" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">Digital Concept Art</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks created as part of the
                                concept design process for various media, including video games, movies, and animations.
                            </p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category4">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category4" tabindex="-1" aria-labelledby="category4Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Digital Concept Art</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">Artworks created as part of the concept design
                                            process for various media, including video games, movies, and animations.
                                            These artworks often depict characters, environments, and props to visualize
                                            and develop the creative vision.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="card-default" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">3D Modeling and Sculpting</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">This category includes artworks
                                that are created using 3D modeling and sculpting software.</p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category5">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category5" tabindex="-1" aria-labelledby="category5Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>3D Modeling and Sculpting</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">This category includes artworks that are created
                                            using 3D modeling and sculpting software. Artists use digital tools to
                                            design and manipulate virtual objects, characters, environments, and
                                            sculptures.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-default mt-4" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">Digital Animation</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks that involve the creation
                                of moving images or sequences using digital techniques.
                            </p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category6">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category6" tabindex="-1" aria-labelledby="category6Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Digital Animation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">Artworks that involve the creation of moving images
                                            or sequences using digital techniques. This can include 2D animations, 3D
                                            animations, motion graphics, and visual effects.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card-default" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">Digital Photography</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Digital photographs that have been
                                digitally enhanced, edited, or manipulated fall under this category.</p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category7">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category7" tabindex="-1" aria-labelledby="category7Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Digital Photography</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">Digital photographs that have been digitally
                                            enhanced, edited, or manipulated fall under this category. It includes
                                            various genres such as landscape, portrait, still life, and conceptual
                                            photography.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-default mt-4" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <h6 style="margin-bottom: 6px;">Generative Art</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Artworks that are created using
                                algorithms, code, or interactive systems to generate visual output.
                            </p>
                            <button class="card-link d-flex align-items-center gap-2" data-bs-toggle="modal"
                                data-bs-target="#category8">
                                More Detail
                                <img src="{{ asset('assets/img/icon/arrow-button-primary.svg') }}" class="img-fluid"
                                    alt="Arrow Button Primary Icon" width="10">
                            </button>
                        </div>

                        <div class="modal fade" id="category8" tabindex="-1" aria-labelledby="category8Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Generative Art</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="paragraph-small">Artworks that are created using algorithms, code, or
                                            interactive systems to generate visual output. It explores the intersection
                                            of art and technology, often resulting in dynamic and interactive digital
                                            experiences.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button-secondary" data-bs-dismiss="modal">Close
                                            Modal</button>
                                    </div>
                                </div>
                            </div>
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
                    alt="About Banner Image" data-aos-once="true" data-aos="fade" data-aos-duration="1400">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-7">
                        <h2 class="title" style="margin-bottom: 16px;" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Explore the Infinite Possibilities of <span
                                class="primary">Chroma's
                                Digital Art Universe</span></h2>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Welcome to Chroma, a vibrant digital art destination that celebrates
                                the fusion of art and technology. In our About section, we invite you to embark on a
                                journey into the realm of digital artistry. Chroma is a haven where colors come alive,
                                where imagination knows no boundaries, and where artists can unleash their creativity
                                with cutting-edge digital tools.</p>
                            <p class="paragraph d-none d-md-inline-block" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Discover the rich tapestry of digital art
                                forms, from mesmerizing illustrations and mind-bending animations to immersive virtual
                                reality experiences. At Chroma, we strive to cultivate an inspiring community that
                                nurtures artistic growth and pushes the boundaries of creative expression.</p>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                                <h4 class="fact-value">168+</h4>
                                <p class="fact-caption">Total Collection</p>
                            </div>
                            <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="200">
                                <h4 class="fact-value">12+</h4>
                                <p class="fact-caption">Total Artist Digital</p>
                            </div>
                            <div class="col-6 col-md-3" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="400">
                                <h4 class="fact-value">03+</h4>
                                <p class="fact-caption">Total Branch Places</p>
                            </div>
                            <div class="col-6 col-md-3" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="600">
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
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Advantages of Chroma, <span class="primary">Art and Technology
                                Converge</span></h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">This carefully curated collection represents the epitome of artistic
                            brilliance, featuring stunning pieces that push the boundaries of creativity and innovation.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">
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
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="300">
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
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="600">
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
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="900">
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
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Journey through the <span class="primary">Vibrant Gallery on Chroma</span>
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">From mesmerizing digital paintings to captivating illustrations, our
                            gallery showcases the limitless possibilities of digital creativity.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="wrapper-image rounded" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <img src="{{ asset('assets/img/gallery/gallery-1.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <img src="{{ asset('assets/img/gallery/gallery-5.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="wrapper-image rounded" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="300">
                            <img src="{{ asset('assets/img/gallery/gallery-2.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="300">
                            <img src="{{ asset('assets/img/gallery/gallery-6.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="wrapper-image rounded" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="600">
                            <img src="{{ asset('assets/img/gallery/gallery-3.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="600">
                            <img src="{{ asset('assets/img/gallery/gallery-7.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="wrapper-image rounded" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="900">
                            <img src="{{ asset('assets/img/gallery/gallery-4.svg') }}" class="img-fluid w-100"
                                alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4" style="height: max-content;" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="900">
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
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Discover <span class="primary">Fair and Transparent Pricing</span> at
                            Chroma</h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">Our Artist Pricing section showcases a range of options designed to
                            accommodate diverse budgets and preferences.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">
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
                                    <p class="paragraph-small">Unlimited access to our digital art collection</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Download high-quality digital artworks</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Stay informed about new exhibitions</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Exclusive access to member-only events</p>
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
                    <div class="col-md-6 col-lg-4 mt-4 mt-md-0">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="300">
                            <h6>Gold Membership Package</h6>
                            <h5 style="margin-bottom: 5px;">$19.99/month</h5>
                            <p class="paragraph-small">Elevate your digital art experience with the Gold Membership
                                Package. Enjoy all the benefits of the Silver Membership, plus additional perks such as
                                priority access to new exhibitions, personalized art recommendations.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin: 22px 0 28px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">All the benefits of the Silver Package</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Priority access to new exhibitions</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Personalized art recommendations</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Invitations to exclusive virtual artist talks</p>
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
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="600">
                            <h6>Platinum Membership Package</h6>
                            <h5 style="margin-bottom: 5px;">$29.99/month</h5>
                            <p class="paragraph-small">Immerse yourself in the ultimate digital art experience with
                                the Platinum Membership Package. In addition to the benefits of the Gold Membership,
                                you'll enjoy concierge services, virtual gallery tours with curators.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin: 22px 0 28px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">All the benefits of the Gold Package</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Dedicated concierge services for personalized</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Virtual gallery tours led by curators</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Benefit Icon" width="22">
                                    <p class="paragraph-small">Exclusive access to limited-edition artworks</p>
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


        {{-- TESTIMONI SECTION --}}
        <section class="testimoni d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0 position-relative"
            id="testimoni">
            <div class="banner-image-reverse position-absolute d-none d-lg-inline-block">
                <img src="{{ asset('assets/img/banner/testimoni-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="Testimoni Banner Image" data-aos-once="true" data-aos="fade" data-aos-duration="1400">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-7">
                        <h2 class="title" style="margin-bottom: 16px;" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Celebrating Artistic Success, <span
                                class="primary">Stories of
                                Artists Thriving on Chroma</span></h2>
                        <p class="paragraph" style="margin-bottom: 42px;" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Delve into the inspiring stories and
                            experiences shared by artists who
                            have found their creative haven on Chroma. From discovering new opportunities and
                            connecting with a vibrant community.</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="wrapper position-relative">
                                    <div class="swiper mySwiper position-relative">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">
                                                <div class="card-default">
                                                    <div class="wrapper-profile d-flex align-items-center gap-3">
                                                        <div class="profile-image">
                                                            <img src="{{ asset('assets/img/testimoni/testimoni-1.svg') }}"
                                                                class="img-fluid w-100" alt="Testimoni Profile Image">
                                                        </div>
                                                        <div class="wrapper">
                                                            <h6 class="testimoni-name">Sofia Torres</h6>
                                                            <p class="paragraph-small testimoni-position">Digital
                                                                Artist</p>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph-small" style="margin-top: 14px;">“I can't
                                                        express enough how
                                                        grateful I am to be part of
                                                        Chroma. The platform has truly been a game-changer for my
                                                        artistic career. The
                                                        supportive community.”</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">
                                                <div class="card-default">
                                                    <div class="wrapper-profile d-flex align-items-center gap-3">
                                                        <div class="profile-image">
                                                            <img src="{{ asset('assets/img/testimoni/testimoni-2.svg') }}"
                                                                class="img-fluid w-100" alt="Testimoni Profile Image">
                                                        </div>
                                                        <div class="wrapper">
                                                            <h6 class="testimoni-name">Lucas Rivera</h6>
                                                            <p class="paragraph-small testimoni-position">Digital
                                                                Sculptor</p>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph-small" style="margin-top: 14px;">“Chroma has
                                                        been a transformative experience for me as an artist. The
                                                        platform has not only provided me with a space to showcase my
                                                        digital artworks.”</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="600">
                                                <div class="card-default">
                                                    <div class="wrapper-profile d-flex align-items-center gap-3">
                                                        <div class="profile-image">
                                                            <img src="{{ asset('assets/img/testimoni/testimoni-3.svg') }}"
                                                                class="img-fluid w-100" alt="Testimoni Profile Image">
                                                        </div>
                                                        <div class="wrapper">
                                                            <h6 class="testimoni-name">Emily Collins</h6>
                                                            <p class="paragraph-small testimoni-position">Digital
                                                                Artist</p>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph-small" style="margin-top: 14px;">“Chroma has
                                                        been a game-changer for my digital art journey. The platform's
                                                        intuitive interface, vast library of tools, and collaborative
                                                        features.”</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="900">
                                                <div class="card-default">
                                                    <div class="wrapper-profile d-flex align-items-center gap-3">
                                                        <div class="profile-image">
                                                            <img src="{{ asset('assets/img/testimoni/testimoni-4.svg') }}"
                                                                class="img-fluid w-100" alt="Testimoni Profile Image">
                                                        </div>
                                                        <div class="wrapper">
                                                            <h6 class="testimoni-name">Alex Ramirez</h6>
                                                            <p class="paragraph-small testimoni-position">Visual
                                                                Designer</p>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph-small" style="margin-top: 14px;">“I can't
                                                        imagine my artistic process without Chroma. The seamless
                                                        integration of digital art tools and the ability to create
                                                        stunning visual effects.”</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination position-absolute"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END TESTIMONI SECTION --}}


        {{-- FAQ SECTION --}}
        <section class="faq section-gap" id="faq" style="padding: 72px 0 !important;">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Unlock Your <span class="primary">Curiosity</span>, Frequently
                            Asked <span class="primary">Questions</span> about <span class="primary">Chroma</span>
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">Our Artist Pricing section showcases a range of options designed to
                            accommodate diverse budgets and preferences.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <h6>How do I get started with digital art on Chroma?</h6>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">Our platform offers a user-friendly interface
                                            and a variety of tools to help you begin your digital art journey. Simply
                                            create an account, explore our features, and start unleashing your
                                            creativity!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        <h6>Can I use Chroma on different devices?</h6>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">Absolutely! Chroma is designed to be accessible
                                            across multiple devices, including desktops, laptops, tablets, and even
                                            smartphones. Create art whenever and wherever inspiration strikes!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="true" aria-controls="collapseThree">
                                        <h6>Are there any specific software requirements to use Chroma?</h6>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">Chroma is a web-based platform, so there's no
                                            need to install any additional software. As long as you have a modern web
                                            browser and a stable internet connection, you're ready to go!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="accordion" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        <h6>Can I collaborate with other artists on Chroma?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">Collaboration is at the heart of Chroma's
                                            community. You can connect with fellow artists, join group projects, and
                                            even engage in real-time collaborations to create stunning digital artwork
                                            together.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true"
                                        aria-controls="collapseFive">
                                        <h6>How can I showcase and sell my artwork on Chroma?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">Chroma provides a dedicated gallery space for
                                            artists to showcase their creations. You can also choose to sell your
                                            artwork through our integrated marketplace, connecting with art enthusiasts
                                            and potential buyers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                        aria-controls="collapseSix">
                                        <h6>Is my artwork safe and secure on Chroma?</h6>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">We prioritize the security and privacy of your
                                            artwork. Your creations are stored securely on our servers, and you have
                                            full control over the visibility and sharing options for your artwork.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END FAQ SECTION --}}


        {{-- CTA --}}
        <div class="container" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="800">
            <section class="cta">
                <div class="row justify-content-center">
                    <div
                        class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 text-md-center d-md-flex flex-md-column align-items-md-center">
                        <h2 class="title" style="margin-bottom: 16px;">Join Chroma and Explore the World of Digital
                            Art
                        </h2>
                        <p class="paragraph" style="margin-bottom: 42px;">Are you ready to embark on an extraordinary
                            artistic journey? Join Chroma today and immerse yourself in the captivating world of digital
                            art. Our platform provides a vibrant community of talented artists, curated collections of
                            exceptional artworks.</p>
                        <div class="wrapper-button d-flex gap-2 align-items-center">
                            <a href="#about" class="button-default">Explore Again</a>
                            <a href="#pricing" class="button-secondary d-flex align-items-center gap-2">
                                Buy Ticket
                                <img src="{{ asset('assets/img/icon/arrow-button-dark.svg') }}" class="img-fluid"
                                    alt="Arrow Button Dark Icon" width="10">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- END CTA --}}


        {{-- FOOTER --}}
        <footer class="footer" id="footer">
            <div class="container">
                <div class="row" style="margin-bottom: 100px">
                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                        <a class="footer-brand d-inline-block" href="#home" style="margin-bottom: 18px;">
                            <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" class="img-fluid w-100"
                                alt="Logo Brand">
                        </a>
                        <p class="paragraph-small" style="margin-bottom: 30px;">Welcome to Chroma, the ultimate
                            destination for digital art enthusiasts and creators.</p>
                        <div class="wrapper-sosmed d-flex gap-2">
                            <a href="https://id-id.facebook.com/" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/facebook-icon.svg') }}" class="img-fluid"
                                    alt="Facebook Icon" width="16">
                            </a>
                            <a href="https://www.whatsapp.com/" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/whatsapp-icon.svg') }}" class="img-fluid"
                                    alt="Whatsapp Icon" width="16">
                            </a>
                            <a href="https://twitter.com/?lang=id" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/twitter-icon.svg') }}" class="img-fluid"
                                    alt="Twitter Icon" width="16">
                            </a>
                        </div>
                    </div>

                    <div class="offset-lg-2 offset-xl-3 col-6 col-md-3 col-lg-2 mb-5 mb-md-0">
                        <h6 style="margin-bottom: 20px">Quick Links</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#home" class="paragraph-small">Home</a>
                            <a href="#about" class="paragraph-small">About Us</a>
                            <a href="#adventage" class="paragraph-small">Our Adventage</a>
                            <a href="#category" class="paragraph-small">Categories Art</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <h6 style="margin-bottom: 20px">Adventage Chroma</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#adventage" class="paragraph-small">Unlimited Creative Possibilities</a>
                            <a href="#adventage" class="paragraph-small">Seamless Workflow Integration</a>
                            <a href="#adventage" class="paragraph-small">Community and Collaboration</a>
                            <a href="#adventage" class="paragraph-small">Showcase and Exposure</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <h6 style="margin-bottom: 20px">Help & guide</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#" class="paragraph-small">Terms & Conditions</a>
                            <a href="#" class="paragraph-small">Privacy Policy</a>
                            <a href="#" class="paragraph-small">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 copyright text-center">
                        <p>Copyright © 2023 Chroma. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- END FOOTER --}}
    </main>


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
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
        });
    </script>
    {{-- END SCRIPT JS --}}
</body>

</html>
