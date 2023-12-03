<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnFood</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main-dashboard.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white-2">
        <diV class="container">
            <div class="nav-left">
                <a href="/" class="d-flex align-items-center gap-2" style="text-decoration: none; color:black;">
                    <img src="storage/FitFood.png" alt="Fitnfood Icon" class="logo-icon"
                        width="70" height="40">
                </a>
            </div>
        </div>
    </nav>

    <section>
        <div id="carouselIndicator" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="carousel/carousel-image1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>FitnFood</h5>
                        <p>Jaga Makanan, Jaga Tubuhmu</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="carousel/carousel-image2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>FitnFood</h5>
                        <p>Jaga Makanan, Jaga Tubuhmu</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="carousel/carousel-image3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>FitnFood</h5>
                        <p>Jaga Makanan, Jaga Tubuhmu</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicator"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicator"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="menu-utama">
        <div class="container d-flex flex-column align-items-center">
            <p class="badge rounded-pill text-primary mb-1" style="background-color: rgb(222, 239, 255)">Beranda</p>
            <h1 class="font-3 text-center px-4">Menu Utama</h1>
            <p class="font-1 mb-3 text-muted">Produk Kami</p>

            <div class="menu-list d-flex align-items-center justify-content-center">
                <a href="{{ url('/comingsoon') }}" onclick="scrollToElement('profil-desa')"
                    class="profile text-decoration-none" draggable="false" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                    <div class="card text-white bg-success">
                    <div class="menu-card card-body p-4 d-flex align-items-center text-center gap-3"
                        style="border-radius: 7rem">
                        <svg class="profile-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M20 5h-1.7l-1-1c-0.4-0.4-1-0.4-1.4 0l-1 1H8.1l-1-1c-0.4-0.4-1-0.4-1.4 0l-1 1H4c-1.1 0-2 0.9-2 2v10c0 1.1 0.9 2 2 2h16c1.1 0 2-0.9 2-2V7c0-1.1-0.9-2-2-2zM12 16c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </svg>
                        <h3>Model Deteksi</h3>
                    </div>


                    </div>
                </a>
                <a href="{{ url('/comingsoon') }}" class="administrasi text-decoration-none" draggable="false" data-aos="fade-up"
                    data-aos-delay="150" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                    <div class="card text-white bg-primary">
                        <div class="menu-card card-body p-4 d-flex align-items-center justify-content-center text-center gap-3">
                            <!-- Replace the content inside the <svg> tag with the folder icon SVG code -->
                            <svg class="home-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                                <path d="M21 6H11.83L10 4.17 8.17 6H3v12h18V6zm-2 10H5V8h14v8z"/>
                            </svg>
                            <h3>Repository</h3>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/comingsoon') }}" class="umkm text-decoration-none" draggable="false" data-aos="fade-up"
                    data-aos-delay="200" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                    <div class="card text-dark bg-warning">
                    <div class="menu-card card-body p-4 d-flex align-items-center justify-content-center text-center gap-3">
                        <!-- Replace the content inside the <svg> tag with the mobile phone icon SVG code -->
                        <svg class="mobile-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                            <path d="M20 1H4C2.9 1 2 1.9 2 3v18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 20H4V4h16v17.99zM12 22a1 1 0 0 1-.61-.21l-2-1.5c-1.14-.86-2.78-1.14-4.05-.64C4.29 19.65 2 16.7 2 13c0-3.87 3.13-7 7-7s7 3.13 7 7c0 3.7-2.29 6.65-5.34 7.65-1.27.5-2.91.22-4.05-.64l-2-1.5A1 1 0 0 1 7 14V6a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-.39.78l-2 1.5c-.39.29-.85.44-1.31.44zm0-13a5 5 0 0 0-5 5c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5z"/>
                        </svg>
                        <h3>Prototype</h3>
                    </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="tentang-desa" id="profil-desa">
        <div class="container d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-duration="1500">
                <p class="badge rounded-pill text-primary mb-1" style="background-color: rgb(222, 239, 255)">Tentang</p>
                <h1 class="font-3 text-center px-4 pb-3" id="desa-title">Tentang Kami</h1>
            </div>

            <div class="lokasi d-flex">
                <div class="align-self-center text-center" data-aos="fade-left" style="max-width: 15rem"
                    data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
                    <h1 class="font-1 mb-4">Project pendanaan Program Mahasiswa Wirausaha Universitas Brawijaya di bidang Sociopreneur</h1>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main-dashboard.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        function scrollToElement(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({
                    behavior: "smooth"
                });
            }
        }

        function autoClickNext() {
            document.querySelector('#carouselIndicator .carousel-control-next').click();
        }

        setInterval(autoClickNext, 4000);
    </script>
</body>

</html>
