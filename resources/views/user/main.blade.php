@extends('user.index')
@section('content')
    <style>
        .white-text {
            color: white;
        }
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Desa <span>Karangrowo</span></h2>
                    <p>Website desa dibangun dengan tujuan sebagai media pelayanan publik resmi desa, yang dibangun dan
                        dikelola oleh tim desa setempat. Dengan memanfaatkan website penyelenggaraan pelayanan publik dapat
                        dilakukan secara cepat dan mudah</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        @foreach ($linkyt as $ta)
                        <a href="{{ $ta->link }}"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="client/assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title white-text">Pelayanan Masyarakat</h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title white-text">Potensi Desa</h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title white-text">Pembangunan Desa</h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title white-text">Keuangan Desa</h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ url('client/assets/img/clients/logo2.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('client/assets/img/clients/logoumk.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('client/assets/img/clients/client-3.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('client/assets/img/clients/client-4.png') }}"
                                class="img-fluid" alt=""></div>

                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="client/assets/img/stats-img.svg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= About Us Section ======= -->
        <section id="visimisi" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Visi & Misi</h2>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-12">
                        <h3>Visi</h3>
                        <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis
                            quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas
                            ea.</p>
                        <h3>Misi</h3>
                        <div class="content ps-0 ps-lg-6">
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                    mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Profile Desa Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                @foreach ($linkyt as $ta)
                <a href="{{ $ta->link }}" class="glightbox play-btn"></a>
                <h3>Profile Desa</h3>
                <p>{{ $ta->keterangan }}</p>
                <a class="cta-btn" href="#">Profile Desa</a>
                @endforeach
            </div>
        </section><!-- End Profile Desa Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="berita" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Berita <span>Terkini</span></h2>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    {{-- <div>
              <ul class="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-books">Books</li>
              </ul><!-- End Portfolio Filters -->
            </div> --}}

                    <div class="row gy-4 portfolio-container">
                        @foreach ($berita as $ta)
                            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <a href="{{ url('berita/img') }}/{{ $ta->foto }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox"><img
                                            src="{{ url('berita/img') }}/{{ $ta->foto }}" class="img-fluid"
                                            alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="{{ route('home.show', $ta->id) }}"
                                                title="More Details">{{ $ta->judul }}</a></h4>
                                        <p>{{ $ta->tanggal }}</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="anggota" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Struktur Desa Karangrowo</h2>

                </div>

                <div class="row gy-4">
                    @foreach ($anggota as $ta)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ url('anggota/img') }}/{{ $ta->foto }}" class="img-fluid" alt="">
                            <h4>{{ $ta->name }}</h4>
                            <span>{{ $ta->jabatan }}</span>

                        </div>
                    </div><!-- End Team Member -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Our Team Section -->

    </main><!-- End #main -->
@endsection
