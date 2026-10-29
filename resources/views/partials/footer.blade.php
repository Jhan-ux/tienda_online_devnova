<!-- ==========================================================================
     RETRO FOOTER / PIE DE PÁGINA
     ========================================================================== -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-legal-links">
      <a href="#terminos" class="footer-legal-link terms-link-trigger" onclick="window.openTermsModal(); return false;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
        <span>Términos y Condiciones</span>
      </a>
      <span class="footer-divider-dot">·</span>
      <a href="#cookies" class="footer-legal-link cookies-link-trigger" onclick="window.openCookieSettings(); return false;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 10 10 0 1 0-10-10"></path></svg>
        <span>Preferencias de Cookies</span>
      </a>
      <span class="footer-divider-dot">·</span>
      <a href="{{ route('cookies') }}" class="footer-legal-link">
        <span>Política de Cookies</span>
      </a>
      <span class="footer-divider-dot">·</span>
      <a href="{{ route('terms') }}" class="footer-legal-link">
        <span>Aviso Legal Completo</span>
      </a>
    </div>

    <p class="footer-copy">
      © {{ date('Y') }} {{ config('software_studio.app_name') }}. Todos los derechos reservados.
    </p>
    <p class="footer-subcopy">
      Construido con Laravel 13, PHP 8.5, Arquitectura Modular Blade &amp; Estética Retro OS 95 Full-Screen.
    </p>
  </div>
</footer>
