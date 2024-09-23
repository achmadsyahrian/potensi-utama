@extends('landing.layouts.app')
@section('app')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Penelitian</h2>
            <ol>
                <li><a href="{{ route('landing.home') }}">Beranda</a></li>
                <li>Penelitian</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <section id="research" class="research">
      <div class="container" data-aos="fade-up">
         <h1 class="mb-4">{{$data->title }}</h1>
         <div class="content">
            {!! $data->content ?? 'Tidak ada content' !!}
         </div>
      </div>
    </section>
</main>
@endsection
