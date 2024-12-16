@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Fasilitas - Universitas Potensi Utama')
@section('meta_description', 'Dengan akreditasi BAN-PT, Universitas Potensi Utama membuktikan kualitas pendidikan yang setara dengan standar nasional. Pilih program studi yang telah terakreditasi BAN-PT dan dapatkan pendidikan terbaik.')
@section('meta_keywords', 'fasilitas upu, fasilitas potensi utama, fasilitas pendidikan, fasilitas kampus upu')
@section('canonical', 'https://potensi-utama.ac.id/fasilitas')

@section('app')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>{{ __('partials/navbar.navbar.facility') }}</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">{{ __('partials/navbar.navbar.home') }}</a></li>
                    <li>{{ __('partials/navbar.navbar.facility') }}</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Fasilitas Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach(__('about/facilities.facilities') as $facility)
                            <div class="col-lg-3 col-md-6 portfolio-item">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset($facility['image']) }}" class="img-fluid" alt="{{ $facility['title'] }}">
                                    <div class="portfolio-info">
                                        <p>{{ $facility['description'] }}</p>
                                        <a href="{{ asset($facility['image']) }}" title="{{ $facility['title'] }}"
                                            data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section> <!-- End Fasilitas -->

    </main>
@endsection
