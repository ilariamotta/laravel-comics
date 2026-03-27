@extends("layouts.master")

@php
    $news = config('news');
@endphp

@section('content')
    <div class="bg-dark">
        <div class="container py-5">
            <h1 class="fw-bold text-primary mb-4">NEWS</h1>

            <div class="row g-4">
                @foreach ($news as $new)
                    <div class="col-12 col-md-6">
                        <x-news-card
                            :category="$new['category']"
                            :image="$new['image']"
                            :title="$new['title']"
                            :excerpt="$new['excerpt']"
                            :date="$new['date']"
                            :author="$new['author']"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection