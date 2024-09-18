@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Berita</a></li>
                            <li class="breadcrumb-item"><a
                                href="{{ route('admin.news.show', $post) }}">{{ $post->title }}</a></li>
                            <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                        </ol>
                    </div>
                    <h2 class="page-title">
                        Berita
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <form action="{{route('admin.news.update', $post)}}" method="post" id="myForm" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="container-xl">
                <x-alert></x-alert>
                
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Judul</div>
                                <x-form-input name="title" id="name-input" value="{{old('title', $post->title) }}" placeholder="Masukkan nama" />
                            </div>
                            <div class="col-md">
                                <div class="form-label required">Slug</div>
                                <x-form-input name="slug" id="slug-input" value="{{old('slug', $post->slug) }}" readonly />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Content</div>
                                <input id="x" type="hidden" name="content" value="{{ old('content', $post->content) }}">
                                <trix-editor input="x" class="@error('content') border-danger @enderror" style="min-height: 200px"></trix-editor>
                                @error('content')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <label class="form-label required">Category</label>
                                <select type="text" class="form-select" name="category_id" id="select-categories">
                                    <option selected disabled>Pilih Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ old('category_id', $post->category_id) == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>                            
                            <div class="col-md">
                                <label class="form-label">Tags</label>
                                <select type="text" class="form-select" name="tags_id[]" id="select-tags" multiple>
                                    @foreach ($tags as $item)
                                        <option value="{{ $item->id }}"
                                            {{ in_array($item->id, old('tags_id', $post->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>                            
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_published" value="1" 
                                    {{ old('is_published', $post->is_published) ? 'checked' : '' }}>
                                    <span class="form-check-label">Tampil untuk pengguna</span>
                                </label>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="form-label">Thumbnail</div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <div class="img-preview mb-3 d-flex justify-content-center {{ $post->thumbnail ? '' : 'd-none' }}" id="imgPreview">
                                    <img class="rounded-4" id="previewImage" src="{{ $post->thumbnail ? asset($post->thumbnail) : '' }}" width="500" height="300" style="object-fit: cover;" alt="Image preview">
                                    <i id="removeImage" class="fas fa-times-circle text-danger cursor-pointer" title="Hapus Foto"></i>
                                </div>
                                <x-form-input type="file" name="thumbnail" id="fileInput" value="" readonly />
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="btn-list mt-3">
                    <button type="submit" class="btn btn-primary">
                        Tambah
                    </button>
                    <a href="{{ route('admin.news.index') }}" class="btn">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
    
    <script src="{{ asset('admin/js/form.js') }}"></script>
@endsection
