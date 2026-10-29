@extends('layouts.app')

@section('content')
<main id="mainContent" class="desktop-workspace full-screen-mode">

  <!-- ==========================================================================
       1. INICIO / HERO (BIENVENIDO.EXE, TERMINAL BASH & SYSTEM METRICS)
       ========================================================================== -->
  @include('sections.hero')

  <!-- ==========================================================================
       2. SERVICIOS PROFESIONALES (SERVICIOS_PROFESIONALES.EXE)
       ========================================================================== -->
  @include('sections.services')

  <!-- ==========================================================================
       3. COTIZADOR INTERACTIVO (ASISTENTE_DE_COTIZACION.EXE)
       ========================================================================== -->
  @include('sections.cotizador')

  <!-- ==========================================================================
       4. PORTAFOLIO DE PROYECTOS (PROYECTOS_PRODUCCION.EXE)
       ========================================================================== -->
  @include('sections.portfolio')

  <!-- ==========================================================================
       5. METODOLOGÍA DE DESARROLLO (METODOLOGIA_SPRINTS.SYS)
       ========================================================================== -->
  @include('sections.methodology')

  <!-- ==========================================================================
       6. STACK TECNOLÓGICO (HARDWARE_&_SOFTWARE_STACK.EXE)
       ========================================================================== -->
  @include('sections.stack')

  <!-- ==========================================================================
       7. TESTIMONIOS Y REVIEWS (REVIEWS_CLIENTES.LOG)
       ========================================================================== -->
  @include('sections.testimonials')

  <!-- ==========================================================================
       8. PREGUNTAS FRECUENTES (WINHELP32.EXE - AYUDA_FRECUENTE.HLP)
       ========================================================================== -->
  @include('sections.faqs')

  <!-- ==========================================================================
       9. CONTACTO DIRECTO (DIAL_UP_NETWORKING:\CONTACTO.EXE)
       ========================================================================== -->
  @include('sections.contact')

</main>
@endsection
