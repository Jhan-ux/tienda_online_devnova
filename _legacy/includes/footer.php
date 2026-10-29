<?php
require_once __DIR__.'/../config.php';
?>
  <!-- SITE FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <!-- Columna 1: Marca y descripción -->
        <div>
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem;">
            <div class="brand-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="16 18 22 12 16 6"></polyline>
                <polyline points="8 6 2 12 8 18"></polyline>
              </svg>
            </div>
            <span>DevNova<span class="text-cyan">.</span></span>
          </a>
          <p class="footer-desc">
            Estudio de ingeniería de software especializado en el diseño, desarrollo y escalabilidad de aplicaciones web y móviles para empresas de alto impacto.
          </p>

          <div class="footer-socials">
            <a href="<?php echo $social_links['github']; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="GitHub">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
              </svg>
            </a>
            <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="LinkedIn">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>
            <a href="<?php echo $social_links['twitter']; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Twitter">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Columna 2: Servicios -->
        <div>
          <h4 class="footer-col-title">Soluciones</h4>
          <ul class="footer-links">
            <li><a href="#servicios" class="footer-link">Desarrollo Web & SaaS</a></li>
            <li><a href="#servicios" class="footer-link">Apps Móviles iOS & Android</a></li>
            <li><a href="#servicios" class="footer-link">Sistemas ERP / CRM a Medida</a></li>
            <li><a href="#servicios" class="footer-link">E-commerce de Alto Volumen</a></li>
            <li><a href="#servicios" class="footer-link">Microservicios & Cloud API</a></li>
            <li><a href="#servicios" class="footer-link">Consultoría de Software</a></li>
          </ul>
        </div>

        <!-- Columna 3: Enlaces de Interés -->
        <div>
          <h4 class="footer-col-title">Herramientas</h4>
          <ul class="footer-links">
            <li><a href="#cotizador" class="footer-link">Cotizador Online</a></li>
            <li><a href="#portafolio" class="footer-link">Casos de Éxito</a></li>
            <li><a href="#metodologia" class="footer-link">Metodología de Trabajo</a></li>
            <li><a href="#stack" class="footer-link">Tecnologías Utilizadas</a></li>
            <li><a href="#faqs" class="footer-link">Preguntas Frecuentes</a></li>
            <li><a href="#contacto" class="footer-link">Solicitar Asesoría</a></li>
          </ul>
        </div>

        <!-- Columna 4: Contacto directo -->
        <div>
          <h4 class="footer-col-title">Contacto Directo</h4>
          <ul class="footer-links">
            <li style="color: var(--text-muted); font-size: 0.9rem;">
              <strong>Email:</strong><br>
              <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="footer-link"><?php echo CONTACT_EMAIL; ?></a>
            </li>
            <li style="color: var(--text-muted); font-size: 0.9rem; margin-top: 0.5rem;">
              <strong>Teléfono:</strong><br>
              <a href="tel:<?php echo CONTACT_PHONE; ?>" class="footer-link"><?php echo CONTACT_PHONE; ?></a>
            </li>
            <li style="color: var(--text-muted); font-size: 0.9rem; margin-top: 0.5rem;">
              <strong>Ubicación:</strong><br>
              <span><?php echo OFFICE_LOCATION; ?></span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Barra inferior de copyright y estado -->
      <div class="footer-bottom">
        <div>
          © <?php echo date('Y'); ?> <?php echo APP_NAME; ?>. Todos los derechos reservados.
        </div>

        <div style="display: flex; align-items: center; gap: 0.6rem;">
          <span class="badge-dot"></span>
          <span style="color: #cbd5e1;">Aceptando proyectos nuevos • Q4 <?php echo date('Y'); ?></span>
        </div>
      </div>
    </div>
  </footer>

  <!-- BOTÓN FLOTANTE DE WHATSAPP -->
  <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('¡Hola! Me gustaría cotizar un proyecto con DevNova.'); ?>" 
     target="_blank" 
     rel="noopener noreferrer" 
     class="whatsapp-float-btn" 
     aria-label="Contactar por WhatsApp">
    <div class="whatsapp-beacon"></div>
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
      <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
    </svg>
  </a>

  <!-- MODAL DE CONFIRMACIÓN DE COTIZACIÓN -->
  <div class="modal-overlay" id="successModal">
    <div class="modal-box">
      <button class="modal-close-btn" aria-label="Cerrar ventana">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>

      <div style="text-align: center; margin-bottom: 1.5rem;">
        <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); border: 1px solid var(--accent-emerald); display: inline-flex; align-items: center; justify-content: center; color: var(--accent-emerald); margin-bottom: 1rem;">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <h3 style="font-size: 1.6rem; margin-bottom: 0.5rem;">¡Cotización Registrada con Éxito!</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem;">
          Tu solicitud ha sido guardada en nuestro sistema con el código de seguimiento:
        </p>
        <div id="modalQuoteCode" style="font-family: var(--font-mono); font-size: 1.3rem; font-weight: 700; color: var(--accent-cyan); background: rgba(6, 182, 212, 0.1); border: 1px dashed var(--accent-cyan); display: inline-block; padding: 0.4rem 1.25rem; border-radius: 8px; margin: 0.8rem 0;">
          #DN-XXXXXX
        </div>
      </div>

      <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem; text-align: center;">
        Un arquitecto de soluciones de nuestro equipo revisará los requerimientos para preparar tu propuesta técnica definitiva. Si deseas agilizar la atención, puedes enviarnos el desglose por WhatsApp ahora mismo.
      </p>

      <div style="display: flex; flex-direction: column; gap: 0.75rem;">
        <button type="button" class="btn btn-success" id="btnModalWhatsApp" onclick="document.getElementById('btnSendWhatsApp').click();">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
          </svg>
          Abrir Conversación en WhatsApp
        </button>
        <button type="button" class="btn btn-secondary" onclick="window.print();">
          Imprimir Resumen Formal
        </button>
      </div>
    </div>
  </div>

  <!-- Scripts JavaScript -->
  <script src="assets/js/cotizador.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
