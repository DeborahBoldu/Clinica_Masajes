@extends('layouts.app')
@section('title','Servicios')

@section('content')
  <h1>Servicios</h1>

  <div class="grid">
    @foreach($services as $s)
      <article class="service-card">
        <img src="{{ $s->image_path }}" alt="{{ $s->name }}" class="service-img">
        <div style="padding:14px">
          <h3>{{ $s->name }}</h3>
          <p>{{ $s->description }}</p>
          <p><strong>Duración:</strong> {{ $s->duration_minutes }} min</p>
          <p class="price">Precio: ${{ number_format($s->price, 0, ',', '.') }}</p>
        </div>
      </article>
    @endforeach
  </div>
@endsection
