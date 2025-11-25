@extends('layouts.app')

@section('title', $post->title)

@section('content')
<article class="card" style="padding: 16px">
    <h1>{{ $post->title }}</h1>

    <p>
        <small>
            {{ $post->created_at->format('d/m/Y') }}
            @if($post->category)
                • {{ $post->category }}
            @endif
        </small>
    </p>

    @if($post->image_path)
        <img src="{{ $post->image_path }}" alt="{{ $post->title }}" class="service-img" style="margin: 12px 0;">
    @endif

    @if($post->excerpt)
        <p><strong>{{ $post->excerpt }}</strong></p>
    @endif

    <div class="content">
        {{-- Respeta saltos de línea del contenido --}}
        {!! nl2br(e($post->content)) !!}
    </div>

    <div style="margin-top:16px">
        <a href="{{ route('blog.index') }}" class="btn">← Volver al blog</a>
    </div>
</article>
@endsection
