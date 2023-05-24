@extends('templates.main')

@section('content')
  <div class="row">
      <p class="fs-2 bg-secondary text-white">{{ $title }}</p>

      <div class="row d-flex justify-content-center">
        @foreach ($publishers as $pub)
          <div class="card mx-1 mb-2" style="width: 16rem;">
              <img src="{{ $pub->image }}" class="card-img-top mt-2" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $pub->name }}</h5>
                <p class="card-text">
                  <span>{{ $pub->address }}</span>
                </p>
                <a href="/publisher/{{ $pub->id }}" class="btn btn-primary">Detail</a>
              </div>
          </div>
          @endforeach
      </div>
      
  </div>    
@endsection