<!-- ==========================================================================
     MODAL RETRO WINDOWS 95 DIALOG BOX (CONFIRMACIÓN DE COTIZACIÓN REGISTRADA)
     ========================================================================== -->
<div class="modal-overlay" id="successModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
  <div class="win-outset modal-dialog-win win-animated-pop">
    <!-- Modal Titlebar -->
    <div class="win-titlebar">
      <div class="win-titlebar-left">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
          <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>
        <span id="modalTitle">SISTEMA_DEVNOVA: COTIZACION_REGISTRADA.EXE</span>
      </div>
      <div class="win-titlebar-right">
        <button type="button" class="win-control-btn modal-close-btn" aria-label="Cerrar ventana">X</button>
      </div>
    </div>

    <!-- Modal Body -->
    <div class="modal-dialog-body">
      <div class="modal-header-icon-row">
        <div class="win-inset modal-retro-icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <div>
          <h3 style="font-size: 1.15rem; font-weight: 800; color: #111827;">¡Cotización Registrada con Éxito!</h3>
          <p style="font-size: 0.78rem; color: #4b5563; font-family: var(--font-mono); margin-top: 2px;">
            Tu solicitud ha sido indexada en nuestra base de datos con el siguiente código:
          </p>
        </div>
      </div>

      <div class="win-inset modal-code-box" id="modalQuoteCode">
        #DN-XXXXXX
      </div>

      <p style="font-size: 0.8rem; color: #374151; line-height: 1.5; background: #e5e3dc; padding: 8px 10px; border-left: 3px solid #000080;">
        Un arquitecto de soluciones de DevNova Studios revisará los requerimientos de tu software para estructurar la propuesta técnica definitiva. Para agilizar la respuesta, puedes enviarnos el desglose por WhatsApp.
      </p>

      <div style="display: flex; flex-direction: column; gap: 6px; padding-top: 6px;">
        <button type="button" class="win-btn btn-sidebar-whatsapp" id="btnModalWhatsApp" style="padding: 8px; font-size: 0.82rem;" onclick="document.getElementById('btnSendWhatsApp')?.click();">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          <span>Abrir Conversación en WhatsApp</span>
        </button>
        <div style="display: flex; gap: 6px;">
          <button type="button" class="win-btn" style="flex: 1;" onclick="window.print();">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="6 9 6 2 18 2 18 9"></polyline>
              <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
              <rect x="6" y="14" width="12" height="8"></rect>
            </svg>
            <span>Imprimir Ficha</span>
          </button>
          <button type="button" class="win-btn modal-close-btn" style="flex: 1;" onclick="document.getElementById('successModal').classList.remove('open');">
            <span>Aceptar / Continuar</span>
          </button>
        </div>
      </div>
    </div>
    <div class="win-statusbar">
      <span>STATUS: 200 OK | REGISTRO GUARDADO</span>
      <span>SECURITY: ENCRYPTED</span>
    </div>
  </div>
</div>
