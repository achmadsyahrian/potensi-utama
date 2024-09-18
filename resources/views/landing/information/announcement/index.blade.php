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
                    <li>Pengumuman</li>
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
                            @foreach ($data as $item)
                                <div class="col-lg-6 col-md-6">
                                    <div class="post-item position-relative h-100">
                                        <div class="post-img position-relative overflow-hidden">
                                            <img src="{{ asset($item->thumbnail) }}" class="img-fluid"
                                                style="width: 415px; height:310px; object-fit:cover;"alt="">
                                            <span class="post-date">{{ $item->updated_at->format('F j') }}</span>
                                        </div>
                                        <div class="post-content d-flex flex-column">
                                            <h3 class="post-title" title="{{ $item->title }}">
                                                {{ \Illuminate\Support\Str::limit($item->title, 50, '...') }}</h3>
                                            <div class="meta d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person"></i> <span
                                                        class="ps-2">{{ $item->user->name }}</span>
                                                </div>
                                                <span class="px-3 text-black-50">/</span>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-folder2"></i> <span
                                                        class="ps-2">{{ $item->category->name }}</span>
                                                </div>
                                            </div>

                                            <x-filtered-content :content="$item->content" class="mt-4" />

                                            <hr>
                                            <a href="{{ route('landing.announcement.show', $item->slug) }}"
                                                class="readmore stretched-link"><span>Baca Selengkapnya</span><i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sidebar -->
                    @if (!$data->isEmpty())
                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="sidebar">

                                <div class="sidebar-item search-form">
                                    <h3 class="sidebar-title">Pencarian</h3>
                                    <form action="{{ route('landing.announcement.index') }}" method="GET" class="mt-3">
                                        <input type="text" name="search" placeholder="Masukkan judul" value="{{ request('search') }}">
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                        <input type="hidden" name="tag" value="{{ request('tag') }}">
                                        <button type="submit"><i class="bi bi-search text-white"></i></button>
                                    </form>
                                </div>
                                <div class="sidebar-item recent-posts">
                                    <h3 class="sidebar-title">Recent Posts</h3>

                                    <div class="mt-3">

                                        @foreach ($dataRecent as $item)
                                            <div class="post-item mt-3">
                                                <img src="{{ asset($item->thumbnail) }}"
                                                    alt="" style="width: 100px; height:60px; object-fit:cover;">
                                                <div>
                                                    <h4><a href="{{ route('landing.announcement.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->title, 40, '...') }}</a></h4>
                                                    <time datetime="{{ $item->updated_at->format('Y-m-d') }}">
                                                        {{ $item->updated_at->format('M j, Y') }}
                                                    </time>                                                    
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div><!-- End sidebar recent posts-->

                                <div class="sidebar-item tags">
                                    <h3 class="sidebar-title">Tags</h3>
                                    <ul class="mt-3">
                                        @foreach ($tags as $tag)
                                            <li>
                                                <a href="{{ route('landing.announcement.index', [
                                                    'category' => request('category'), 
                                                    'tag' => $tag->slug, 
                                                    'search' => request('search')
                                                ]) }}">
                                                    {{ $tag->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="text-center">Belum ada pengumuman yg tersedia <i class="far fa-sad-tear"></i></p>
                    @endif
                    
                </div>
                @if (!$data->isEmpty())
                    <x-landing-pagination :data="$data"></x-landing-pagination>
                @endif
            </div>
        </section>
        <!-- End Berita -->

    </main>
@endsection
