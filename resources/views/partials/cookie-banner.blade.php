<!-- ==========================================================================
     RETRO WINDOWS 95 COOKIE BANNER (COOKIES.SYS - BANNER DE CONSENTIMIENTO)
     ========================================================================== -->
<div class="cookie-banner-wrap" id="cookieBanner" role="region" aria-label="Aviso de Cookies" style="display: none;">
  <div class="win-outset cookie-banner-win win-animated-pop">
    <!-- Titlebar -->
    <div class="win-titlebar">
      <div class="win-titlebar-left">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <circle cx="12" cy="12" r="10"></circle>
          <path d="M12 2a14.5 14.5 0 0 0 0 20 10 10 0 1 0-10-10"></path>
          <path d="M8.5 8.5v.01"></path>
          <path d="M16 15.5v.01"></path>
          <path d="M12 12v.01"></path>
          <path d="M11 17v.01"></path>
          <path d="M7 13v.01"></path>
        </svg>
        <span>COOKIES.SYS - Notificación de Privacidad &amp; Cookies</span>
      </div>
      <div class="win-titlebar-right">
        <button type="button" class="win-control-btn" id="btnCloseCookieBanner" aria-label="Cerrar aviso" title="Cerrar (Aplicar solo esenciales)">X</button>
      </div>
    </div>

    <!-- Body -->
    <div class="cookie-banner-body">
      <div class="cookie-icon-col">
        <div class="win-inset cookie-retro-disk">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000080" stroke-width="2">
            <rect x="3" y="3" width="18" height="18" rx="2"></rect>
            <path d="M7 3v5h10V3"></path>
            <line x1="10" y1="14" x2="14" y2="14"></line>
            <line x1="10" y1="17" x2="14" y2="17"></line>
          </svg>
        </div>
      </div>

      <div class="cookie-text-col">
        <h4 class="cookie-banner-title">Control de Cookies y Preferencias del Sistema</h4>
        <p class="cookie-banner-desc">
          En <strong>DevNova Studios</strong> utilizamos cookies técnicas esenciales (seguridad de sesión y tokens de Laravel CSRF) y almacenamiento local para recordar tus preferencias retro (sintetizador de sonido SFX y emulación de monitor CRT). No comercializamos tus datos personales.
        </p>

        <div class="cookie-banner-links">
          <a href="#cookies" class="cookies-link-trigger" onclick="window.openCookieSettings(); return false;">Configurar Opciones</a>
          <span>·</span>
          <a href="#terminos" class="terms-link-trigger" onclick="window.openTermsModal(); return false;">Términos y Condiciones</a>
          <span>·</span>
          <a href="{{ route('cookies') }}" target="_blank">Leer Política Detallada</a>
        </div>
      </div>
    </div>

    <!-- Actions Row -->
    <div class="cookie-banner-actions">
      <div class="cookie-actions-left">
        <button type="button" class="win-btn" id="btnCookieCustomize" onclick="window.openCookieSettings()">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
          <span>Personalizar</span>
        </button>
      </div>

      <div class="cookie-actions-right">
        <button type="button" class="win-btn" id="btnCookieReject">
          <span>Solo Necesarias</span>
        </button>
        <button type="button" class="win-btn win-btn-highlight" id="btnCookieAcceptAll">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span>Aceptar Todas</span>
        </button>
      </div>
    </div>

    <!-- Statusbar -->
    <div class="win-statusbar">
      <span>COOKIE_POLICY: VIGENTE</span>
      <span>STORAGE: LOCAL_DATA</span>
      <span>ENCRYPTION: SSL/TLS</span>
    </div>
  </div>
</div>
