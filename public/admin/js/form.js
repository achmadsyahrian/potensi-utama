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

// @formatter:off
document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect &&
        new TomSelect((el = document.getElementById("select-categories")), {
            copyClassesToDropdown: false,
            dropdownParent: "body",
            controlInput: "<input>",
            render: {
                item: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
                option: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
            },
        });
});
// @formatter:on

// @formatter:off
document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect &&
        new TomSelect((el = document.getElementById("select-tags")), {
            copyClassesToDropdown: false,
            dropdownParent: "body",
            controlInput: "<input>",
            render: {
                item: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
                option: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
            },
        });
});
// @formatter:on

document
    .getElementById("fileInput")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imgPreview = document.getElementById("imgPreview");
                const previewImage = document.getElementById("previewImage");
                previewImage.src = e.target.result;
                imgPreview.classList.remove("d-none");
            };
            reader.readAsDataURL(file);
        }
    });

document.getElementById("removeImage").addEventListener("click", function () {
    const imgPreview = document.getElementById("imgPreview");
    const fileInput = document.getElementById("fileInput");
    imgPreview.classList.add("d-none");
    fileInput.value = "";
});

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener("trix-attachment-add", function(event) {
        if (event.attachment.file) {
            uploadFile(event.attachment);
        }
    });

    function uploadFile(attachment) {
        let formData = new FormData();
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
});
