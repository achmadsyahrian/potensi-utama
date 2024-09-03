@extends('landing.layouts.app')
@section('app')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Fasilitas</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li>Fasilitas</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Fasilitas Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-gedung-a">Gedung A</li>
                        <li data-filter=".filter-gedung-b">Gedung B</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-gedung-a">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/projects/remodeling-1.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('landing/assets/img/projects/remodeling-1.jpg') }}"
                                        title="Remodeling 1" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-gedung-b">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/projects/construction-1.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Construction 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('landing/assets/img/projects/construction-1.jpg') }}"
                                        title="Construction 1" data-gallery="portfolio-gallery-construction"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-gedung-a">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/projects/remodeling-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('landing/assets/img/projects/remodeling-2.jpg') }}"
                                        title="Remodeling 2" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-gedung-b">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/projects/construction-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Construction 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('landing/assets/img/projects/construction-2.jpg') }}"
                                        title="Construction 2" data-gallery="portfolio-gallery-construction"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-gedung-a">
                            <div class="portfolio-content h-100"> <img
                                    src="{{ asset('landing/assets/img/projects/remodeling-3.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('landing/assets/img/projects/remodeling-3.jpg') }}"
                                        title="Remodeling 3" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-gedung-b">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/assets/img/projects/construction-3.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Construction 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('landing/assets/img/projects/construction-3.jpg') }}"
                                        title="Construction 3" data-gallery="portfolio-gallery-construction"
                                        class="glightbox preview-link"><i class="bi bi-eye"></i></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> <!-- End Fasilitas -->

    </main>
@endsection
