@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Visi Misi - Universitas Potensi Utama')
@section('meta_description', 'Mulai dari kursus komputer sederhana hingga menjadi universitas terkemuka di Medan, ikuti perjalanan inspiratif Universitas Potensi Utama. Temukan bagaimana kami tumbuh dan berkembang, serta komitmen kami dalam mencetak generasi muda yang berkualitas.')
@section('meta_keywords', 'visi upu, misi potensi utama, visi misi upu, visi misi potensi utama')
@section('canonical', 'https://potensi-utama.ac.id/visi-misi')

@section('app')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Visi & Misi</h2>
                <ol>
                    <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                    <li>Visi & Misi</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Content Section ======= -->
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <img src="{{asset('landing/assets/img/hero/gedung-upu.jpg')}}" alt="" class="img-fluid services-img">
                        <h3>Visi</h3>
                        <p>
                            Visi adalah pandangan atau tujuan jangka panjang yang diinginkan oleh sebuah organisasi atau lembaga. Visi menggambarkan gambaran ideal tentang keadaan di masa depan yang ingin dicapai oleh organisasi tersebut.
                        </p>
                        <blockquote>
                            <p>
                                Pada Tahun 2035 Menjadi Universitas yang unggul dalam bidang IPTEKS (Ilmu Pengetahuan Teknologi dan Seni) di Tingkat Nasional dan Berperan Aktif di Tingkat Internasional
                            </p>
                        </blockquote>

                        <h3>Misi</h3>
                        <p>
                            Misi adalah pernyataan tujuan atau tujuan jangka pendek yang menggambarkan fungsi utama atau tujuan utama dari sebuah organisasi atau lembaga. Misi memberikan arah dan fokus bagi kegiatan organisasi serta menentukan cara organisasi tersebut beroperasi untuk mencapai visinya.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Melaksanakan Pendidikan yang Berkualitas di tinggat Sumatera.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Melaksanakan Penelitian yang Dapat di Publikasikan pada Tingkat Nasional.</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>Melaksanakan Kegiatan dan layanan yang Bermanfaat bagi Masyarakat. </span></li>
                        </ul>

                        <h3>Kebijakan Mutu</h3>
                        <p>
                            Pimpinan dan sivitas akademika Universitas Potensi Utama berkomitmen menyelenggarakan Pendidikan. Penelitian dan Pengabdian kepada Masyarakat serta menyediakan sumber daya yang berkualitas sesuai dengan perkembangan Ilmu Pengetahuan, Teknologi dan Seni dengan melakukan perbaikan terus menerus dalam sisem manajemen.
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <h4>Tentang Kami</h4>
                        <div class="services-list">
                            <a href="{{route('landing.history')}}">Sejarah</a>
                            <a href="#" class="active">Visi & Misi</a>
                            <a href="{{route('landing.accreditation')}}">Akreditasi</a>
                            <a href="{{route('landing.facility')}}">Sarana & Prasarana</a>
                        </div>

                        <img src="{{asset('landing/assets/img/bilboard/dapatkan_750.jpg')}}" width="100%" alt="">

                    </div>

                </div>

            </div>
        </section>
        <!-- End Content -->
    </main>
@endsection
