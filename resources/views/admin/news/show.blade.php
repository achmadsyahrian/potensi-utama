@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('admin.users.edit', $post) }}">{{ $post->title }}</a></li>
                            <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        {{ $post->title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="card-title">Informasi</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom untuk informasi postingan (8 kolom) -->
                        <div class="col-md-8">
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Judul</div>
                                    <div class="datagrid-content">{{ $post->title }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Author</div>
                                    <div class="datagrid-content">{{ $post->user->name }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Slug</div>
                                    <div class="datagrid-content">{{ $post->slug }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Category</div>
                                    <div class="datagrid-content">{{ $post->category->name }}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Dibuat pada</div>
                                    <div class="datagrid-content">
                                        <span class="status status-green">
                                            {{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') ?? '--' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="datagrid-title">Tags</div>
                                    <ul class="list-unstyled">
                                        @forelse($post->tags as $tag)
                                            <li class="badge bg-primary text-white me-1">{{ $tag->name }}</li>
                                        @empty
                                            <li>Tidak ada tag untuk postingan ini.</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Kolom untuk thumbnail (4 kolom) -->
                        <div class="col-md-4">
                            <div class="mb-4">
                                @if ($post->thumbnail)
                                    <img src="{{ $post->thumbnail }}" width="300" height="200"
                                        style=" object-fit: cover" alt="Thumbnail">
                                @else
                                    <p>Tidak ada thumbnail.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>  
               .content img {
                  min-width: 50%;
                  height: 300px;
                  object-fit: cover;
                  display: block;
                  margin: 0 auto;
               }
               .content .attachment__caption .attachment__name {
                  text-align: center;
                  display: block;
                  margin: 0 auto;
               }
               .content .attachment__caption .attachment__size {
                  display: none;
               }
            </style>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Content</h3>
                </div>
                <div class="card-body">
                    <div class="row content">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection