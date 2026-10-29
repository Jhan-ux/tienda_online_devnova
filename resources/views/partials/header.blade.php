<!-- ==========================================================================
     HEADER & NAVEGACIÓN PRINCIPAL (DEVNOVA_STUDIOS.EXE - BARRA DE VENTANA OS)
     ========================================================================== -->
<header class="site-header" id="siteHeader">
  <div class="win-outset nav-window">
    <!-- Window Titlebar -->
    <div class="win-titlebar">
      <div class="win-titlebar-left">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="3" width="20" height="14" rx="2"></rect>
          <line x1="8" y1="21" x2="16" y2="21"></line>
          <line x1="12" y1="17" x2="12" y2="21"></line>
        </svg>
        <span>DEVNOVA_STUDIOS.EXE</span>
        <span style="font-size: 9px; padding: 1px 5px; background: rgba(0,0,128,0.5); border: 1px solid #fde047; color: #fde047; font-family: var(--font-mono); font-weight: 800;">v2.5.0-PROD</span>
        <span class="active-window-title" id="activeWindowTitle" style="font-size: 9px; padding: 1px 6px; background: #000080; border: 1px solid #ffffff; color: #ffffff; font-family: var(--font-mono); font-weight: 700;">[ INICIO ]</span>
      </div>
      <div class="win-titlebar-right">
        <span class="win-control-btn" title="Minimizar">_</span>
        <span class="win-control-btn" title="Maximizar">□</span>
        <span class="win-control-btn" title="Cerrar">X</span>
      </div>
    </div>

    <!-- Application Menu Bar -->
    <div class="nav-menu-bar">
      <!-- Brand Block -->
      <a href="{{ url('/') }}" class="brand-block section-nav-trigger" data-target="hero" aria-label="{{ config('software_studio.app_name') }}">
        <div class="brand-icon-sunken">
          <span>DN</span>
        </div>
        <div>
          <div class="brand-text-title">DEVNOVA</div>
          <div class="brand-text-sub">SOFTWARE_STUDIO.SYS</div>
        </div>
      </a>

      <!-- Desktop Navigation Buttons (Sections Switcher) -->
      <nav class="nav-links-cluster" aria-label="Navegación principal">
        <a href="#hero" class="nav-link-btn section-nav-trigger active" data-target="hero">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
          <span>Inicio</span>
        </a>

        <a href="#servicios" class="nav-link-btn section-nav-trigger" data-target="servicios">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
            <polyline points="2 17 12 22 22 17"></polyline>
            <polyline points="2 12 12 17 22 12"></polyline>
          </svg>
          <span>Servicios</span>
        </a>

        <a href="#cotizador" class="nav-link-btn section-nav-trigger" data-target="cotizador">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <rect x="4" y="2" width="16" height="20" rx="2"></rect>
            <line x1="8" y1="6" x2="16" y2="6"></line>
            <line x1="16" y1="14" x2="16" y2="18"></line>
            <path d="M16 10h.01"></path>
            <path d="M12 10h.01"></path>
            <path d="M8 10h.01"></path>
            <path d="M12 14h.01"></path>
            <path d="M8 14h.01"></path>
            <path d="M12 18h.01"></path>
            <path d="M8 18h.01"></path>
          </svg>
          <span>Cotizador</span>
        </a>

        <a href="#portafolio" class="nav-link-btn section-nav-trigger" data-target="portafolio">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
          </svg>
          <span>Proyectos</span>
        </a>

        <a href="#metodologia" class="nav-link-btn section-nav-trigger" data-target="metodologia">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="6" y1="3" x2="6" y2="15"></line>
            <circle cx="18" cy="6" r="3"></circle>
            <circle cx="6" cy="18" r="3"></circle>
            <path d="M18 9a9 9 0 0 1-9 9"></path>
          </svg>
          <span>Metodología</span>
        </a>

        <a href="#stack" class="nav-link-btn section-nav-trigger" data-target="stack">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
            <rect x="9" y="9" width="6" height="6"></rect>
            <line x1="9" y1="1" x2="9" y2="4"></line>
            <line x1="15" y1="1" x2="15" y2="4"></line>
            <line x1="9" y1="20" x2="9" y2="23"></line>
            <line x1="15" y1="20" x2="15" y2="23"></line>
          </svg>
          <span>Stack</span>
        </a>

        <a href="#testimonios" class="nav-link-btn section-nav-trigger" data-target="testimonios">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
          <span>Reviews</span>
        </a>

        <a href="#faqs" class="nav-link-btn section-nav-trigger" data-target="faqs">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
            <line x1="12" y1="17" x2="12.01" y2="17"></line>
          </svg>
          <span>Ayuda</span>
        </a>

        <a href="#contacto" class="nav-link-btn section-nav-trigger" data-target="contacto">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
          </svg>
          <span>Contacto</span>
        </a>
      </nav>

      <!-- Right Quick Controls (View Mode Toggle, CRT, SFX, WhatsApp, Mobile Toggle) -->
      <div class="nav-toolbar-actions">
        <!-- Section Mode / Continuous Mode Toggle -->
        <button type="button" class="win-btn toolbar-btn-toggle" id="toggleViewMode" title="Alternar entre Vista de Secciones (Ventanas) o Vista Continua">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <rect x="3" y="3" width="7" height="7"></rect>
            <rect x="14" y="3" width="7" height="7"></rect>
            <rect x="14" y="14" width="7" height="7"></rect>
            <rect x="3" y="14" width="7" height="7"></rect>
          </svg>
          <span class="viewmode-label">SECCIONES</span>
        </button>

        <button type="button" class="win-btn toolbar-btn-toggle" id="toggleCrt" title="Toggle CRT Effect">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <rect width="20" height="14" x="2" y="3" rx="2"></rect>
            <line x1="8" x2="16" y1="21" y2="21"></line>
            <line x1="12" x2="12" y1="17" y2="21"></line>
          </svg>
          <span class="crt-label">CRT: ON</span>
        </button>

        <button type="button" class="win-btn toolbar-btn-toggle" id="toggleSfx" title="Toggle Sound Effects">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
            <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
          </svg>
          <span class="sfx-label">SFX: ON</span>
        </button>

        <a href="https://wa.me/{{ config('software_studio.whatsapp_number') }}?text={{ urlencode(config('software_studio.whatsapp_welcome_msg')) }}" 
           target="_blank" 
           rel="noreferrer" 
           class="win-btn toolbar-btn-cta"
           title="Hablar con un Ingeniero por WhatsApp">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          <span>WhatsApp</span>
        </a>

        <button type="button" class="win-btn" id="mobileToggle" aria-label="Abrir Menú Móvil">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Dropdown Panel -->
    <div class="mobile-nav-panel" id="mobileNavPanel">
      <div class="mobile-nav-grid">
        <a href="#hero" class="win-btn section-nav-trigger" data-target="hero">Inicio</a>
        <a href="#servicios" class="win-btn section-nav-trigger" data-target="servicios">Servicios</a>
        <a href="#cotizador" class="win-btn section-nav-trigger" data-target="cotizador">Cotizador</a>
        <a href="#portafolio" class="win-btn section-nav-trigger" data-target="portafolio">Proyectos</a>
        <a href="#metodologia" class="win-btn section-nav-trigger" data-target="metodologia">Metodología</a>
        <a href="#stack" class="win-btn section-nav-trigger" data-target="stack">Stack</a>
        <a href="#testimonios" class="win-btn section-nav-trigger" data-target="testimonios">Reviews</a>
        <a href="#faqs" class="win-btn section-nav-trigger" data-target="faqs">Ayuda / FAQs</a>
        <a href="#contacto" class="win-btn section-nav-trigger" data-target="contacto">Contacto</a>
      </div>
    </div>
  </div>
</header>
