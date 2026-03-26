@php
    $footerElements = config('footerTopBanner');
    $footerLinks = config('footer');
    $socialLinks = config("social");
@endphp

<footer>

    {{-- barra blu sopra --}}
    <section class="bg-primary py-4">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap">
                @foreach ($footerElements as $element)
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ Vite::asset('resources/img/' . $element['icon']) }}" alt="footer-icon-banner" style="width: 30px">
                        <span class="text-white small text-uppercase">{{ $element['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- parte centrale footer --}}
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-start">

                <div class="col-12 col-md-6">
                    <div class="row">
                        @foreach ($footerLinks as $section)
                            <div class="col-4">
                                <h5 class="text-uppercase fw-bold mb-3">{{ $section['title'] }}</h5>

                                <ul class="list-unstyled small">
                                    @foreach ($section['links'] as $link)
                                        <li class="mb-1">
                                            <a href="{{ $link['url'] }}" class="text-secondary text-decoration-none">
                                                {{ $link['label'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center mt-4 mt-md-0">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dc logo background" class="img-fluid w-75">
                </div>

            </div>
        </div>
    </section>

    {{-- barra bassa --}}
    <section class="bg-secondary py-4">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-4">

                <a href="#" class="btn btn-outline-primary text-uppercase fw-bold rounded-0 px-4">
                    Sign-up now!
                </a>

                <div class="d-flex align-items-center gap-3">
                    <span class="text-primary text-uppercase fw-bold">Follow us</span>
@foreach ($socialLinks as $social)
<a href="#">
    <img src="{{ Vite::asset('resources/img/' . $social['icon']) }}" alt="{{ $social["label"] }}" class="img-fluid">
</a>         
    
@endforeach
                </div>

            </div>
        </div>
    </section>

</footer>