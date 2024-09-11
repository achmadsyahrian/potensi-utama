<div class="modal modal-blur fade" id="modal-create" tabindex="-1" role="dialog" aria-hidden="true">
   <form action="{{ route('admin.categories.store') }}" method="post" class="d-inline">
       @csrf
       @method('post')
       <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Tambah Category</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="col-lg-6">
                           <div class="mb-3">
                               <label class="form-label required">Nama</label>
                               <x-form-input id="name-input" name="name" value=""
                                   placeholder="Masukkan nama" />
                           </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="mb-3">
                               <label class="form-label required">Slug</label>
                               <x-form-input id="slug-input" name="slug" value="" readonly />
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12">
                           <div>
                               <label class="form-label">Deskripsi</label>
                               <textarea class="form-control" name="description" rows="3"></textarea>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                       Batal
                   </a>
                   <button class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                       Tambah
                   </button>
               </div>
           </div>
       </div>
   </form>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
       // Ambil elemen input nama dan slug
       const nameInput = document.getElementById('name-input');
       const slugInput = document.getElementById('slug-input');

       // Fungsi untuk mengubah teks menjadi slug
       function generateSlug(text) {
           return text
               .toLowerCase() // Mengubah semua huruf menjadi kecil
               .replace(/[^\w\s-]/g, '') // Menghapus karakter yang bukan huruf/angka/spasi/strip
               .trim() // Menghapus spasi di awal dan akhir
               .replace(/\s+/g, '-'); // Mengganti spasi dengan strip
       }

       // Pantau perubahan pada input nama
       nameInput.addEventListener('input', function() {
           const nameValue = nameInput.value;
           const slugValue = generateSlug(nameValue);
           slugInput.value = slugValue; // Isi input slug
       });
   });
</script>