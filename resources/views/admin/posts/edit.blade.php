@extends('layouts.app')
@section('title','Editar Post')
<<<<<<< HEAD

@section('content')
<h1 class="mb-4">Editar Post</h1>

<form class="card p-4"
      method="POST"
      action="{{ route('admin.posts.update', $post) }}"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @include('admin.posts.form')

=======
@section('content')
<h1>Editar Post</h1>
<form class="card" method="POST" action="{{ route('admin.posts.update',$post) }}">
  @csrf @method('PUT')
  @include('admin.posts.form',['post'=>$post])
>>>>>>> origin/main
</form>
@endsection
