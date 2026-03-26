@php

    $navLinks = config("header");
@endphp

<header class="bg-white border border-danger">
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            {{-- logo --}}
            <div class="d-flex justify-content-start">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo"  class="img-fluid" style="width: 60px">
</div>
            {{-- navbar --}}
            <nav class="header-nav">
                 <ul class="d-flex list-unstyled mb-0 gap-4 text-uppercase fw-bold no-decorations">
                     @foreach ($navLinks as $link)
                         <li><a href="{{ route($link['route']) }}">{{ $link['label'] }}</a></li>
                     @endforeach
                 </ul>
            </nav>
        </div>
    </div>
</header>