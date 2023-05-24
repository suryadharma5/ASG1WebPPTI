@extends('templates.main')

@section('content')
  <div class="row">
    
    <p class="fs-2 bg-secondary text-white">{{ $title }}</p>

    <div class="row d-flex justify-content-center">
    @if ($books->count())
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
    @else
      <h1>No Book Found</h1>
    @endif
        
    </div>
  </div>
@endsection