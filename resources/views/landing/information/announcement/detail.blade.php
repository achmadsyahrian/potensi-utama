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
                              <div><strong>Isi Konten Berita!!<br><br></strong><figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;logo-potensi-utama.png&quot;,&quot;filesize&quot;:16578,&quot;height&quot;:98,&quot;url&quot;:&quot;/storage/posts/content/files/1726546028.png&quot;,&quot;width&quot;:388}" data-trix-content-type="image/png" data-trix-attributes="{&quot;presentation&quot;:&quot;gallery&quot;}" class="attachment attachment--preview attachment--png"><img src="/storage/posts/content/files/1726546028.png" width="388" height="98"><figcaption class="attachment__caption"><span class="attachment__name">logo-potensi-utama.png</span> <span class="attachment__size">16.19 KB</span></figcaption></figure><br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim, necessitatibus placeat velit reiciendis quae aut, magnam blanditiis voluptatum perspiciatis nulla eum labore accusantium soluta impedit quas error obcaecati omnis quod ab tenetur. Illum commodi earum maiores accusamus natus iste numquam perspiciatis animi id. Itaque debitis sunt nemo, nesciunt molestiae qui vitae exercitationem recusandae blanditiis facere repudiandae laborum maxime doloremque consequatur accusantium molestias, distinctio ratione, ipsa at deleniti! Expedita, sint! Quidem deserunt ut vero repellat iusto alias id fuga ratione omnis aspernatur quia quo, cumque, quas nam accusamus error, unde praesentium soluta magni? Sint illum asperiores ullam quas officiis totam.<br><br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui eaque maiores sequi possimus exercitationem voluptatem deserunt magni mollitia deleniti, vel repellendus suscipit error provident, repudiandae ipsum obcaecati fugit hic commodi molestiae fuga quam. Ab repudiandae odio labore autem perferendis sunt reiciendis vitae necessitatibus? Voluptas corporis dolore facere blanditiis maxime vero, voluptatibus error tenetur doloribus. Labore veritatis voluptate esse enim obcaecati recusandae, officiis quia cumque, error eveniet quo quibusdam. Molestias, hic! Ipsam tempore eos autem sapiente quasi. <br><br><figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;background_zoom - Copy.jpg&quot;,&quot;filesize&quot;:204257,&quot;height&quot;:720,&quot;url&quot;:&quot;/storage/posts/content/files/1726546684.jpg&quot;,&quot;width&quot;:1280}" data-trix-content-type="image/jpeg" data-trix-attributes="{&quot;presentation&quot;:&quot;gallery&quot;}" class="attachment attachment--preview attachment--jpg"><img src="/storage/posts/content/files/1726546684.jpg" width="1280" height="720"><figcaption class="attachment__caption"><span class="attachment__name">background_zoom - Copy.jpg</span> <span class="attachment__size">199.47 KB</span></figcaption></figure><br><br>Exercitationem soluta voluptatum, voluptate dignissimos fugiat iste, ut assumenda officia eum harum veritatis, similique quaerat itaque voluptatibus aspernatur! Excepturi, minus! Odio in eligendi velit cumque, consequuntur consequatur necessitatibus obcaecati ipsam accusamus. Pariatur asperiores libero voluptatem quod quis quae autem eaque, officia minus necessitatibus cum, temporibus maxime. Molestias porro maxime excepturi quia fugit voluptatum quod.</div>
              
                            </div>
              
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
