@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
<div class="container py-5">
  <h2 class="mb-4 text-center">Crear una cuenta</h2>

  <form method="POST" action="{{ route('register.post') }}" class="mx-auto" style="max-width: 400px;">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Repetir contraseña</label>
      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success w-100">Registrarme</button>
  </form>

  <p class="text-center mt-3">
    ¿Ya tenés cuenta? <a href="{{ route('login') }}">Iniciá sesión</a>
  </p>
</div>
@endsection
