@extends('layouts.app')
@section('title','Editar Post')

@section('content')
<h1 class="mb-4">Editar Post</h1>

<form class="card p-4"
      method="POST"
      action="{{ route('admin.posts.update', $post) }}"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @include('admin.posts.form')

</form>
@endsection
