@extends('layouts.app')
@section('title','Blog')
@section('content')
<h1>Blog / Novedades</h1>

<div class="grid">
@foreach($posts as $p)
  <article class="card">
    <div class="blogalinear">
      <article class="service-card">
        <h3>
          <a href="{{ route('blog.show', $p->slug) }}">
            {{ $p->title }}
          </a>
        </h3>

        @if($p->image_path)
          <img src="{{ asset($p->image_path) }}" alt="{{ $p->title }}" class="service-img">
        @endif

        @if($p->category)
          <small>{{ $p->category }}</small>
        @endif

        @if($p->excerpt)
          <p>{{ $p->excerpt }}</p>
        @endif

        <p><small>{{ $p->created_at->format('d/m/Y') }}</small></p>
      </article>
    </div>
  </article>
@endforeach
</div>

<div style="margin-top:16px">
  {{ $posts->links() }}
</div>
