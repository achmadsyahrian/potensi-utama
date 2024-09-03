@extends('landing.layouts.app')
@section('app')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Pengumuman</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li>Pengumuman Detail</li>
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
                        <article class="news-details">

                            <div class="post-img">
                              <img src="{{asset('landing/assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
                            </div>
              
                            <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>
              
                            <div class="meta-top">
                              <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John
                                    Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                                      datetime="2020-01-01">Jan 1, 2022</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12
                                    Comments</a></li>
                              </ul>
                            </div><!-- End meta top -->
              
                            <div class="content">
                              <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                                laboriosam eius aut nostrum quidem aliquid dicta.
                                Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod
                                quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                              </p>
              
                              <p>
                                Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel
                                aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                              </p>
              
                              <blockquote>
                                <p>
                                  Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam
                                  doloribus minus autem quos.
                                </p>
                              </blockquote>
              
                              <p>
                                Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident
                                voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit
                                perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum.
                                Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel
                                magnam quod et tempora deleniti error rerum nihil tempora.
                              </p>
              
                              <h3>Et quae iure vel ut odit alias.</h3>
                              <p>
                                Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio
                                provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam
                                quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                                Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione
                                aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores
                                natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                                Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam
                                voluptatem voluptatem accusamus mollitia aut atque aut.
                              </p>
                              <img src="{{asset('landing/assets/img/blog/blog-inside-post.jpg')}}" class="img-fluid" alt="">
              
                              <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                              <p>
                                Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae
                                a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint
                                non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                                Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex
                                libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                              </p>
                              <p>
                                Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla
                                sit eaque mollitia nisi asperiores est veniam.
                              </p>
              
                            </div><!-- End post content -->
              
                            <div class="meta-bottom">
                              <i class="bi bi-folder"></i>
                              <ul class="cats">
                                <li><a href="#">Business</a></li>
                              </ul>
              
                              <i class="bi bi-tags"></i>
                              <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                              </ul>
                            </div><!-- End meta bottom -->
              
                          </article>
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
