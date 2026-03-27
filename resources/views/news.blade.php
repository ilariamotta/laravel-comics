@extends("layouts.master")

@php
    $news = config('news');
@endphp

@section('content')
    <div class="bg-secondary">
        <div class="container py-5">
            <h1 class="fw-bold text-primary mb-4">NEWS</h1>

            <div class="row">
                @foreach ($news as $new)
                    <div class="col-12 col-md-6 mb-4 pb-5">
                        <div>
                            <div class="overflow-hidden" style="height: 220px;">
                                <img src="{{ $new['image'] }}" alt="{{ $new['title'] }}" class="w-100 h-100 object-fit-cover">
                            </div>

                            <div class="pt-3">
                                <span class="badge bg-primary text-uppercase mb-1">{{ $new['category'] }}</span>
                                
                                <h5 class="fw-bold text-uppercase">
                                    {{ $new['title'] }}
                                </h5>
                                
                                <p class="text-light small">
                                    {{ $new['excerpt'] }}
                                </p>
                                
                                <small class="text-primary d-block mb-1 fw-bold fw-italic">{{ $new['date'] }}</small>
                                <small class="text-dark d-block mb-1 fw-bold">by {{ $new['author'] }}</small>

                                <a href="#" class="btn btn-primary btn-sm rounded-0 text-uppercase fw-bold">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection