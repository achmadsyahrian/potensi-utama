<header id="header" class="header d-flex align-items-center" style="{{ request()->routeIs('landing.home') ? 'margin-top: 250px;' : '' }}">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('landing.home')}}" class="logo d-flex align-items-center">
            <img src="{{ asset('landing/assets/img/Logopotensiutama.png') }}" alt="">
            <h1 style="scale: 0.8">UNIVERSITAS POTENSI UTAMA</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('landing.home') }}"
                        class="{{ Route::currentRouteName() == 'landing.home' ? 'active' : '' }}">Beranda</a></li>
                <li class="dropdown">
                    @php
                        $activeRoutes = ['landing.history', 'landing.purpose', 'landing.accreditation', 'landing.facility'];
                    @endphp
                    <a href="#" class="{{ in_array(Route::currentRouteName(), $activeRoutes) ? 'active' : '' }}">
                        <span>Tentang Upu</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('landing.history') }}">Sejarah</a></li>
                        <li><a href="{{ route('landing.purpose') }}">Visi & Misi</a></li>
                        <li><a href="{{ route('landing.accreditation') }}">Akreditasi</a></li>
                        <li><a href="{{ route('landing.facility') }}">Fasilitas</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Layanan Digital</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="https://upu.siakadcloud.com/" target="_blank">Siakad UPU</a></li>
                        <li><a href="http://portal.potensi-utama.ac.id/" target="_blank">Portal Mahasiswa/Dosen</a></li>
                        <li><a href="https://sista.potensi-utama.ac.id/" target="_blank">Sista</a></li>
                        <li><a href="https://skpi.potensi-utama.ac.id/" target="_blank">SKPI</a></li>
                        <li><a href="https://spmi.potensi-utama.ac.id/" target="_blank">SPMI</a></li>
                        <li><a href="https://repository.potensi-utama.ac.id/" target="_blank">Repository</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    @php
                        $activeRoutes = ['landing.news.index', 'landing.news.show', 'landing.announcement.index', 'landing.announcement.show'];
                    @endphp
                    <a href="#" class="{{ in_array(Route::currentRouteName(), $activeRoutes) ? 'active' : '' }}">
                        <span>Informasi</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('landing.news.index') }}">Berita</a></li>
                        <li><a href="{{ route('landing.announcement.index') }}">Pengumuman</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    @php
                        $activeRoutes = ['landing.community.index', 'landing.community.show'];
                    @endphp
                    <a href="#" class="{{ in_array(Route::currentRouteName(), $activeRoutes) ? 'active' : '' }}"><span>Akademik</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        {{-- <li><a href="#">Kalender Akademik</a></li> --}}
                        <li><a href="{{ route('landing.community.index') }}">Pengabdian Masyarakat</a></li>
                        <li><a href="{{route('landing.research.index')}}">Penelitian</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Fakultas</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="#">Fakultas Ilmu Sosial dan Kependidikan</a></li>
                        <li><a href="#">Fakultas Psikologi</a></li>
                        <li><a href="#">Fakultas Hukum</a></li>
                        <li><a href="#">Fakultas Teknik dan Ilmu Komputer</a></li>
                        <li><a href="#">Fakultas Seni dan Desain</a></li>
                        <li><a href="#">Fakultas Ekonomi dan Bisnis</a></li>
                    </ul>
                </li>
                {{-- <li class="d-none d-lg-block">
                  <a href="https://pmb.potensi-utama.ac.id/" target="_blank" class="btn btn-primary py-2 px-4 text-light">
                     DAFTAR
                  </a>
                </li> --}}
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
