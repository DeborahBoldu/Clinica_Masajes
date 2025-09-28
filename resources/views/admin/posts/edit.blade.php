@extends('layouts.app')
@section('title','Editar Post')
@section('content')
<h1>Editar Post</h1>
<form class="card" method="POST" action="{{ route('admin.posts.update',$post) }}">
  @csrf @method('PUT')
  @include('admin.posts.form',['post'=>$post])
</form>
@endsection
