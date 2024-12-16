@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Akreditasi - Universitas Potensi Utama')
@section('meta_description', 'Dengan akreditasi BAN-PT, Universitas Potensi Utama membuktikan kualitas pendidikan yang setara dengan standar nasional. Pilih program studi yang telah terakreditasi BAN-PT dan dapatkan pendidikan terbaik.')
@section('meta_keywords', 'akreditasi upu, akreditasi potensi utama, akreditasi pendidikan, akreditasi kampus')
@section('canonical', 'https://potensi-utama.ac.id/akreditasi')

@section('app')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>{{ __('partials/navbar.navbar.accreditation') }}</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">{{ __('partials/navbar.navbar.home') }}</a></li>
                    <li>{{ __('partials/navbar.navbar.accreditation') }}</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Univ Akreditasi Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="section-header-responsive">
                    <h2 class="display-4 display-md-3 display-lg-2"> {{ __('about/accreditation.accreditation.title') }}</h2>
                    <p>{{ __('about/accreditation.accreditation.year') }}</p>
                </div>
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-3 mb-0 portfolio-item filter-remodeling"></div>
                        <div class="col-lg-6 mx-auto justify-content-center align-items-center portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/accreditation/img/Sertifikat-Akreditasi-Universitas-Potensi-Utama.jpg') }}"
                                    class="img-fluid" width="100%" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ __('about/accreditation.accreditation.title') }}</h4>
                                    <a href="{{asset('landing/assets/file/Sertifikat-Akreditasi-Universitas-Potensi-Utama.pdf')}}"
                                        title="{{ __('about/accreditation.accreditation.title') }}" data-gallery="portfolio-gallery-remodeling"
                                        class="preview-link" target="_blank">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Univ Akreditasi -->

        <!-- ======= Prodi New Akreditasi Section ======= -->
        <section id="accreditation" class="accreditation">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class=" section-header-responsive ">
                    <h2>{{ __('about/accreditation.accreditation.title_program') }}</h2>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                    @foreach(__('about/accreditation.accreditation.programs') as $program)
                        <div class="col-lg-4">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="far fa-check-circle text-warning icon-item"></i>
                                <h3>{{ $program['name'] }}</h3>
                                <p>{{ $program['version'] }}</p>
                                <a href="{{ asset('landing/assets/file/' . $program['file']) }}" target="_blank" class="mt-3">
                                    <span>{{ __('about/accreditation.accreditation.btn_download') }} <i class="far fa-save"></i></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Prodi New Akreditasi -->

        <!-- ======= Prodi Old Akreditasi Section ======= -->
        <section id="accreditation" class="accreditation">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class=" section-header-responsive ">
                    <h2>{{ __('about/accreditation.accreditation.title_old_program') }}</h2>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                    @foreach(__('about/accreditation.accreditation.old_programs') as $program)
                        <div class="col-lg-4">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="far fa-check-circle text-warning icon-item"></i>
                                <h3>{{ $program['name'] }}</h3>
                                <p>{{ $program['version'] }}</p>
                                <a href="{{ asset('landing/assets/file/' . $program['file']) }}" target="_blank" class="mt-3">
                                    <span>{{ __('about/accreditation.accreditation.btn_download') }} <i class="far fa-save"></i></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Prodi Old Akreditasi -->
        
    </main>
@endsection
