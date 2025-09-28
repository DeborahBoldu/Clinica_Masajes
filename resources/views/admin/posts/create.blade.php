@extends('layouts.app')
@section('title','Crear Post')
@section('content')
<h1>Crear Post</h1>
<form class="card" method="POST" action="{{ route('admin.posts.store') }}">
  @csrf
  @include('admin.posts.form')
</form>
@endsection
