@extends('landing.layouts.app')
@section('app')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Pengabdian Masyarakat</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li>Pengabdian Masyarakat</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Berita Section ======= -->
        <section id="news" class="news">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <!-- Konten Utama -->
                    <div class="col-xl-8 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4 posts-list">
                            <div class="col-lg-6 col-md-6">
                                <div class="post-item position-relative h-100">
                                    <div class="post-img position-relative overflow-hidden">
                                        <img src="{{asset('landing/assets/img/blog/blog-1.jpg')}}" class="img-fluid" alt="">
                                        <span class="post-date">December 12</span>
                                    </div>
                                    <div class="post-content d-flex flex-column">
                                        <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>
                                        <div class="meta d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                                            </div>
                                            <span class="px-3 text-black-50">/</span>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                            </div>
                                        </div>
                                        <p>Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.</p>
                                        <hr>
                                        <a href="{{route('landing.community.show')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="post-item position-relative h-100">
                                    <div class="post-img position-relative overflow-hidden">
                                        <img src="{{asset('landing/assets/img/blog/blog-2.jpg')}}" class="img-fluid" alt="">
                                        <span class="post-date">March 19</span>
                                    </div>
                                    <div class="post-content d-flex flex-column">
                                        <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>
                                        <div class="meta d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                            </div>
                                            <span class="px-3 text-black-50">/</span>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                            </div>
                                        </div>
                                        <p>Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.</p>
                                        <hr>
                                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="post-item position-relative h-100">
                                    <div class="post-img position-relative overflow-hidden">
                                        <img src="{{asset('landing/assets/img/blog/blog-1.jpg')}}" class="img-fluid" alt="">
                                        <span class="post-date">December 12</span>
                                    </div>
                                    <div class="post-content d-flex flex-column">
                                        <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>
                                        <div class="meta d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                                            </div>
                                            <span class="px-3 text-black-50">/</span>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                            </div>
                                        </div>
                                        <p>Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.</p>
                                        <hr>
                                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="post-item position-relative h-100">
                                    <div class="post-img position-relative overflow-hidden">
                                        <img src="{{asset('landing/assets/img/blog/blog-2.jpg')}}" class="img-fluid" alt="">
                                        <span class="post-date">March 19</span>
                                    </div>
                                    <div class="post-content d-flex flex-column">
                                        <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>
                                        <div class="meta d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                            </div>
                                            <span class="px-3 text-black-50">/</span>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                            </div>
                                        </div>
                                        <p>Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.</p>
                                        <hr>
                                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Sidebar -->
                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="sidebar">

                            <div class="sidebar-item search-form">
                              <h3 class="sidebar-title">Pencarian</h3>
                              <form action="" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search text-white"></i></button>
                              </form>
                            </div><!-- End sidebar search formn-->
              
                            <div class="sidebar-item recent-posts">
                              <h3 class="sidebar-title">Recent Posts</h3>
              
                              <div class="mt-3">
              
                                <div class="post-item mt-3">
                                  <img src="{{asset('landing/assets/img/blog/blog-recent-1.jpg')}}" alt="">
                                  <div>
                                    <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                  </div>
                                </div><!-- End recent post item-->
              
                                <div class="post-item">
                                  <img src="{{asset('landing/assets/img/blog/blog-recent-2.jpg')}}" alt="">
                                  <div>
                                    <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                  </div>
                                </div><!-- End recent post item-->
              
                                <div class="post-item">
                                  <img src="{{asset('landing/assets/img/blog/blog-recent-3.jpg')}}" alt="">
                                  <div>
                                    <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                  </div>
                                </div><!-- End recent post item-->
              
                                <div class="post-item">
                                  <img src="{{asset('landing/assets/img/blog/blog-recent-4.jpg')}}" alt="">
                                  <div>
                                    <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                  </div>
                                </div><!-- End recent post item-->
              
                                <div class="post-item">
                                  <img src="{{asset('landing/assets/img/blog/blog-recent-5.jpg')}}" alt="">
                                  <div>
                                    <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                  </div>
                                </div><!-- End recent post item-->
              
                              </div>
              
                            </div><!-- End sidebar recent posts-->
              
                            <div class="sidebar-item tags">
                              <h3 class="sidebar-title">Tags</h3>
                              <ul class="mt-3">
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                              </ul>
                            </div><!-- End sidebar tags-->
              
                          </div>
                    </div>
                </div>
                
                <div class="news-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div><!-- End blog pagination -->

            </div>
        </section>
        <!-- End Berita -->

    </main>
@endsection
