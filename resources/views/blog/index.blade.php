@extends('layouts.app')
@section('title','Blog')
@section('content')
<h1>Blog / Novedades</h1>

<div class="grid">
@foreach($posts as $p)
  <article class="card">

  <div class="blogalinear">
     <article class="service-card">
    <h3>  {{ $p->title }} </h3> <!-- Para el segundo parcial agregar el <a href="{{ route('blog.show','$p->slug') }}"</a> después de a, lo quité por no estar linkeado-->
    <img src="{{ $p->image_path }}" alt="{{ $p->title }}" class="service-img">
    @if($p->category)<small>{{ $p->category }}</small>@endif
    @if($p->excerpt)<p>{{ $p->excerpt }}</p>@endif
    <p><small>{{ $p->created_at->format('d/m/Y') }}</small></p>
    </article>
  </article>
@endforeach
</div>
</div>

<div style="margin-top:16px">
  {{ $posts->links() }}
</div>
@endsection
