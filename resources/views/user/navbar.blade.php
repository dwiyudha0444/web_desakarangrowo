<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="kominfopati.tik@gmail.com">
                        kominfopati.tik@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('client/assets/img/logo2.png') }}" alt="">
                <h1> Kabupaten <span>Kudus</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/home#berita') }}">Berita</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                              <li><a href="#">Deep Drop Down 1</a></li>
                              <li><a href="#">Deep Drop Down 2</a></li>
                              <li><a href="#">Deep Drop Down 3</a></li>
                              <li><a href="#">Deep Drop Down 4</a></li>
                              <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                          </li> --}}
                            <li><a href="{{ url('/home#visimisi') }}">Visi & Misi</a></li>
                            <li><a href="{{ url('/home#anggota') }}">Anggota</a></li>
                        </ul>
                    </li>
                    @if (Auth::check())
                        @if (Auth::user()->role == 'admin')
                            <!-- Tampilan untuk pengguna admin -->
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        @else
                            <!-- Tampilan untuk pengguna biasa -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <li><button class="dropdown-item" href="#">Logout</button></li>
                                    </form>
                                </ul>
                            </li>
                        @endif
                    @else
                        <li><a href="/login">Login</a></li>
                    @endif


                    {{-- <ul class="navbar-nav ml-auto">
                        @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- Tambahkan opsi logout dan lainnya di sini -->
                                </div>
                            </li>
                        @else
                            <!-- Tampilkan tombol login atau tautan login di sini jika tidak ada pengguna yang diotentikasi -->
                        @endif
                    </ul> --}}

                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->
