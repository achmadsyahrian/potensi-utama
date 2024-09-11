// Slug

document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen input nama dan slug
    const nameInput = document.getElementById("name-input");
    const slugInput = document.getElementById("slug-input");

    // Fungsi untuk mengubah teks menjadi slug
    function generateSlug(text) {
        return text
            .toLowerCase() // Mengubah semua huruf menjadi kecil
            .replace(/[^\w\s-]/g, "") // Menghapus karakter yang bukan huruf/angka/spasi/strip
            .trim() // Menghapus spasi di awal dan akhir
            .replace(/\s+/g, "-"); // Mengganti spasi dengan strip
    }

    // Pantau perubahan pada input nama
    nameInput.addEventListener("input", function () {
        const nameValue = nameInput.value;
        const slugValue = generateSlug(nameValue);
        slugInput.value = slugValue; // Isi input slug
    });
});
