<!-- ==========================================================================
     SECCIÓN: HERO / INICIO (BIENVENIDO.EXE & TERMINAL BASH & MÉTRICAS)
     ========================================================================== -->
<section class="section os-section-pane active-section" id="hero" data-section="hero" style="padding-top: 0.75rem;">
  <div class="container hero-grid">
    
    <!-- Columna 1: Ventana Principal de Bienvenida -->
    <div class="win-outset" style="box-shadow: 0 8px 24px rgba(0,0,0,0.45);">
      <!-- Titlebar -->
      <div class="win-titlebar">
        <div class="win-titlebar-left">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
          <span>BIENVENIDO.EXE - DEVNOVA_STUDIOS</span>
        </div>
        <div class="win-titlebar-right">
          <span class="win-control-btn" title="Minimizar">_</span>
          <span class="win-control-btn" title="Maximizar">□</span>
          <span class="win-control-btn" title="Cerrar">X</span>
        </div>
      </div>

      <!-- Window Body -->
      <div class="welcome-window-body">
        <div class="welcome-profile-header">
          <!-- Avatar / Monogram Box -->
          <div class="profile-avatar-box win-inset">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="16 18 22 12 16 6"></polyline>
              <polyline points="8 6 2 12 8 18"></polyline>
            </svg>
            <span class="avatar-online-badge">ONLINE</span>
          </div>

          <!-- Lead Copy -->
          <div class="welcome-lead">
            <div class="status-chip">
              <span class="status-ping-dot"></span>
              <span>DISPONIBLE PARA NUEVOS PROYECTOS</span>
            </div>
            <h1 class="welcome-headline">Desarrollo de Software de Alto Nivel</h1>
            <p class="welcome-subheadline">Estudio de Ingeniería de Software &amp; Plataformas Cloud</p>
            <p class="welcome-copy">
              Convertimos requerimientos complejos en aplicaciones web escalables, plataformas SaaS de alta conversión, apps móviles y arquitecturas backend robustas con código 100% propietario y entrega garantizada en producción.
            </p>
          </div>
        </div>

        <!-- Stack Principal Well -->
        <div class="win-inset tech-chips-well">
          <div class="well-label">Stack Tecnológico Central:</div>
          <div class="chips-cluster">
            <span class="retro-tag tag-red">Laravel 13</span>
            <span class="retro-tag tag-blue">PHP 8.5</span>
            <span class="retro-tag tag-yellow">JavaScript</span>
            <span class="retro-tag tag-purple">Vue / React</span>
            <span class="retro-tag tag-teal">Tailwind CSS</span>
            <span class="retro-tag tag-green">MySQL / SQLite</span>
            <span class="retro-tag tag-blue">Docker</span>
            <span class="retro-tag tag-amber">REST &amp; GraphQL</span>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="welcome-actions">
          <a href="#cotizador" class="win-btn win-btn-highlight section-nav-trigger" data-target="cotizador">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <rect x="4" y="2" width="16" height="20" rx="2"></rect>
              <line x1="8" y1="6" x2="16" y2="6"></line>
              <line x1="16" y1="14" x2="16" y2="18"></line>
            </svg>
            <span>Calcular Presupuesto Online</span>
          </a>

          <a href="https://wa.me/{{ config('software_studio.whatsapp_number') }}?text={{ urlencode(config('software_studio.whatsapp_welcome_msg')) }}" 
             target="_blank" 
             rel="noreferrer" 
             class="win-btn win-btn-emerald">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <span>WhatsApp Directo</span>
          </a>

          <a href="#portafolio" class="win-btn section-nav-trigger" data-target="portafolio">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Ver Proyectos</span>
          </a>
        </div>
      </div>

      <!-- Window Statusbar -->
      <div class="win-statusbar">
        <span style="display: flex; align-items: center; gap: 5px;">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          <span>TEL: {{ config('software_studio.contact_phone') }}</span>
        </span>
        <span style="color: #000080; font-weight: 800;">100% RETRO POWER | LARAVEL 13 READY</span>
      </div>
    </div>

    <!-- Columna 2: Consola Terminal y Métricas del Sistema -->
    <div style="display: flex; flex-direction: column; gap: 12px;">
      <!-- Ventana de Consola / Terminal -->
      <div class="win-outset" style="box-shadow: 0 6px 18px rgba(0,0,0,0.4);">
        <div class="win-titlebar">
          <div class="win-titlebar-left">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fde047" stroke-width="2.5">
              <polyline points="4 17 10 11 4 5"></polyline>
              <line x1="12" y1="19" x2="20" y2="19"></line>
            </svg>
            <span>devnova@server:~/studio (bash)</span>
          </div>
          <div class="win-titlebar-right">
            <button type="button" class="win-btn" id="btnCopyTerm" style="padding: 1px 6px; font-size: 10px;" title="Copiar salida">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
              </svg>
              <span>Copiar</span>
            </button>
            <button type="button" class="win-btn" id="btnRestartTerm" style="padding: 1px 6px; font-size: 10px;" title="Reiniciar sesión">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="23 4 23 10 17 10"></polyline>
                <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
              </svg>
              <span>Reiniciar</span>
            </button>
          </div>
        </div>

        <div class="win-inset-dark terminal-console-body" id="termOutputLogs">
          <div class="terminal-dim">
            Microsoft(R) Windows 95 - Developer Environment [Version 4.00.950]<br>
            Iniciando entorno empresarial DevNova Studios...
          </div>
          <div class="terminal-line"><span class="term-prompt">$</span> <span class="term-cmd">php artisan serve --port=8000</span></div>
          <div class="term-output">> Laravel 13.39.0 Engine: OK</div>
          <div class="term-output">> Cotizador Interactivo 2.0: ACTIVO</div>
          <div class="term-output">> Base de Datos: SQLite / MySQL Sincronizada</div>
          <div class="term-output term-success">> Uptime: 99.9% | Calidad: 100% Garantizada</div>
          <div class="terminal-line" style="margin-top: 8px;"><span class="term-prompt">$</span> <span class="term-cmd">system.ready()</span><span class="term-cursor"></span></div>
        </div>

        <div class="win-statusbar">
          <span style="display: flex; align-items: center; gap: 5px;">
            <span class="status-ping-dot"></span>
            <span>Status: 200 OK</span>
          </span>
          <span>PHP 8.5 &amp; Docker Ready</span>
        </div>
      </div>

      <!-- Ventana de Métricas del Sistema -->
      <div class="win-outset">
        <div class="win-titlebar">
          <div class="win-titlebar-left">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="18" y1="20" x2="18" y2="10"></line>
              <line x1="12" y1="20" x2="12" y2="4"></line>
              <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
            <span>SYSTEM_METRICS.DAT</span>
          </div>
          <span style="font-family: var(--font-mono); font-size: 10px; color: #fde047;">[OK]</span>
        </div>

        <div class="metrics-window-grid">
          <div class="win-inset metric-well-box">
            <span class="metric-number" data-target="48" data-suffix="+">48+</span>
            <span class="metric-title">Proyectos Entregados</span>
          </div>
          <div class="win-inset metric-well-box">
            <span class="metric-number" data-target="99" data-suffix=".9%">99.9%</span>
            <span class="metric-title">Uptime &amp; Rendimiento</span>
          </div>
          <div class="win-inset metric-well-box">
            <span class="metric-number" data-target="100" data-suffix="%">100%</span>
            <span class="metric-title">Propiedad de Código</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
