@extends('landing.layouts.app')
@section('app')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Pendaftaran <span>Mahasiswa Baru</span> <br>
                            <p class="mt-3">Ta. 2024/2025</p>
                        </h2>
                        <p data-aos="fade-up ">Selamat datang di Universitas Potensi Utama! Bergabunglah dengan kami untuk
                            memulai perjalanan akademis Anda di salah satu perguruan tinggi terbaik di Sumatera Utara.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="https://pendaftaran.potensi-utama.ac.id/"
                            target="_blank" class="btn-get-started text-uppercase">Lihat Informasi Pendaftaran</a>
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
                        <h4>Tentang Kami</h4>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Sejak 1994.</h3>
                                <p class="fst-italic">
                                    Universitas Potensi Utama merupakan salah satu Perguruan Tinggi Swasta (PTS) dibawah
                                    naungan Yayasan Potensi Utama Medan. Universitas Potensi Utama bermula dari Kursus
                                    Komputer dan Bahasa Inggris pada tahun 1994 dengan nama PLSM (Pendidikan Luar Sekolah
                                    Masyarakat) Potensi Utama, dan pada tahun 2003 berdasarkan izin dari Direktorat Jendral
                                    Pendidikan Tinggi (DIKTI), PLSM Potensi Utama meningkatkan status menjadi STMIK (Sekolah
                                    Tinggi Manajemen Informatika dan Komputer) Potensi Utama.
                                </p>
                                <div class="icon-box d-flex justify-content-start position-relative mt-4" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img src="{{ asset('landing/assets/img/person/nuriandy1.png') }}"
                                        style="margin-right: 20px;" alt="">
                                    <div>
                                        <h4>Hj. Nuriandy, BA</h4>
                                        <p class="text-primary text-uppercase">Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('landing/assets/img/hero/gedung-upu.jpg') }}" alt=""
                                    class="img-fluid">
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
                            <i class="fas fa-handshake text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Mitra</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-book text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Program Studi</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-user-graduate text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="26693" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-chalkboard-teacher text-primary flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="392" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Tenaga Pengajar</p>
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
                    <p>Informasi terkini mengenai kegiatan dan perkembangan di Universitas Potensi Utama</p>
                </div>
                <div class="row gy-5">
                    @forelse ($news as $item)
                        <div class="col-xl-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset($item->thumbnail) }}" style="width:400px; height:200px; object-fit:cover;" class="img-fluid"
                                        alt="">
                                    <span class="post-date">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
                                </div>
                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title" title="{{ $item->title }}">{{ \Illuminate\Support\Str::limit($item->title, 50, '...') }}</h3>
                                    <hr>
                                    <a href="{{ route('landing.news.show', $item->slug) }}" class="readmore stretched-link"><span>Baca Selengkapnya</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">Belum ada pengumuman yg tersedia <i class="far fa-sad-tear"></i></p>
                    @endforelse
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="text-center">
                            <a data-aos="fade-up" data-aos-delay="200"
                                href="{{route('landing.news.index')}}" target="_blank"
                                class="btn-get-all text-uppercase">Lihat Selengkapnya</a>
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
                    <p>Pengumuman terkini dan informasi penting dari Universitas Potensi Utama untuk Anda</p>
                </div>

                <div class="row gy-5">
                    @forelse ($announcements as $item)
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">
                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title" title="{{ $item->title }}">{{ \Illuminate\Support\Str::limit($item->title, 60, '...') }}</h3>
                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="far fa-newspaper"></i> <span class="ps-2">{{$item->category->name}}</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-tags"></i>
                                            @forelse ($item->tags as $tag)
                                                <span class="tag ms-1">{{ $tag->name }}</span>,
                                            @empty
                                                <span>Tidak ada tags</span>
                                            @endforelse
                                        </div>                                        
                                    </div>
                                    <hr>
                                    <a href="{{ route('landing.announcement.show', $item->slug) }}" class="readmore stretched-link"><span>Baca Selengkapnya</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">Belum ada pengumuman yg tersedia <i class="far fa-sad-tear"></i></p>
                    @endforelse
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="text-center">
                            <a data-aos="fade-up" data-aos-delay="200"
                                href="{{route('landing.announcement.index')}}" target="_blank"
                                class="btn-get-all text-uppercase">Lihat Selengkapnya</a>
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
                    <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
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
                                class="btn-get-all text-uppercase">Lihat Channel</a>
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
                            <p class="text-secondary font-weight-bold text-uppercase mb-3">Kamu Memiliki Pertanyaan ?</p>
                            <h1 class="text-white">Menerima Pendaftaran Mahasiswa Baru Tahun Ajaran 2024/2025.</h1>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="text-center">
                            <a data-aos="fade-up" data-aos-delay="200"
                                href="https://api.whatsapp.com/send?phone=6282124018525&text=Halo%20Bapak%2Fibu%20saya%20tertarik%20untuk%20mendaftar%20di%20Universitas%20Potensi%20Utama"
                                target="_blank" class="btn-get-all text-uppercase">Whatsapp Kami</a>
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
                    <h2>Sarana & Prasarana</h2>
                    <p>Fasilitas modern untuk mendukung pembelajaran dan kesejahteraan mahasiswa.</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/fasilitas/aula-gedung-B.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Aula Utama Universitas</h4>
                                    <a href="{{ asset('landing/assets/img/fasilitas/aula-gedung-B.jpg') }}"
                                        title="Aula Utama Universitas" data-gallery="portfolio-gallery-remodeling"
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
                                    <h4>Lab Computer</h4>
                                    <a href="{{ asset('landing/assets/img/fasilitas/Lab-Komputer.jpg') }}"
                                        title="Lab Computer" data-gallery="portfolio-gallery-remodeling"
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
                                    <h4>Perpustakaan</h4>
                                    <a href="{{ asset('landing/assets/img/fasilitas/library.jpg') }}"
                                        title="Perpustakaan" data-gallery="portfolio-gallery-remodeling"
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
                                <a data-aos="fade-up" data-aos-delay="200"
                                    href="{{route('landing.facility')}}" target="_blank"
                                    class="btn-get-all text-uppercase">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- End Fasilitas --}}

    </main><!-- End #main -->
@endsection
