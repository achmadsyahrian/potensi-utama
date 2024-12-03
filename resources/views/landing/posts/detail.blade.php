@extends('landing.layouts.app')
{{-- Head --}}
@section('title', $post->title . ' - Universitas Potensi Utama')
@section('meta_description',  Str::limit($post->title, 100))
@if ($title == 'Berita')
    @section('meta_keywords', 'berita upu, berita potensi utama, berita pendidikan, berita kampus upu')
    @section('canonical', 'https://potensi-utama.ac.id/berita/' . $post->slug)
@elseif($title == 'Pengumuman')
    @section('meta_keywords', 'pengumuman upu, pengumuman potensi utama, pengumuman pendidikan, pengumuman kampus upu, upu info')
    @section('canonical', 'https://potensi-utama.ac.id/pengumuman/' . $post->slug)
@elseif($title == 'Pengabdian Masyarakat')
    @section('meta_keywords', 'abdimas upu, abdimas potensi utama, abdimas pendidikan, abdimas kampus upu, pengabdian masyarakat potensi utama')
    @section('canonical', 'https://potensi-utama.ac.id/pengabdian-masyarakat/' . $post->slug)
@endif

@section('app')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>{{$title}}</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li><a href="{{ route($route . '.index') }}">{{$title}}</a></li>
                    <li>Detail</li>
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
                                @if ($post->thumbnail)
                                    <img src="{{ asset($post->thumbnail) }}" alt=""
                                    style="width: 850px; height:500px; object-fit:cover;" class="img-fluid">
                                @endif
                            </div>

                            <h2 class="title">{{ $post->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#">{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time
                                                datetime="2020-01-01">{{ $post->updated_at->format('M j, Y') }}</time></a>
                                    </li>
                                </ul>
                            </div><!-- End meta top -->
                            <style>
                                .content img {
                                    max-width: 100%;
                                    width: 500px;
                                    height: 300px;
                                    object-fit: cover;
                                    display: block;
                                }
                                .content video {
                                    min-width: 50%;
                                    height: 300px;
                                    object-fit: cover;
                                    display: block;
                                    /* margin: 0 auto; */
                                }
                                .content .attachment__caption .attachment__name {
                                    display: block;
                                    margin: 0 auto;
                                }

                                .content .attachment__caption .attachment__size {
                                    display: none;
                                }

                                .content h1 {
                                    font-size: 22px;
                                    margin-top: 10px;
                                }
                                .content .files-name:hover {
                                    color: red;
                                }
                            </style>
                            <div class="content">
                                {!! preg_replace_callback(
                                    '/<figure[^>]*data-trix-attachment="([^"]+)"[^>]*>.*?<\/figure>/',
                                    function ($matches) {
                                        $attachment = json_decode(html_entity_decode($matches[1]), true);
                                        if ($attachment && $attachment['contentType'] === 'video/mp4') {
                                            return "<video controls>
                                                        <source src='{$attachment['url']}' type='video/mp4'>
                                                        Your browser does not support the video tag.
                                                    </video>";
                                        }
                                        return $matches[0];
                                    },
                                    $post->content
                                ) !!}

                                {{-- File Tambahan yg bisa diunduh users --}}
                                @if ($post->files->isNotEmpty())
                                    <h3>File Tambahan</h3>
                                    <ul>
                                        @foreach($post->files as $file)
                                            <li>
                                                <a class="files-name" href="{{asset($file->file_path)}}" download>{{ $file->file_name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li>
                                        <a
                                            href="{{ route($route . '.index', ['category' => $post->category->slug]) }}">
                                            {{ $post->category->name }}
                                        </a>
                                    </li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    @forelse ($post->tags as $tag)
                                        <li>
                                            <a
                                                href="{{ route($route . '.index', [
                                                    'category' => request('category'),
                                                    'tag' => $tag->slug,
                                                    'search' => request('search'),
                                                ]) }}">
                                                {{ $tag->name }}
                                            </a>
                                        </li>
                                    @empty
                                        <li><a>Tidak ada tags</a></li>
                                    @endforelse
                                </ul>
                            </div>

                        </article>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="sidebar">

                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Pencarian</h3>
                                <form action="{{ route($route . '.index') }}" method="GET" class="mt-3">
                                    <input type="text" name="search" placeholder="Masukkan judul"
                                        value="{{ request('search') }}">
                                    <button type="submit"><i class="bi bi-search text-white"></i></button>
                                </form>
                            </div>

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="mt-3">

                                    @foreach ($dataRecent as $item)
                                        <div class="post-item mt-3">
                                            @if ($item->thumbnail)
                                                <img src="{{ asset($item->thumbnail) }}" alt=""
                                                style="width: 100px; height:60px; object-fit:cover;">
                                            @else
                                                <img src="{{ asset('landing/assets/img/Logopotensiutama.png') }}" alt=""
                                                    style="width: 100px; height:60px; object-fit:cover;">
                                            @endif
                                            <div>
                                                <h4><a
                                                        href="{{ route($route . '.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->title, 40, '...') }}</a>
                                                </h4>
                                                <time datetime="{{ $item->updated_at->format('Y-m-d') }}">
                                                    {{ $item->updated_at->format('M j, Y') }}
                                                </time>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>
                                <ul class="mt-3">
                                    @foreach ($tags as $tag)
                                        <li>
                                            <a
                                                href="{{ route($route . '.index', [
                                                    'category' => request('category'),
                                                    'tag' => $tag->slug,
                                                    'search' => request('search'),
                                                ]) }}">
                                                {{ $tag->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Berita -->

    </main>
@endsection
