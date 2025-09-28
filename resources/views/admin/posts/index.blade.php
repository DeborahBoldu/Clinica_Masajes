@extends('layouts.app')
@section('title','Admin: Posts')
@section('content')
<h1>Posts</h1>

<div class="alinearderecha">
<a class="btn" href="{{ route('admin.posts.create') }}">Nuevo post</a>
</div>
<table class="table" style="margin-top:12px">
  <thead><tr><th>Título</th><th>Publicado</th><th>Fecha</th><th></th></tr></thead>
  <tbody>
  @foreach($posts as $p)
    <tr>
      <td>{{ $p->title }}</td>
      <td>{{ $p->is_published ? 'Sí' : 'No' }}</td>
      <td>{{ $p->created_at->format('d/m/Y') }}</td>
      <td>
        <a href="{{ route('admin.posts.edit',$p) }}">Editar</a>
        <form action="{{ route('admin.posts.destroy',$p) }}" method="POST" style="display:inline">
          @csrf @method('DELETE')
          <button class="link-btn" onclick="return confirm('¿Eliminar?')">Eliminar</button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $posts->links() }}
@endsection
