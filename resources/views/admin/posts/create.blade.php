@extends('layouts.app')

@section('title','Crear Post')

@section('content')
<h1 class="mb-4">Crear Post</h1>

<form class="card p-4" method="POST"
      action="{{ route('admin.posts.store') }}"
      enctype="multipart/form-data">
  @csrf

  @include('admin.posts.form')

</form>
@endsection
