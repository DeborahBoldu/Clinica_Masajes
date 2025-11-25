@extends('layouts.app')
@section('title','Inicio')

@section('content')
  <section class="hero">
    <h1>Bienestar real con masajes profesionales</h1>
    <p>Alivia tensiones, mejora tu descanso y recupera energía.</p>
    
  
  <div class="grid">
    <img src="https://www.spaoneandonly.cl/wp-content/uploads/2025/08/Or%E2%80%941-banner_primavera_Septiembre_banner-1440x550-1.png" class="img-fluid" alt="...">

    </div>

    <div class="descripcion">


    <h2>Bienvenidos a Clínica de Masajes</h2>
    <p>En nuestra clínica, cada masaje es mucho más que un simple tratamiento: es una experiencia diseñada para restaurar tu bienestar físico y emocional. Contamos con terapeutas altamente capacitados que combinan técnicas tradicionales y modernas, adaptándose a las necesidades de cada persona para aliviar tensiones, mejorar la circulación y promover la relajación profunda.</p>

    <p>Nuestro enfoque integral no solo busca cuidar tu cuerpo, sino también generar un espacio de tranquilidad y armonía, donde puedas desconectar del estrés diario y reconectar contigo mismo. Ya sea que necesites un masaje descontracturante, relajante, deportivo o terapéutico, en Clínica de Masajes encontrarás un ambiente acogedor, profesional y personalizado, pensado para que cada visita sea una experiencia única de bienestar.</p>

    <p>Descubre cómo pequeños momentos dedicados a tu salud pueden generar grandes cambios en tu calidad de vida. Porque en Clínica de Masajes, tu bienestar es nuestra prioridad.</p>

    </div>
  
    </section>

    <div class="alinear">
    <a class="btn" href="{{ route('services') }}">Ver servicios</a>
  </div>

@endsection
