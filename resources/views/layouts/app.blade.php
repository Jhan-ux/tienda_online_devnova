<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('software_studio.app_name') }} | {{ config('software_studio.slogan') }} - Retro OS Edition</title>
  <meta name="description" content="{{ config('software_studio.description') }}">
  <meta name="keywords" content="laravel 13, desarrollo de software, cotizador de software, retro os, windows 95, saas, apps moviles, php 8.5">
  <meta name="theme-color" content="#008080">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{ config('software_studio.app_name') }} - Software Engineering Studio">
  <meta property="og:description" content="{{ config('software_studio.description') }}">
  <meta property="og:url" content="{{ url('/') }}">

  <!-- Google Fonts: JetBrains Mono / Segoe UI -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700;800&family=Segoe+UI:wght@400;600;700;800&display=swap" rel="stylesheet">

  <!-- Hojas de Estilo CSS: Retro Windows 95 Design System -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">

  <!-- Configuración inyectada a JavaScript -->
  <script>
    window.DEVNOVA_CONFIG = {
      whatsappNumber: '{{ config('software_studio.whatsapp_number') }}',
      whatsappWelcomeMsg: '{{ config('software_studio.whatsapp_welcome_msg') }}',
      currencySymbol: '{{ config('software_studio.currency_symbol') }}',
      currencyCode: '{{ config('software_studio.currency_code') }}',
      csrfToken: '{{ csrf_token() }}',
      apiUrl: '{{ route('quote.store') }}',
      activeSection: '{{ $activeSection ?? '' }}'
    };
  </script>
</head>
<body class="retro-os-body">

  <!-- OVERLAY CRT MONITOR SCANLINES (Toggleable - Desactivado por defecto para máxima nitidez y brillo) -->
  <div class="crt-overlay disabled" id="crtOverlay" aria-hidden="true"></div>

  <!-- HEADER & NAVEGACIÓN PRINCIPAL -->
  @include('partials.header')

  <!-- CONTENIDO PRINCIPAL MODULAR -->
  @yield('content')

  <!-- FOOTER -->
  @include('partials.footer')

  <!-- TASKBAR INFERIOR ESTILO WINDOWS 95 -->
  @include('partials.taskbar')

  <!-- MENÚ INICIO POPUP -->
  @include('partials.start-menu')

  <!-- MODAL DE CONFIRMACIÓN DE COTIZACIÓN -->
  @include('partials.modal-quote')

  <!-- Scripts JavaScript -->
  <script src="{{ asset('assets/js/cotizador.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
