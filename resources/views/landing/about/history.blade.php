@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Sejarah - Universitas Potensi Utama')
@section('meta_description', 'Pelajari sejarah Universitas Potensi Utama, dari awal berdirinya sebagai PLSM Potensi Utama hingga berkembang menjadi STMIK Potensi Utama dan akhirnya menjadi Universitas Potensi Utama. Temukan perjalanan kami dalam mengembangkan pendidikan tinggi di Medan.')
@section('meta_keywords', 'sejarah upu, sejarah potensi utama')
@section('canonical', 'https://potensi-utama.ac.id/sejarah')

@section('app')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>{{ __('partials/navbar.navbar.history') }}</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">{{ __('partials/navbar.navbar.home') }}</a></li>
                    <li>{{ __('partials/navbar.navbar.history') }}</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Sejarah Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('landing/assets/img/hero/gedung-upu.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>Universitas Potensi Utama</h2>
                        <div class="our-story">
                            <h4>{{ __('about/history.history.our_story.year_history') }}</h4>
                            <h3>{{ __('about/history.history.our_story.title') }}</h3>
                            <p>{{ __('about/history.history.our_story.content') }}</p>
                        
                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://youtu.be/T4JAUHn9lB4?si=kL4myZTdRPyaEhVQ"
                                    class="glightbox stretched-link">{{ __('about/history.history.our_story.btn_video') }}</a>
                            </div>
                        </div>                        
                    </div>

                </div>

            </div>
        </section>
        <!-- End Sejarah Section -->

        <!-- ======= Perkembangan Section ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>{{ __('about/history.history.university_growth.title') }}</h3>
                        <p>{!! __('about/history.history.university_growth.content') !!}</p>
                    
                        @foreach(__('about/history.history.university_growth.faculties') as $faculty)
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="{{ $faculty['icon'] }} flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">{{ $faculty['title'] }}</a></h4>
                                <p>{{ $faculty['content'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    

                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('landing/assets/img/about/founder.jpeg') }});"
                        data-aos="zoom-in" data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section>

        <section id="alt-services" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url({{asset('landing/assets/img/about/Universitas-Potensi-Utama_1.jpg')}});" data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">

                        @foreach(__('about/history.history.university_growth.faculties_more') as $faculty)
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 + 200 }}">
                            <i class="{{ $faculty['icon'] }} flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">{{ $faculty['title'] }}</a></h4>
                                <p>{{ $faculty['content'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    
                        <p class="mt-5" data-aos="fade-up" data-aos-delay="600">
                            {{ __('about/history.history.university_growth.accreditation_note') }}
                        </p>
                    
                    </div>
                        
                </div>

            </div>
        </section>
        <!-- End Perkembangan Section -->

        <!-- ======= Founder Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-4 col-md-6 member text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('landing/assets/img/person/founder.png') }}" class="img-fluid rounded-circle" width="600" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Hj. Nuriandy, BA</h4>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End Founder Section -->
    </main>
@endsection
