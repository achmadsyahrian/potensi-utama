<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    <ol class="breadcrumb breadcrumb-arrows">
                        {{-- @foreach ($trail as $breadcrumb)
                            <li class="breadcrumb-item">
                                @if ($breadcrumb->url)
                                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                                @else
                                    {{ $breadcrumb->title }}
                                @endif
                            </li>
                        @endforeach --}}
                    </ol>
                </div>
                <h2 class="page-title">
                    @yield('page-title', 'Default Title')
                </h2>
            </div>
        </div>
    </div>
</div>
