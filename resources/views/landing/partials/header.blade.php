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
                        class="{{ Route::currentRouteName() == 'landing.home' ? 'active' : '' }}">{{ __('partials/navbar.navbar.home') }}</a></li>
                <li class="dropdown">
                    @php
                        $activeRoutes = ['landing.history', 'landing.purpose', 'landing.accreditation', 'landing.facility'];
                    @endphp
                    <a href="#" class="{{ in_array(Route::currentRouteName(), $activeRoutes) ? 'active' : '' }}">
                        <span>{{ __('partials/navbar.navbar.about_upu') }}</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('landing.history') }}">{{ __('partials/navbar.navbar.history') }}</a></li>
                        <li><a href="{{ route('landing.purpose') }}">{{ __('partials/navbar.navbar.purpose') }}</a></li>
                        <li><a href="{{ route('landing.accreditation') }}">{{ __('partials/navbar.navbar.accreditation') }}</a></li>
                        <li><a href="{{ route('landing.facility') }}">{{ __('partials/navbar.navbar.facility') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>{{ __('partials/navbar.navbar.service') }}</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="https://upu.siakadcloud.com/" target="_blank">{{ __('partials/navbar.navbar.siakad') }}</a></li>
                        <li><a href="http://portal.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.portal') }}</a></li>
                        <li><a href="https://sista.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.sista') }}</a></li>
                        <li><a href="https://skpi.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.skpi') }}</a></li>
                        <li><a href="https://spmi.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.spmi') }}</a></li>
                        <li><a href="https://repository.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.repository') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    @php
                        $activeRoutes = ['landing.news.index', 'landing.news.show', 'landing.announcement.index', 'landing.announcement.show'];
                    @endphp
                    <a href="#" class="{{ in_array(Route::currentRouteName(), $activeRoutes) ? 'active' : '' }}">
                        <span>{{ __('partials/navbar.navbar.information') }}</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('landing.news.index') }}">{{ __('partials/navbar.navbar.news') }}</a></li>
                        <li><a href="{{ route('landing.announcement.index') }}">{{ __('partials/navbar.navbar.announcement') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    @php
                        $activeRoutes = ['landing.community.index', 'landing.community.show'];
                    @endphp
                    <a href="#" class="{{ in_array(Route::currentRouteName(), $activeRoutes) ? 'active' : '' }}"><span>{{ __('partials/navbar.navbar.academic') }}</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        {{-- <li><a href="#">Kalender Akademik</a></li> --}}
                        <li><a href="{{ route('landing.community.index') }}">{{ __('partials/navbar.navbar.community') }}</a></li>
                        <li><a href="{{route('landing.research.index')}}">{{ __('partials/navbar.navbar.research') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>{{ __('partials/navbar.navbar.faculty') }}</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="https://fisk.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.fisk') }}</a></li>
                        <li><a href="https://fpsi.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.fpsi') }}</a></li>
                        <li><a href="https://fh.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.fhukum') }}</a></li>
                        <li><a href="https://ftik.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.ftik') }}</a></li>
                        <li><a href="https://fsd.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.fsd') }}</a></li>
                        <li><a href="https://feb.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.feb') }}</a></li>
                    </ul>
                </li>

                
                @if(App::getLocale() == 'id')
                    <li><a href="{{ route('change.language', ['lang' => 'en']) }}" title="Ubah Bahasa">
                        <span><img src="{{ asset('landing/assets/img/flag/flag-inggris2.jpg') }}" width="25" alt=""> EN</span>
                    </a></li>
                @else
                    <li><a href="{{ route('change.language', ['lang' => 'id']) }}" title="Change Language">
                        <span><img src="{{ asset('landing/assets/img/flag/flag-indonesia.png') }}" width="25" alt=""> ID</span>
                    </a></li>
                @endif
           
                {{-- <li class="d-none d-lg-block">
                  <a href="https://pmb.potensi-utama.ac.id/" target="_blank" class="btn btn-primary py-2 px-4 text-light">
                     DAFTAR
                  </a>
                </li> --}}
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
