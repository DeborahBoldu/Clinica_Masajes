<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Clínica de Masajes')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
  
    <div id="app">
    <div class="container nav">
      <div class="logo">Clínica de Masajes</div>
      <nav>
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('services') }}">Servicios</a></li>
          <li><a href="{{ route('blog.index') }}">Blog</a></li>
          <li><a href="{{ url('/admin/posts') }}">ABM</a></li>
        </ul>
      </nav>
    </div>
  

  <main class="container">
    @yield('content')
  </main>

  <footer class="footer text-bg-dark text-center">
       <p>Copyright &copy; Clínica de Masajes — Bienestar y salud</p>
  </footer>
  
    </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

</body>
</html>
