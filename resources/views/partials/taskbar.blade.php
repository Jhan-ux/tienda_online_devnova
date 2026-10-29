<!-- ==========================================================================
     TASKBAR INFERIOR ESTILO WINDOWS 95 (BOTÓN INICIO, VENTANA ACTIVA & BANDEJA)
     Sin duplicar botones: refleja exclusivamente la aplicación actualmente abierta
     ========================================================================== -->
<div class="win-taskbar" id="winTaskbar">
  <div class="taskbar-left-zone">
    <!-- Botón Inicio -->
    <button type="button" class="win-btn taskbar-start-btn" id="taskbarStartBtn" aria-label="Abrir Menú Inicio">
      <!-- Retro Windows Logo Icon -->
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none">
        <rect x="2" y="2" width="9" height="9" fill="#dc2626"></rect>
        <rect x="13" y="2" width="9" height="9" fill="#16a34a"></rect>
        <rect x="2" y="13" width="9" height="9" fill="#2563eb"></rect>
        <rect x="13" y="13" width="9" height="9" fill="#eab308"></rect>
      </svg>
      <span>Inicio</span>
    </button>

    <!-- Pestaña de Ventana Actualmente Abierta (Sin repeticiones de menú) -->
    <div class="taskbar-running-apps">
      <div class="win-btn taskbar-app-tab win-btn-pressed active" id="taskbarActiveAppTab" title="Ventana en primer plano">
        <svg id="taskbarActiveAppIcon" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <rect x="2" y="3" width="20" height="14" rx="2"></rect>
          <line x1="8" y1="21" x2="16" y2="21"></line>
        </svg>
        <span id="taskbarActiveAppLabel">DevNova - Bienvenido.exe</span>
      </div>
    </div>
  </div>

  <!-- System Tray (Bandeja del Sistema) -->
  <div class="taskbar-tray">
    <button type="button" class="tray-icon-btn" id="trayToggleSfx" title="Sonido SFX">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
      </svg>
    </button>

    <button type="button" class="tray-icon-btn" id="trayToggleCrt" title="Efecto CRT">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <rect width="20" height="14" x="2" y="3" rx="2"></rect>
        <line x1="8" x2="16" y1="21" y2="21"></line>
      </svg>
    </button>

    <span class="tray-network-icon" title="Conexión en línea 100Mbps">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5">
        <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
        <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
        <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
      </svg>
    </span>

    <span id="taskbarClock">12:00:00 PM</span>
  </div>
</div>
