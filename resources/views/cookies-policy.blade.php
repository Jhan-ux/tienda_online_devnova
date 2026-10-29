@extends('layouts.app')

@section('content')
<main id="mainContent" class="desktop-workspace" style="padding: 20px 12px 60px 12px;">
  <div class="container" style="max-width: 900px; margin: 0 auto;">
    
    <!-- Top Action Breadcrumb -->
    <div style="margin-bottom: 12px; display: flex; justify-content: space-between; align-items: center;">
      <a href="{{ url('/') }}" class="win-btn" style="padding: 6px 12px; font-size: 0.8rem; display: inline-flex; align-items: center; gap: 6px;">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
        <span>&lt; Volver al Escritorio / Inicio</span>
      </a>

      <button type="button" class="win-btn win-btn-highlight" onclick="window.openCookieSettings()" style="padding: 6px 12px; font-size: 0.8rem;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
        <span>Abrir Panel de Configuración de Cookies</span>
      </button>
    </div>

    <!-- Main Window -->
    <div class="win-outset" style="background: var(--win-surface); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
      <!-- Window Titlebar -->
      <div class="win-titlebar">
        <div class="win-titlebar-left">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 2a14.5 14.5 0 0 0 0 20 10 10 0 1 0-10-10"></path>
            <circle cx="8.5" cy="8.5" r="1" fill="currentColor"></circle>
            <circle cx="15.5" cy="15.5" r="1" fill="currentColor"></circle>
          </svg>
          <span>POLITICA_DE_COOKIES.TXT - Bloc de notas [DevNova Legal Edition]</span>
        </div>
        <div class="win-titlebar-right">
          <span class="win-control-btn" title="Minimizar">_</span>
          <span class="win-control-btn" title="Maximizar">□</span>
          <a href="{{ url('/') }}" class="win-control-btn" title="Cerrar" style="text-decoration: none; color: inherit; display: flex; align-items: center; justify-content: center;">X</a>
        </div>
      </div>

      <!-- Menu Bar -->
      <div class="notepad-menu-bar">
        <span class="notepad-menu-item"><u>A</u>rchivo</span>
        <span class="notepad-menu-item"><u>E</u>dición</span>
        <span class="notepad-menu-item"><u>F</u>ormato</span>
        <span class="notepad-menu-item"><u>V</u>er</span>
        <span class="notepad-menu-item">A<u>y</u>uda</span>
      </div>

      <!-- Text Sheet -->
      <div class="win-inset notepad-text-sheet" style="max-height: none; padding: 24px;">
        <div class="legal-doc-content">
          <div class="legal-header">
            <h1 class="legal-title" style="font-size: 1.5rem;">POLÍTICA DE COOKIES Y ALMACENAMIENTO LOCAL</h1>
            <p class="legal-meta"><strong>DEVNOVA SOFTWARE STUDIOS</strong> | Documento Ref: DOC-COOKIE-2026-v2.5</p>
            <p class="legal-meta">Última actualización: Octubre de 2026 | Cumplimiento: GDPR, ePrivacy &amp; LGPD</p>
            <hr class="legal-divider">
          </div>

          <section class="legal-section">
            <h3>1. ¿QUÉ SON LAS COOKIES Y EL ALMACENAMIENTO LOCAL?</h3>
            <p>
              Una cookie es un pequeño fragmento de información que un sitio web solicita a tu navegador que almacene en tu dispositivo. El almacenamiento local (LocalStorage) es una tecnología moderna que permite guardar preferencias del usuario en el navegador sin transmitir datos innecesarios al servidor en cada petición.
            </p>
            <p>
              En <strong>DevNova Studios</strong> priorizamos la privacidad del usuario y la eficiencia técnica, utilizando únicamente los datos indispensables para una experiencia interactiva óptima.
            </p>
          </section>

          <section class="legal-section">
            <h3>2. COOKIES Y TECNOLOGÍAS QUE UTILIZAMOS</h3>
            
            <div style="margin: 16px 0; display: flex; flex-direction: column; gap: 12px;">
              <!-- 1. Esenciales -->
              <div class="win-inset" style="padding: 14px; background: #ffffff;">
                <h4 style="margin: 0 0 6px 0; color: #000080; font-size: 0.95rem; font-weight: 800;">
                  A. Cookies Técnicas y de Sesión (Estrictamente Necesarias)
                </h4>
                <p style="margin: 0; font-size: 0.82rem; color: #374151; line-height: 1.5;">
                  <strong>Finalidad:</strong> Garantizan la navegación segura y la integridad de las solicitudes enviadas desde los formularios. En nuestra plataforma Laravel, esto incluye la cookie de sesión encriptada y el token <code>XSRF-TOKEN / _token</code> que previene ataques de suplantación (CSRF).<br>
                  <strong>Duración:</strong> Sesión del navegador (se eliminan al cerrar la pestaña o tras inactividad).<br>
                  <strong>Consentimiento:</strong> No requieren consentimiento previo por ser técnicamente indispensables para prestar el servicio solicitado.
                </p>
              </div>

              <!-- 2. Preferencias -->
              <div class="win-inset" style="padding: 14px; background: #ffffff;">
                <h4 style="margin: 0 0 6px 0; color: #000080; font-size: 0.95rem; font-weight: 800;">
                  B. Preferencias de Interfaz Retro OS (LocalStorage)
                </h4>
                <p style="margin: 0; font-size: 0.82rem; color: #374151; line-height: 1.5;">
                  <strong>Finalidad:</strong> Guardan tus elecciones personalizadas del sistema operativo retro:
                  activación/desactivación del sintetizador de sonido mecánico (<code>retro_sfx_enabled</code>), emulación de monitor de tubo de rayos catódicos (<code>retro_crt_enabled</code>), modo de visualización de secciones (<code>retro_view_mode</code>) y tu elección de cookies (<code>devnova_cookie_consent</code>).<br>
                  <strong>Duración:</strong> Persistente en el navegador hasta que decidas borrarlas o restablecer la configuración.<br>
                  <strong>Consentimiento:</strong> Opcionales. Puedes activarlas o desactivarlas en cualquier momento.
                </p>
              </div>

              <!-- 3. Métricas anónimas -->
              <div class="win-inset" style="padding: 14px; background: #ffffff;">
                <h4 style="margin: 0 0 6px 0; color: #000080; font-size: 0.95rem; font-weight: 800;">
                  C. Analítica Anónima y Rendimiento del Cotizador
                </h4>
                <p style="margin: 0; font-size: 0.82rem; color: #374151; line-height: 1.5;">
                  <strong>Finalidad:</strong> Medición agregada y anónima de las rutas y stacks tecnológicos más cotizados para optimizar el motor de cálculo y la capacidad de nuestros servidores.<br>
                  <strong>Duración:</strong> Hasta 12 meses.<br>
                  <strong>Consentimiento:</strong> Opcionales. Requieren tu autorización expresa.
                </p>
              </div>
            </div>
          </section>

          <section class="legal-section">
            <h3>3. ¿COMPARTIMOS INFORMACIÓN CON TERCEROS?</h3>
            <p>
              <strong>No vendemos, alquilamos ni comercializamos tu información personal ni tus cookies con redes publicitarias de terceros.</strong>
            </p>
            <p>
              La información que ingresas en el cotizador (nombre, email, requerimientos técnicos) se almacena en nuestra base de datos de manera segura y sólo es accesible por los ingenieros y arquitectos de DevNova Studios encargados de elaborar tu propuesta formal.
            </p>
          </section>

          <section class="legal-section">
            <h3>4. CÓMO GESTIONAR O RETIRAR TU CONSENTIMIENTO</h3>
            <p>
              Puedes cambiar tus preferencias en cualquier momento haciendo clic en el enlace <strong>"Configurar Cookies"</strong> disponible en el pie de página o en el Menú Inicio de la plataforma.
            </p>
            <p>
              Asimismo, puedes deshabilitar o eliminar las cookies directamente en la configuración de privacidad de tu navegador:
            </p>
            <ul>
              <li><strong>Google Chrome:</strong> Configuración &gt; Privacidad y seguridad &gt; Cookies y otros datos de sitios.</li>
              <li><strong>Mozilla Firefox:</strong> Ajustes &gt; Privacidad &amp; Seguridad &gt; Cookies y datos del sitio.</li>
              <li><strong>Microsoft Edge:</strong> Configuración &gt; Permisos del sitio &gt; Cookies y datos almacenados.</li>
              <li><strong>Safari:</strong> Preferencias &gt; Privacidad &gt; Bloquear todas las cookies.</li>
            </ul>
          </section>

          <section class="legal-section">
            <h3>5. CONTACTO Y DUDAS SOBRE PRIVACIDAD</h3>
            <p>
              Si tienes preguntas sobre nuestra gestión de cookies o deseas solicitar la eliminación de datos almacenados:
            </p>
            <p>
              <strong>Responsable de Privacidad:</strong> DevNova Software Studios<br>
              <strong>Correo:</strong> <a href="mailto:{{ config('software_studio.contact_email', 'contacto@devnovasoftware.com') }}">{{ config('software_studio.contact_email', 'contacto@devnovasoftware.com') }}</a><br>
              <strong>WhatsApp:</strong> +{{ config('software_studio.whatsapp_number', '5215512345678') }}
            </p>
          </section>
        </div>
      </div>

      <!-- Action Footer -->
      <div class="notepad-footer-actions">
        <div style="font-size: 0.72rem; color: #4b5563; font-family: var(--font-mono);">
          <span>Configuración activa en este equipo</span>
        </div>
        <div style="display: flex; gap: 6px;">
          <button type="button" class="win-btn" onclick="window.openCookieSettings()">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            <span>Modificar Preferencias</span>
          </button>
          <a href="{{ url('/') }}" class="win-btn win-btn-highlight" style="text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
            <span>Aceptar y Volver al Inicio</span>
          </a>
        </div>
      </div>

      <!-- Statusbar -->
      <div class="win-statusbar">
        <span>COOKIES: PRIVACIDAD_TOTAL</span>
        <span>NORMATIVA: GDPR_CONFORME</span>
        <span>SISTEMA: OK</span>
      </div>
    </div>
  </div>
</main>
@endsection
