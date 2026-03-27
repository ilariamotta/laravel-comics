@extends('layouts.master')

@php
    $comics = config('comics');
@endphp

{{-- hero --}}
@section('hero')
    <div class="w-100 overflow-hidden" style="height: 600px;">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="hero-image" class="w-100 h-100 object-fit-cover img-crop-center">
    </div>
@endsection

{{-- comics --}}
@section('content')
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4 pt-5">
       @foreach ($comics as $comic)
    <div class="col">
        <x-comic-card :comic="$comic" />
    </div>
@endforeach
    </div>
@endsection