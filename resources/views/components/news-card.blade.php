<div class="news-card rounded p-3 h-100">
    <span class="badge bg-primary text-uppercase mb-2">
        {{ $category }}
    </span>

    <div class="overflow-hidden border border-4 mb-3" style="height: 220px;">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-100 h-100 object-fit-cover">
    </div>

    <h5 class="fw-bold text-uppercase text-black">
        {{ $title }}
    </h5>

    <p class="text-light small">
        {{ $excerpt }}
    </p>

    <small class="text-primary d-block mb-1 fw-bold fst-italic">
        {{ $date }}
    </small>

    <small class="text-black d-block mb-3 fw-bold">
        by {{ $author }}
    </small>

    <a href="#" class="btn btn-primary btn-sm rounded-0 text-uppercase fw-bold">
        Read More
    </a>
</div>