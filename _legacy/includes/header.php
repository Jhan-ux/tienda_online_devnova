<?php
require_once __DIR__.'/../config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo APP_NAME; ?> | <?php echo APP_SLOGAN; ?></title>
  <meta name="description" content="<?php echo APP_DESCRIPTION; ?>">
  <meta name="keywords" content="desarrollo de software, aplicaciones web, apps moviles, cotizador de software, programacion a medida, saas, ecommerce, figma ui ux">
  <meta name="theme-color" content="#080c14">

  <!-- Open Graph / Meta Social -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo APP_NAME; ?> - Desarrollo de Software">
  <meta property="og:description" content="<?php echo APP_DESCRIPTION; ?>">
  <meta property="og:url" content="<?php echo APP_URL; ?>">

  <!-- Google Fonts: Inter & Outfit -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800;900&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Hojas de Estilo CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animations.css">

  <!-- Configuración inyectada a JavaScript -->
  <script>
    window.DEVNOVA_CONFIG = {
      whatsappNumber: '<?php echo WHATSAPP_NUMBER; ?>',
      whatsappWelcomeMsg: '<?php echo WHATSAPP_WELCOME_MSG; ?>',
      currencySymbol: '<?php echo CURRENCY_SYMBOL; ?>',
      currencyCode: '<?php echo CURRENCY_CODE; ?>'
    };
  </script>
</head>
<body class="bg-grid-pattern">

  <!-- HEADER & NAVIGATION -->
  <header class="site-header" id="siteHeader">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo" aria-label="<?php echo APP_NAME; ?>">
        <div class="brand-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="16 18 22 12 16 6"></polyline>
            <polyline points="8 6 2 12 8 18"></polyline>
          </svg>
        </div>
        <span>DevNova<span class="text-cyan">.</span></span>
      </a>

      <nav aria-label="Navegación principal">
        <ul class="nav-menu" id="navMenu">
          <li><a href="#servicios" class="nav-link">Servicios</a></li>
          <li><a href="#cotizador" class="nav-link">Cotizador Online</a></li>
          <li><a href="#portafolio" class="nav-link">Proyectos</a></li>
          <li><a href="#metodologia" class="nav-link">Metodología</a></li>
          <li><a href="#faqs" class="nav-link">Preguntas</a></li>
          <li><a href="#contacto" class="nav-link">Contacto</a></li>
        </ul>
      </nav>

      <div class="nav-cta">
        <a href="#cotizador" class="btn btn-primary btn-sm">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
          </svg>
          Calcular Presupuesto
        </a>

        <button class="mobile-toggle" id="mobileToggle" aria-label="Abrir Menú de navegación">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>
  </header>
