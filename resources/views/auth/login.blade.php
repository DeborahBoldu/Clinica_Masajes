@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="container py-5">
  <h2 class="mb-4 text-center">Iniciar sesión</h2>

  <form method="POST" action="{{ route('login.post') }}" class="mx-auto" style="max-width: 400px;">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Ingresar</button>
  </form>

  <p class="text-center mt-3">
    ¿No tenés cuenta? <a href="{{ route('register') }}">Registrate acá</a>
  </p>
</div>
@endsection
