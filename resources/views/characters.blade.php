@extends('layouts.main')

@section('content')

  <main class="characters">
    <h2>Current series</h2>
    <div class="card-container">
      @foreach ($comics as $comic)
      <div class="card">
        <div class="img-box">
          <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['series'] }}">
        </div>
        
        <h3>{{ $comic['series'] }}</h3>
      </div>
      @endforeach
    </div>

    <a href="#">load more</a>
    
  </main>

  @include('partials.products')

@endsection