<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="{{asset('landing/assets/img/Logopotensiutama.png')}}" class="me-2" width="50px" alt="">
                            <h4 class="d-flex align-items-center mt-3">UNIVERSITAS <br>POTENSI UTAMA</h4>
                        </a>
                        <h4 class="mb-0">{{ __('partials/footer.footer.building_a') }}</h4>
                        <p>
                            <a href="https://maps.app.goo.gl/vYfbq2hS8vZ4EH2U8" class="text-white" target="_blank">
                                Jl. K.L Yos Sudarso, Km. 6,5 , No. 3-a, Tj. Mulia, Kec. Medan Deli <br>
                                Kota Medan, Sumatera Utara 20241<br><br>
                            </a>
                        </p>
                        <h4 class="mb-0">{{ __('partials/footer.footer.building_b') }}</h4>
                        <p>
                            <a href="https://maps.app.goo.gl/GNamZHcTmjubhPNS8" class="text-white" target="_blank">
                                Jl. K.L Yos Sudarso, Gg. Famili No.247, Tj. Mulia, Kec. Medan Deli <br>
                                Kota Medan, Sumatera Utara 20241<br><br>
                            </a>
                        </p>
                        <p>
                            <strong>Telp/Wa:</strong> +62 821-2401-8525<br>
                        </p>
                        <div class="social-links d-flex mt-3">
                            {{-- <a href="#" class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-twitter"></i></a> --}}
                            <a href="https://www.facebook.com/potensiutamamedan/about" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/official_upu/" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.tiktok.com/@official_upu?lang=en" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-tiktok"></i></a>
                            <a href="https://www.youtube.com/@PotensiUtamaUniversitas" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>{{ __('partials/navbar.navbar.about_upu') }}</h4>
                    <ul>
                        <li><a href="#">{{ __('partials/navbar.navbar.home') }}</a></li>
                        <li><a href="{{route('landing.history')}}">{{ __('partials/navbar.navbar.history') }}</a></li>
                        <li><a href="{{route('landing.purpose')}}">{{ __('partials/navbar.navbar.purpose') }}</a></li>
                        <li><a href="{{route('landing.facility')}}">{{ __('partials/navbar.navbar.facility') }}</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>{{ __('partials/navbar.navbar.service') }}</h4>
                    <ul>
                        <li><a href="https://upu.siakadcloud.com/" target="_blank">{{ __('partials/navbar.navbar.siakad') }}</a></li>
                        <li><a href="http://portal.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.portal') }}</a></li>
                        <li><a href="https://sista.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.sista') }}</a></li>
                        <li><a href="#" target="_blank">{{ __('partials/navbar.navbar.skpi') }}</a></li>
                        <li><a href="https://spmi.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.spmi') }}</a></li>
                        <li><a href="https://repository.potensi-utama.ac.id/" target="_blank">{{ __('partials/navbar.navbar.repository') }}</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>{{ __('partials/navbar.navbar.information') }}</h4>
                    <ul>
                        <li><a href="{{route('landing.news.index')}}">{{ __('partials/navbar.navbar.news') }}</a></li>
                        <li><a href="{{route('landing.announcement.index')}}">{{ __('partials/navbar.navbar.announcement') }}</a></li>
                        <li><a href="{{route('landing.community.index')}}">{{ __('partials/navbar.navbar.community') }}</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Galeri</h4>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <img src="{{asset('landing/assets/img/hero/gedung-upu.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mb-4">
                            <img src="{{asset('landing/assets/img/hero/gedung-upu-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mb-4">
                            <img src="{{asset('landing/assets/img/hero/gedung-upu-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mb-4">
                            <img src="{{asset('landing/assets/img/hero/gedung-upu.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mb-4">
                            <img src="{{asset('landing/assets/img/hero/gedung-upu-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mb-4">
                            <img src="{{asset('landing/assets/img/hero/gedung-upu-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>                

            </div>
        </div>
    </div>

    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
                ©2024 Copyright <strong><span>Universitas Potensi Utama</span></strong>. All Rights Reserved
            </div>
        </div>
    </div>

</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center text-white"><i class="bi bi-arrow-up-short text-white"></i></a>

<div id="preloader"></div>
