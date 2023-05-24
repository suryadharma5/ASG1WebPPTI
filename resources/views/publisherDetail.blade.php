@extends('templates.main')

@section('content')
    <div class="col bg-secondary">
        <p class="fs-5 bg-secondary text-white my-0">{{ $title }}</p>
        <p class="fs-5 bg-secondary text-white my-0">{{ $address }}</p>
        <p class="fs-5 bg-secondary text-white my-0">{{ $phone }}</p>
        <p class="fs-5 bg-secondary text-white my-0">{{ $email }}</p>
    </div>

    @if ($books->count())
        <div class="row d-flex justify-content-center">
            @foreach ($books as $book)
                <div class="card mx-1 mb-2" style="width: 16rem;">
                    <img src="{{ $book->image }}" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $book->title }}</h5>
                      <p class="card-text">
                        <span>by</span>
                        <br>
                        <span>{{ $book->author }}</span>
                      </p>
                      <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h1>No Book</h1>
    @endif

@endsection