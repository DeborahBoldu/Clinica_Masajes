@extends('layouts.app')
@section('title', $service->name)

@section('content')
@php
  $src = (preg_match('#^https?://#', $service->image_path ?? ''))
    ? $service->image_path
    : asset($service->image_path ?? '');
@endphp

<article class="card">
  @if($service->image_path)
    <img src="{{ $src }}" alt="{{ $service->name }}" style="width:100%;max-height:340px;object-fit:cover;border-radius:12px">
  @endif

  <h1 style="margin-top:12px">{{ $service->name }}</h1>
  <p><strong>Duración:</strong> {{ $service->duration_minutes }} min</p>
  <p><strong>Precio:</strong> ${{ number_format($service->price,0,',','.') }}</p>

  @if($service->long_description)
    <h3>Descripción</h3>
    <p>{!! nl2br(e($service->long_description)) !!}</p>
  @elseif($service->description)
    <p>{{ $service->description }}</p>
  @endif

  @if($service->benefits)
    <h3>Beneficios</h3>
    <ul>
      @foreach(preg_split('/\r\n|\r|\n/', $service->benefits) as $item)
        @if(trim($item) !== '') <li>{{ $item }}</li> @endif
      @endforeach
    </ul>
  @endif

  @if($service->contraindications)
    <h3>Contraindicaciones</h3>
    <ul>
      @foreach(preg_split('/\r\n|\r|\n/', $service->contraindications) as $item)
        @if(trim($item) !== '') <li>{{ $item }}</li> @endif
      @endforeach
    </ul>
  @endif

  <div style="margin-top:12px">
    <a class="btn" href="{{ route('services') }}">← Volver a servicios</a>
  </div>
</article>
@endsection
