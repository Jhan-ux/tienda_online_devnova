<!-- ==========================================================================
     MENÚ INICIO POPUP (WINDOWS 95 START MENU)
     ========================================================================== -->
<div class="win-outset win-start-menu" id="winStartMenu">
  <div class="start-menu-banner">
    <span class="start-banner-vertical-text">DEVNOVA 95</span>
  </div>
  <div class="start-menu-items">
    <a href="#cotizador" class="start-menu-item section-nav-trigger" data-target="cotizador">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <rect x="4" y="2" width="16" height="20" rx="2"></rect>
        <line x1="8" y1="6" x2="16" y2="6"></line>
      </svg>
      <span>Nuevo Presupuesto...</span>
    </a>

    <a href="#servicios" class="start-menu-item section-nav-trigger" data-target="servicios">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
        <polyline points="2 17 12 22 22 17"></polyline>
      </svg>
      <span>Servicios Profesionales</span>
    </a>

    <a href="#portafolio" class="start-menu-item section-nav-trigger" data-target="portafolio">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
      </svg>
      <span>Portafolio de Proyectos</span>
    </a>

    <a href="#metodologia" class="start-menu-item section-nav-trigger" data-target="metodologia">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <line x1="6" y1="3" x2="6" y2="15"></line>
        <circle cx="18" cy="6" r="3"></circle>
        <circle cx="6" cy="18" r="3"></circle>
      </svg>
      <span>Metodología de Trabajo</span>
    </a>

    <a href="#stack" class="start-menu-item section-nav-trigger" data-target="stack">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <rect x="4" y="4" width="16" height="16" rx="2"></rect>
        <rect x="9" y="9" width="6" height="6"></rect>
      </svg>
      <span>Stack Tecnológico</span>
    </a>

    <a href="#testimonios" class="start-menu-item section-nav-trigger" data-target="testimonios">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
      </svg>
      <span>Opiniones de Clientes</span>
    </a>

    <div class="start-menu-divider"></div>

    <a href="#faqs" class="start-menu-item section-nav-trigger" data-target="faqs">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <circle cx="12" cy="12" r="10"></circle>
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
      </svg>
      <span>Ayuda del Sistema</span>
    </a>

    <a href="#contacto" class="start-menu-item section-nav-trigger" data-target="contacto">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
      </svg>
      <span>Marcar Conexión (Contacto)</span>
    </a>

    <a href="https://wa.me/{{ config('software_studio.whatsapp_number') }}?text={{ urlencode(config('software_studio.whatsapp_welcome_msg')) }}" target="_blank" rel="noreferrer" class="start-menu-item">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5">
        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
      </svg>
      <span>Asesoría por WhatsApp</span>
    </a>

    <div class="start-menu-divider"></div>

    <div class="start-menu-item" onclick="window.location.reload();">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <polyline points="23 4 23 10 17 10"></polyline>
        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
      </svg>
      <span>Reiniciar Página...</span>
    </div>
  </div>
</div>
