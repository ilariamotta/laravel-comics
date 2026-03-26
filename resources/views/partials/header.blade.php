@php
$navLinks = [
    ['label' => 'Home', 'route' => 'home'],
    ['label' => 'Characters', 'route' => 'characters'],
    ['label' => 'Movies', 'route' => 'movies'],
    ['label' => 'TV', 'route' => 'tv'],
    ['label' => 'Games', 'route' => 'games'],
    ['label' => 'Collectibles', 'route' => 'collectibles'],
    ['label' => 'Videos', 'route' => 'videos'],
    ['label' => 'Fans', 'route' => 'fans'],
    ['label' => 'News', 'route' => 'news'],
    ['label' => 'Shop', 'route' => 'shop'],
];
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