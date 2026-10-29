<!-- ==========================================================================
     SECCIÓN: CONTACTO DIRECTO (DIAL_UP_NETWORKING:\CONTACTO.EXE)
     ========================================================================== -->
<section class="section os-section-pane" id="contacto" data-section="contacto">
  <div class="container">
    
    <!-- Section Window Header -->
    <div class="win-outset section-window-header">
      <div class="win-titlebar">
        <div class="win-titlebar-left">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fde047" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          <span>DIAL_UP_NETWORKING:\CONTACTO.EXE</span>
        </div>
        <span style="font-family: var(--font-mono); font-size: 10px; color: #fde047;">PUERTO: 8080 CONECTADO</span>
      </div>
      <div class="section-window-body">
        <div>
          <h2 class="section-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000080" stroke-width="2.5">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Conecta con Nuestro Equipo de Ingeniería</span>
          </h2>
          <p class="section-subtitle">Envíanos un mensaje o agenda una llamada técnica para evaluar tu proyecto</p>
        </div>
        <span class="retro-tag tag-green">RESPUESTA EN MENOS DE 24H</span>
      </div>
    </div>

    <!-- Contact Grid (Full Width) -->
    <div class="contact-grid">
      <!-- Formulario -->
      <div class="win-outset">
        <div class="win-titlebar">
          <div class="win-titlebar-left">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="m22 2-7 20-4-9-9-4Z"></path>
              <path d="M22 2 11 13"></path>
            </svg>
            <span>ENVIAR_MENSAJE.FORM</span>
          </div>
          <div class="win-titlebar-right">
            <span class="win-control-btn">_</span>
            <span class="win-control-btn">□</span>
            <span class="win-control-btn">X</span>
          </div>
        </div>

        <form id="mainContactForm" class="contact-card-body">
          <div class="form-group">
            <label for="contactName" class="form-label">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
              <span>Nombre Completo *</span>
            </label>
            <input type="text" name="name" id="contactName" class="form-control" placeholder="Ej. Carlos Mendoza" required>
          </div>

          <div class="form-row-2col">
            <div class="form-group">
              <label for="contactEmail" class="form-label">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                <span>Correo Electrónico *</span>
              </label>
              <input type="email" name="email" id="contactEmail" class="form-control" placeholder="tu@empresa.com" required>
            </div>

            <div class="form-group">
              <label for="contactPhone" class="form-label">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>Teléfono / WhatsApp</span>
              </label>
              <input type="tel" name="phone" id="contactPhone" class="form-control" placeholder="+51 ...">
            </div>
          </div>

          <div class="form-group">
            <label for="contactService" class="form-label">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon></svg>
              <span>Servicio de Interés</span>
            </label>
            <select name="service" id="contactService" class="form-control">
              <option value="webapp">Desarrollo Web &amp; SaaS</option>
              <option value="mobile">App Móvil (iOS &amp; Android)</option>
              <option value="ecommerce">E-commerce de Alta Transacción</option>
              <option value="enterprise">Sistema ERP / CRM a Medida</option>
              <option value="cloud">Backend &amp; Arquitectura Cloud</option>
              <option value="consulting">Auditoría / Consultoría de Software</option>
            </select>
          </div>

          <div class="form-group">
            <label for="contactMessage" class="form-label">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
              <span>Descripción del Proyecto *</span>
            </label>
            <textarea name="message" id="contactMessage" class="form-control" rows="3" placeholder="Cuéntanos brevemente tu objetivo, plazos o requerimientos especiales..." required></textarea>
          </div>

          <div style="padding-top: 4px;">
            <button type="submit" class="win-btn" style="background-color: #dbeafe; color: #1e3a8a; border-color: #ffffff #1e3a8a #1e3a8a #ffffff; width: 100%; padding: 8px;">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
              </svg>
              <span>Enviar Solicitud de Información</span>
            </button>
          </div>
        </form>
        <div class="win-statusbar">
          <span>MODO: EN LINEA</span>
          <span>ENCRYPT: TLS 1.3</span>
        </div>
      </div>

      <!-- Información de Conexión Directa -->
      <div class="win-outset" style="display: flex; flex-direction: column;">
        <div class="win-titlebar" style="background: linear-gradient(90deg, #004d40 0%, #0d9488 100%);">
          <div class="win-titlebar-left">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            </svg>
            <span>CANALES_DIRECTOS.DAT</span>
          </div>
          <span style="font-family: var(--font-mono); font-size: 10px;">OK</span>
        </div>

        <div class="contact-card-body" style="flex: 1; justify-content: space-between;">
          <div class="win-inset dialup-info-card">
            <div class="dialup-row">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
              <div>
                <span class="dialup-label">Correo Electrónico:</span>
                <a href="mailto:{{ config('software_studio.contact_email') }}" class="dialup-val">{{ config('software_studio.contact_email') }}</a>
              </div>
            </div>

            <div class="dialup-row">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <div>
                <span class="dialup-label">Línea Telefónica &amp; WhatsApp:</span>
                <a href="tel:{{ config('software_studio.contact_phone') }}" class="dialup-val">{{ config('software_studio.contact_phone') }}</a>
              </div>
            </div>

            <div class="dialup-row">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <div>
                <span class="dialup-label">Sede / Ubicación:</span>
                <span class="dialup-val">{{ config('software_studio.location') }}</span>
              </div>
            </div>
          </div>

          <!-- Botón WhatsApp Grande -->
          <a href="https://wa.me/{{ config('software_studio.whatsapp_number') }}?text={{ urlencode(config('software_studio.whatsapp_welcome_msg')) }}" 
             target="_blank" 
             rel="noreferrer" 
             class="win-btn" 
             style="background-color: #dcfce7; color: #14532d; border-color: #ffffff #14532d #14532d #ffffff; padding: 10px; font-size: 0.85rem; margin-top: 8px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <span>Abrir Chat Directo en WhatsApp</span>
          </a>
        </div>
        <div class="win-statusbar">
          <span>CARRIER: 100% ONLINE</span>
          <span>IP: STATIC</span>
        </div>
      </div>
    </div>

  </div>
</section>
