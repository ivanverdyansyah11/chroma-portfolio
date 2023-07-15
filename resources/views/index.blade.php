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
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 36px;">
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
