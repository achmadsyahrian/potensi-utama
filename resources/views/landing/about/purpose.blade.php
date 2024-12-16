@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Visi Misi - Universitas Potensi Utama')
@section('meta_description', 'Mulai dari kursus komputer sederhana hingga menjadi universitas terkemuka di Medan, ikuti perjalanan inspiratif Universitas Potensi Utama. Temukan bagaimana kami tumbuh dan berkembang, serta komitmen kami dalam mencetak generasi muda yang berkualitas.')
@section('meta_keywords', 'visi upu, misi potensi utama, visi misi upu, visi misi potensi utama')
@section('canonical', 'https://potensi-utama.ac.id/visi-misi')

@section('app')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>{{ __('partials/navbar.navbar.purpose') }}</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">{{ __('partials/navbar.navbar.home') }}</a></li>
                    <li>{{ __('partials/navbar.navbar.purpose') }}</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Content Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <img src="{{ asset('landing/assets/img/hero/gedung-upu.jpg') }}" alt="{{ __('about/purpose.purpose.img_title') }}" title="{{ __('about/purpose.purpose.img_title') }}" class="img-fluid services-img">
                    
                        <!-- Visi Section -->
                        <h3>{{ __('about/purpose.purpose.visi.title') }}</h3>
                        <p>{{ __('about/purpose.purpose.visi.description') }}</p>
                        <blockquote>
                            <p>{{ __('about/purpose.purpose.visi.quote') }}</p>
                        </blockquote>
                    
                        <!-- Misi Section -->
                        <h3>{{ __('about/purpose.purpose.misi.title') }}</h3>
                        <p>{{ __('about/purpose.purpose.misi.description') }}</p>
                        <ul>
                            @foreach(__('about/purpose.purpose.misi.items') as $misiItem)
                            <li><i class="bi bi-check-circle"></i> <span>{{ $misiItem }}</span></li>
                            @endforeach
                        </ul>
                    
                        <!-- Kebijakan Mutu Section -->
                        <h3>{{ __('about/purpose.purpose.quality_policy.title') }}</h3>
                        <p>{{ __('about/purpose.purpose.quality_policy.description') }}</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>Tentang Kami</h4>
                        <div class="services-list">
                            <a href="{{route('landing.history')}}">{{ __('partials/navbar.navbar.history') }}</a>
                            <a href="#" class="active">{{ __('partials/navbar.navbar.purpose') }}</a>
                            <a href="{{route('landing.accreditation')}}">{{ __('partials/navbar.navbar.accreditation') }}</a>
                            <a href="{{route('landing.facility')}}">{{ __('partials/navbar.navbar.facility') }}</a>
                        </div>

                        <img src="{{asset('landing/assets/img/bilboard/dapatkan_750.jpg')}}" width="100%" alt="">

                    </div>

                </div>

            </div>
        </section>
        <!-- End Content -->
    </main>
@endsection
