@extends('layouts.app')
<<<<<<< HEAD

@section('title','Crear Post')

@section('content')
<h1 class="mb-4">Crear Post</h1>

<form class="card p-4" method="POST"
      action="{{ route('admin.posts.store') }}"
      enctype="multipart/form-data">
  @csrf

  @include('admin.posts.form')

=======
@section('title','Crear Post')
@section('content')
<h1>Crear Post</h1>
<form class="card" method="POST" action="{{ route('admin.posts.store') }}">
  @csrf
  @include('admin.posts.form')
>>>>>>> origin/main
</form>
@endsection
