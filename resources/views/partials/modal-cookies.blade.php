<!-- ==========================================================================
     MODAL RETRO WINDOWS 95 - CONFIGURACION_DE_COOKIES.EXE (CONTROL PANEL)
     ========================================================================== -->
<div class="modal-overlay" id="cookiesModal" role="dialog" aria-modal="true" aria-labelledby="cookiesModalTitle">
  <div class="win-outset modal-dialog-win cookie-modal-win win-animated-pop">
    <!-- Titlebar -->
    <div class="win-titlebar">
      <div class="win-titlebar-left">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <circle cx="12" cy="12" r="3"></circle>
          <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
        </svg>
        <span id="cookiesModalTitle">PREFERENCIAS_DE_COOKIES.CPL - Panel de Configuración</span>
      </div>
      <div class="win-titlebar-right">
        <button type="button" class="win-control-btn modal-close-btn" onclick="window.closeCookieSettings()" aria-label="Cerrar">X</button>
      </div>
    </div>

    <!-- Modal Body -->
    <div class="modal-dialog-body">
      <div class="modal-header-icon-row">
        <div class="win-inset modal-retro-icon" style="background: #ffffff; color: #000080;">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 2a14.5 14.5 0 0 0 0 20 10 10 0 1 0-10-10"></path>
            <circle cx="8.5" cy="8.5" r="1" fill="currentColor"></circle>
            <circle cx="15.5" cy="15.5" r="1" fill="currentColor"></circle>
            <circle cx="12" cy="12" r="1" fill="currentColor"></circle>
            <circle cx="11" cy="17" r="1" fill="currentColor"></circle>
            <circle cx="7" cy="13" r="1" fill="currentColor"></circle>
          </svg>
        </div>
        <div>
          <h3 style="font-size: 1.05rem; font-weight: 800; color: #111827;">Centro de Consentimiento y Privacidad</h3>
          <p style="font-size: 0.76rem; color: #4b5563; font-family: var(--font-mono); margin-top: 2px;">
            Personaliza qué tipos de almacenamiento y cookies deseas permitir en tu navegador:
          </p>
        </div>
      </div>

      <!-- Categories Container -->
      <div class="cookie-categories-list">
        <!-- 1. Esenciales -->
        <div class="win-inset cookie-category-card">
          <div class="cookie-cat-header">
            <div class="cookie-cat-info">
              <span class="cookie-cat-name">1. Cookies Técnicas &amp; Esenciales</span>
              <span class="cookie-badge-required">[ SIEMPRE ACTIVAS ]</span>
            </div>
            <input type="checkbox" id="cookieOptEssential" checked disabled class="retro-checkbox">
          </div>
          <p class="cookie-cat-desc">
            Imprescindibles para el correcto funcionamiento del sitio. Mantienen la seguridad de la sesión, validan tokens contra ataques CSRF (Cross-Site Request Forgery) de Laravel y permiten el envío seguro de cotizaciones.
          </p>
        </div>

        <!-- 2. Preferencias Retro -->
        <div class="win-inset cookie-category-card">
          <div class="cookie-cat-header">
            <div class="cookie-cat-info">
              <span class="cookie-cat-name">2. Preferencias de Entorno Retro OS</span>
              <span class="cookie-badge-optional">[ OPCIONAL ]</span>
            </div>
            <input type="checkbox" id="cookieOptPreferences" checked class="retro-checkbox">
          </div>
          <p class="cookie-cat-desc">
            Permite guardar tus configuraciones visuales y auditivas del sistema operativo en tu navegador: estado del sintetizador de sonido mecánico (SFX), emulador de scanlines CRT y el modo de vista (Secciones o Continuo).
          </p>
        </div>

        <!-- 3. Métricas y Rendimiento -->
        <div class="win-inset cookie-category-card">
          <div class="cookie-cat-header">
            <div class="cookie-cat-info">
              <span class="cookie-cat-name">3. Analítica y Rendimiento del Cotizador</span>
              <span class="cookie-badge-optional">[ OPCIONAL ]</span>
            </div>
            <input type="checkbox" id="cookieOptAnalytics" checked class="retro-checkbox">
          </div>
          <p class="cookie-cat-desc">
            Nos ayuda a medir de manera anónima qué tecnologías y funcionalidades son más solicitadas en el cotizador interactivo para optimizar los algoritmos de cálculo y mejorar la velocidad de carga de la plataforma.
          </p>
        </div>
      </div>

      <!-- Legal Links Hint -->
      <div style="font-size: 0.72rem; color: #4b5563; font-family: var(--font-mono); background: #e5e3dc; padding: 6px 10px; border-left: 3px solid #000080; display: flex; justify-content: space-between; align-items: center;">
        <span>Para más detalles sobre tus derechos de datos:</span>
        <a href="{{ route('terms') }}" target="_blank" style="color: #000080; font-weight: 700; text-decoration: underline;">Ver Términos Completos</a>
      </div>

      <!-- Action Buttons -->
      <div style="display: flex; gap: 6px; padding-top: 4px;">
        <button type="button" class="win-btn" id="btnRejectOptionalCookies" style="flex: 1;" onclick="window.saveCookiePreferences(false)">
          <span>Solo Esenciales</span>
        </button>
        <button type="button" class="win-btn" id="btnSaveCustomCookies" style="flex: 1;" onclick="window.saveCustomCookiePreferences()">
          <span>Guardar Selección</span>
        </button>
        <button type="button" class="win-btn win-btn-highlight" id="btnAcceptAllModalCookies" style="flex: 1.2;" onclick="window.saveCookiePreferences(true)">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span>Aceptar Todas</span>
        </button>
      </div>
    </div>

    <!-- Statusbar -->
    <div class="win-statusbar">
      <span id="cookieModalStatusText">ESTADO: CONFIGURADO EN ESTE EQUIPO</span>
      <span>STORAGE: LOCALSTORAGE + COOKIES</span>
    </div>
  </div>
</div>
