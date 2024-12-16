@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Beranda - Universitas Potensi Utama')
@section('app')

<div class="text-center" style="margin-bottom: 50px;">
    <a href="https://pendaftaran.potensi-utama.ac.id/">
        <img src="{{asset('landing/assets/img/banner/banner-top-header.jpg')}}" alt="" class="img-fluid" style="object-fit:contain; max-height:200px;">
    </a>
</div>

    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center" style="margin-top: 600px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">{{ __('messages.home.hero_section.title') }} <br>
                            <p class="mt-3">{{ __('messages.home.hero_section.academic_year') }}</p>
                        </h2>
                        <p data-aos="fade-up ">{{ __('messages.home.hero_section.content') }}</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="https://pendaftaran.potensi-utama.ac.id/"
                            target="_blank" class="btn-get-started text-uppercase">{{ __('messages.home.hero_section.btn') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url({{ asset('landing/assets/img/hero/gedung-upu-4.jpg') }})"></div>
            <div class="carousel-item" style="background-image: url({{ asset('landing/assets/img/hero/gedung-upu.jpg') }})">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ asset('landing/assets/img/hero/gedung-upu-2.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('landing/assets/img/hero/gedung-upu-3.jpg') }})"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section>
    <!-- End Hero Section -->

    <main id="main">

        {{-- About Section --}}
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">
                <ul class="nav nav-tabs row  g-2 d-flex">
                    <li class="nav-item col-6">
                        <h4>{{ __('messages.home.about_section.title') }}</h4>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>{{ __('messages.home.about_section.year_history') }}</h3>
                                <p class="fst-italic">
                                    {{ __('messages.home.about_section.content') }}
                                </p>
                                <div class="icon-box d-flex justify-content-start position-relative mt-4" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img src="{{ asset('landing/assets/img/person/nuriandy1.png') }}"
                                        style="margin-right: 20px;" alt="Hj. Nuriandy, BA" title="Hj. Nuriandy, BA">
                                    <div>
                                        <h4>Hj. Nuriandy, BA</h4>
                                        <p class="text-primary text-uppercase">Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('landing/assets/img/hero/gedung-upu.jpg') }}" alt="Gedung Potensi Utama"
                                    title="{{ __('messages.home.about_section.img_title') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End About --}}

        {{-- Stats Section --}}
        <section id="stats-counter" class="stats-counter" style="background: #086AD8;">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-university text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>{{ __('messages.home.stats_section.faculty') }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-book text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>{{ __('messages.home.stats_section.academics') }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-user-graduate text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="27605" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>{{ __('messages.home.stats_section.student') }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-chalkboard-teacher text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="385" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>{{ __('messages.home.stats_section.teacher') }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section>
        {{-- End Stats --}}

        {{-- Berita Section --}}
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
                <div class=" section-header">
                    <h2>UPU NEWS</h2>
                    <p>{{ __('messages.home.news_section.content') }}</p>
                </div>
                <div class="row gy-5">
                    @forelse ($news as $item)
                        <div class="col-xl-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    @if ($item->thumbnail)
                                        <img src="{{ asset($item->thumbnail) }}"
                                        style="width:400px; height:200px; object-fit:cover;" class="img-fluid"
                                        alt="">         
                                    @else        
                                        <img src="{{ asset('landing/assets/img/Logopotensiutama.png') }}"
                                            style="width:400px; height:200px; object-fit:cover;" class="img-fluid"
                                            alt="">                         
                                    @endif
                                    <span
                                        class="post-date">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
                                </div>
                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title" title="{{ app()->getLocale() == 'en' ? $item->title_en : $item->title }}">
                                        {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($item->title_en, 50, '...') : \Illuminate\Support\Str::limit($item->title, 50, '...') }}
                                    </h3>
                                    <hr>
                                    <a href="{{ route('landing.news.show', $item->slug) }}"
                                        class="readmore stretched-link"><span>{{ __('messages.home.news_section.btn') }}</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>                                
                            </div>
                        </div>
                    @empty
                        <p class="text-center">{{ __('messages.home.news_section.empty') }} <i class="far fa-sad-tear"></i></p>
                    @endforelse
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="text-center">
                            <a data-aos="fade-up" data-aos-delay="200" href="{{ route('landing.news.index') }}"
                                target="_blank" class="btn-get-all text-uppercase">{{ __('messages.home.news_section.btn') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Berita --}}

        {{-- Pengumuman Section --}}
        <section id="recent-blog-posts" class="recent-blog-posts section-bg">
            <div class="container" data-aos="fade-up"">
                <div class=" section-header">
                    <h2>UPU INFO</h2>
                    <p>{{ __('messages.home.announcement_section.content') }}</p>
                </div>

                <div class="row gy-5">
                    @forelse ($announcements as $item)
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">
                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title" title="{{ app()->getLocale() == 'en' ? $item->title_en : $item->title }}">
                                        {{ app()->getLocale() == 'en' ? \Illuminate\Support\Str::limit($item->title_en, 50, '...') : \Illuminate\Support\Str::limit($item->title, 50, '...') }}
                                    </h3>
                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-folder-open"></i> <span
                                                class="ps-2">{{ $item->category->name }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="{{ route('landing.announcement.show', $item->slug) }}"
                                        class="readmore stretched-link"><span>{{ __('messages.home.announcement_section.empty') }}</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">{{ __('messages.home.announcement_section.empty') }} <i class="far fa-sad-tear"></i></p>
                    @endforelse
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="text-center">
                            <a data-aos="fade-up" data-aos-delay="200" href="{{ route('landing.announcement.index') }}"
                                target="_blank" class="btn-get-all text-uppercase">{{ __('messages.home.announcement_section.btn') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Pengumuman --}}

        {{-- TV Section --}}
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
                <div class=" section-header">
                    <h2>UPU TV</h2>
                    <p>{{ __('messages.home.channel_section.content') }}</p>
                </div>

                <div class="row justify-content-center gy-4">
                    <div class="col-lg-6 col-md-12 img-bg" data-aos="zoom-in" data-aos-delay="100">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/RUwDcgVYcl8?si=TM0lWr1cXUYwQFEK"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-5 col-md-12 d-flex flex-column justify-content-between">
                        <iframe height="240" src="https://www.youtube.com/embed/aYj45mO2iXo?si=qihnK6cpfone6imv"
                            title="YouTube video player" frameborder="0" class="mb-4"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <iframe height="240" src="https://www.youtube.com/embed/ePLhkOCcqVM?si=nn9V2kLF3olNxj12"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="text-center">
                            <a data-aos="fade-up" data-aos-delay="200"
                                href="https://www.youtube.com/@PotensiUtamaUniversitas" target="_blank"
                                class="btn-get-all text-uppercase">{{ __('messages.home.channel_section.btn') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End TV --}}

        {{-- Banner Section --}}
        <section id="stats-counter" class="stats-counter section-bg-dark">
            <div class="container d-flex flex-column align-items-center" data-aos="fade-up">
                <div class="row gy-4 w-100">
                    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center text-center mx-auto">
                        <div class="section-header p-0">
                            <p class="text-secondary font-weight-bold text-uppercase mb-3">{{ __('messages.home.banner_section.title') }}</p>
                            <h1 class="text-white">{{ __('messages.home.banner_section.content') }}</h1>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="text-center">
                            <a data-aos="fade-up" data-aos-delay="200"
                                href="https://api.whatsapp.com/send?phone=6282124018525&text=Halo%20Bapak%2Fibu%20saya%20tertarik%20untuk%20mendaftar%20di%20Universitas%20Potensi%20Utama"
                                target="_blank" class="btn-get-all text-uppercase">{{ __('messages.home.banner_section.btn') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Banner --}}

        {{-- Fasilitas Section --}}
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header-responsive">
                    <h2>{{ __('messages.home.facility.title') }}</h2>
                    <p>{{ __('messages.home.facility.content') }}</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/aula-gedung-B.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ __('messages.home.facility.data.hall') }}</h4>
                                    <a href="{{ asset('landing/assets/img/fasilitas/aula-gedung-B.jpg') }}"
                                        title="{{ __('messages.home.facility.data.hall') }}" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/Lab-Komputer.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ __('messages.home.facility.data.computer_lab') }}</h4>
                                    <a href="{{ asset('landing/assets/img/fasilitas/Lab-Komputer.jpg') }}"
                                        title="{{ __('messages.home.facility.data.computer_lab') }}" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/library.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ __('messages.home.facility.data.library') }}</h4>
                                    <a href="{{ asset('landing/assets/img/fasilitas/library.jpg') }}"
                                        title="{{ __('messages.home.facility.data.library') }}" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-3">
                            <div class="text-center">
                                <a data-aos="fade-up" data-aos-delay="200" href="{{ route('landing.facility') }}"
                                    target="_blank" class="btn-get-all text-uppercase">{{ __('messages.home.facility.btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- End Fasilitas --}}

    </main><!-- End #main -->

    {{-- Modal Banner --}}
    <div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('landing/assets/img/banner/Web-Header-pendaftaran.jpg') }}" alt="Gambar" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function() {
            var bannerModal = new bootstrap.Modal(document.getElementById('bannerModal'));
            bannerModal.show();
        });
    </script>

@endsection
