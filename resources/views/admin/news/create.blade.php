@extends('admin.layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center justify-content-between">
                <div class="col">
                    <div class="page-pretitle">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Berita</a></li>
                            <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
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
        <form action="{{route('admin.news.store')}}" method="post" id="myForm" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="container-xl">
                <x-alert></x-alert>
                
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label required">Judul</div>
                                <x-form-input name="title" id="name-input" value="" placeholder="Masukkan nama" />
                            </div>
                            <div class="col-md">
                                <div class="form-label required">Slug</div>
                                <x-form-input name="slug" id="slug-input" value="" readonly />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label">Content</div>
                                <input id="x" value="" type="hidden" name="content">
                                <trix-editor input="x" class="@error('content') border-danger @enderror"></trix-editor>
                                @error('content')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <label class="form-label">Category</label>
                                <select type="text" class="form-select" name="category_id" id="select-categories"
                                    value="">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md">
                                <label class="form-label">Tags</label>
                                <select type="text" class="form-select" name="tags_id[]" placeholder="Pilih tags"
                                    id="select-tags" value="" multiple>
                                    @foreach ($tags as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_published" value="1" checked>
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
                                <div class="img-preview mb-3 d-flex justify-content-center d-none" id="imgPreview">
                                    <img class="rounded-4" id="previewImage" src="" width="500" height="300"
                                        style="object-fit: cover;" alt="Image preview">
                                    <i id="removeImage" class="fas fa-times-circle text-danger cursor-pointer"
                                        title="Hapus Foto"></i>
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
    
    <script>
        document.addEventListener("trix-attachment-add", function(event) {
            if (event.attachment.file) {
                uploadFile(event.attachment);
            }
        });

        function uploadFile(attachment) {
            let formData = new FormData();
            console.log(attachment)
            formData.append('file', attachment.file);

            fetch('/admin/post/upload-file', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.url) {
                    attachment.setAttributes({ url: data.url });
                } else {
                    attachment.remove();
                    alert('Gagal mengunggah file. Pastikan Anda hanya mengunggah gambar.');
                }
            })
            .catch(() => {
                attachment.remove();
                alert('Gagal mengunggah file. Pastikan Anda hanya mengunggah gambar.');
            });
        }
    </script>
@endsection
