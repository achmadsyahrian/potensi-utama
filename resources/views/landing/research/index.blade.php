@extends('landing.layouts.app')
@section('app')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url({{ asset('landing/assets/img/breadcrumbs/gedung-upu.jpg') }});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>{{__('partials/navbar.navbar.research')}}</h2>
            <ol>
                <li><a href="{{ route('landing.home') }}">{{__('partials/navbar.navbar.home')}}</a></li>
                <li>{{__('partials/navbar.navbar.research')}}</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <section id="research" class="research">
      <div class="container" data-aos="fade-up">
         <h2 class="mb-4">{{ app()->getLocale() == 'en' ? $data->title_en : $data->title }}</h2>
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
            {!! app()->getLocale() == 'en' ? $data->content_en : $data->content ?? 'Tidak ada content' !!}
         </div>
      </div>
    </section>
</main>
@endsection
