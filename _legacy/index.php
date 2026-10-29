<?php
require_once __DIR__.'/config.php';
include __DIR__.'/includes/header.php';
?>

<main id="mainContent">

  <!-- ==========================================================================
       HERO SECTION
       ========================================================================== -->
  <section class="hero-section" id="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge">
          <span class="badge-dot"></span>
          <span>Estudio de Ingeniería de Software & Apps</span>
        </div>

        <h1 class="hero-title">
          Desarrollo de Software que impulsa el <span class="text-gradient">crecimiento</span> de tu negocio.
        </h1>

        <p class="hero-description">
          Convertimos ideas complejas en productos digitales de clase mundial: aplicaciones web escalables, plataformas SaaS, apps móviles y sistemas a medida diseñados para generar valor real.
        </p>

        <div class="hero-actions">
          <a href="#cotizador" class="btn btn-primary btn-lg">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="4" width="20" height="16" rx="2"></rect>
              <line x1="6" y1="8" x2="10" y2="8"></line>
              <line x1="6" y1="12" x2="14" y2="12"></line>
              <line x1="6" y1="16" x2="18" y2="16"></line>
            </svg>
            Cotizar Proyecto Ahora
          </a>

          <a href="#portafolio" class="btn btn-secondary btn-lg">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="5 3 19 12 5 21 5 3"></polygon>
            </svg>
            Ver Proyectos
          </a>
        </div>

        <!-- Métricas de Confianza -->
        <div class="hero-metrics">
          <div class="metric-item">
            <div class="metric-val" data-target="48" data-suffix="+">48+</div>
            <div class="metric-label">Proyectos Entregados</div>
          </div>
          <div class="metric-item">
            <div class="metric-val" data-target="99" data-suffix=".9%">99.9%</div>
            <div class="metric-label">Uptime & Rendimiento</div>
          </div>
          <div class="metric-item">
            <div class="metric-val" data-target="100" data-suffix="%">100%</div>
            <div class="metric-label">Propiedad de Código</div>
          </div>
        </div>
      </div>

      <!-- Hero Visual: Visualizador de Arquitectura / Código en Vivo -->
      <div class="hero-visual">
        <div class="preview-code-card">
          <div class="code-card-header">
            <div class="traffic-lights">
              <span class="traffic-light red"></span>
              <span class="traffic-light yellow"></span>
              <span class="traffic-light green"></span>
            </div>
            <div class="code-card-tab">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
              </svg>
              architecture.config.ts
            </div>
            <span style="font-size: 0.75rem; color: var(--accent-emerald); font-family: var(--font-mono);">● Ready</span>
          </div>

          <div class="code-card-body">
            <p><span class="code-com">// Definición de Proyecto en DevNova Studios</span></p>
            <p><span class="code-kw">import</span> { <span class="code-fn">CreateEnterpriseApp</span> } <span class="code-kw">from</span> <span class="code-str">'@devnova/core'</span>;</p>
            <br>
            <p><span class="code-kw">export const</span> <span class="code-var">projectConfig</span> = <span class="code-fn">CreateEnterpriseApp</span>({</p>
            <p>&nbsp;&nbsp;platform: <span class="code-str">'CloudNative | MobileFirst'</span>,</p>
            <p>&nbsp;&nbsp;architecture: <span class="code-str">'Microservices & Scalable API'</span>,</p>
            <p>&nbsp;&nbsp;security: [<span class="code-str">'End-to-End Encryption'</span>, <span class="code-str">'JWT'</span>, <span class="code-str">'OAuth2'</span>],</p>
            <p>&nbsp;&nbsp;database: <span class="code-str">'PostgreSQL + Redis Caching'</span>,</p>
            <p>&nbsp;&nbsp;deliverySpeed: <span class="code-str">'Agile 2-week Sprints'</span>,</p>
            <p>&nbsp;&nbsp;slaGuarantee: <span class="code-num">99.98</span>,</p>
            <p>&nbsp;&nbsp;ownership: <span class="code-str">'100% Client-Owned Intellectual Property'</span></p>
            <p>});</p>
            <br>
            <p><span class="code-com">// Iniciar estimación inteligente</span></p>
            <p><span class="code-var">projectConfig</span>.<span class="code-fn">deploySuccess</span>();</p>
          </div>

          <!-- Tarjeta Flotante con Badge de Estado -->
          <div class="floating-tech-card">
            <div class="tech-card-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
              </svg>
            </div>
            <div>
              <div style="font-weight: 700; font-size: 0.95rem; color: #fff;">Calidad Garantizada</div>
              <div style="font-size: 0.78rem; color: var(--text-muted);">Pruebas automatizadas & CI/CD</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SERVICIOS ESPECIALIZADOS
       ========================================================================== -->
  <section class="section" id="servicios">
    <div class="container">
      <div class="section-header reveal-on-scroll">
        <span class="section-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
            <polyline points="2 17 12 22 22 17"></polyline>
            <polyline points="2 12 12 17 22 12"></polyline>
          </svg>
          Capacidades Técnicas
        </span>
        <h2 class="section-title">Soluciones de Software <span class="text-gradient">End-to-End</span></h2>
        <p class="section-subtitle">
          Diseñamos soluciones tecnológicas a la medida de tu modelo de negocio, priorizando velocidad de carga, seguridad y arquitectura escalable.
        </p>
      </div>

      <div class="services-grid">
        <!-- Servicio 1: Web Apps & SaaS -->
        <div class="glass-card service-card reveal-on-scroll">
          <div class="service-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
              <line x1="8" y1="21" x2="16" y2="21"></line>
              <line x1="12" y1="17" x2="12" y2="21"></line>
            </svg>
          </div>
          <h3 class="service-title">Desarrollo Web & Plataformas SaaS</h3>
          <p class="service-text">
            Creamos plataformas web modernas, paneles administrativos interactivos y aplicaciones bajo modelo de suscripción con excelente experiencia de usuario.
          </p>
          <ul class="service-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Arquitectura SPA / SSR ultrarrápida
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Pasarelas de pago y facturación recurrente
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Dashboards con métricas en tiempo real
            </li>
          </ul>
        </div>

        <!-- Servicio 2: Apps Móviles -->
        <div class="glass-card service-card reveal-on-scroll">
          <div class="service-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
              <line x1="12" y1="18" x2="12.01" y2="18"></line>
            </svg>
          </div>
          <h3 class="service-title">Aplicaciones Móviles iOS & Android</h3>
          <p class="service-text">
            Desarrollamos aplicaciones nativas e híbridas de alto desempeño publicables en App Store y Google Play Store con interfaces intuitivas y fluidas.
          </p>
          <ul class="service-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Flutter & React Native de nivel profesional
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Notificaciones push y sincronización offline
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Integración de geolocalización, cámara y biometría
            </li>
          </ul>
        </div>

        <!-- Servicio 3: Sistemas a Medida ERP/CRM -->
        <div class="glass-card service-card reveal-on-scroll">
          <div class="service-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M16 16v1a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v1"></path>
              <path d="M18 8h4a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-4"></path>
              <circle cx="8" cy="12" r="2"></circle>
            </svg>
          </div>
          <h3 class="service-title">Sistemas Empresariales ERP & CRM</h3>
          <p class="service-text">
            Digitalizamos y centralizamos las operaciones de tu empresa: control de inventarios, gestión de clientes, facturación y reportes analíticos automáticos.
          </p>
          <ul class="service-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Adaptado al 100% a tus flujos operativos
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Gestión granular de roles y permisos
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Exportación automática a Excel, PDF y reportes
            </li>
          </ul>
        </div>

        <!-- Servicio 4: E-commerce -->
        <div class="glass-card service-card reveal-on-scroll">
          <div class="service-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="9" cy="21" r="1"></circle>
              <circle cx="20" cy="21" r="1"></circle>
              <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
          </div>
          <h3 class="service-title">E-commerce de Alto Rendimiento</h3>
          <p class="service-text">
            Tiendas virtuales optimizadas para máxima tasa de conversión, con checkout sin fricción, pagos seguros y panel de gestión de pedidos integrado.
          </p>
          <ul class="service-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Stripe, PayPal, MercadoPago y transferencias
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Cálculo dinámico de costos de envío
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Carga ultrarrápida en dispositivos móviles
            </li>
          </ul>
        </div>

        <!-- Servicio 5: APIs & Cloud Architecture -->
        <div class="glass-card service-card reveal-on-scroll">
          <div class="service-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
            </svg>
          </div>
          <h3 class="service-title">APIs, Microservicios & Cloud DevOps</h3>
          <p class="service-text">
            Construimos backends robustos en la nube, APIs RESTful y GraphQL con alta disponibilidad, bases de datos optimizadas y pipelines de despliegue continuo.
          </p>
          <ul class="service-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Contenedores Docker y despliegues en AWS / GCP
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Bases de datos relacionales y NoSQL de alta velocidad
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Integraciones con sistemas legacy y APIs de terceros
            </li>
          </ul>
        </div>

        <!-- Servicio 6: UI/UX & Producto Digital -->
        <div class="glass-card service-card reveal-on-scroll">
          <div class="service-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
              <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
              <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
              <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
              <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
              <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
            </svg>
          </div>
          <h3 class="service-title">Diseño de Producto Digital & UI/UX</h3>
          <p class="service-text">
            Diseñamos interfaces que cautivan y convierten. Creamos prototipos interactivos en Figma, sistemas de diseño completos y pruebas de usabilidad con usuarios.
          </p>
          <ul class="service-features">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Prototipos navegables de alta fidelidad
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Design Systems escalables y reutilizables
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              Enfoque Mobile First & accesibilidad WCAG
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       COTIZADOR INTERACTIVO (HERRAMIENTA CLAVE DE CONVERSIÓN)
       ========================================================================== -->
  <?php include __DIR__.'/includes/cotizador.php'; ?>

  <!-- ==========================================================================
       STACK TECNOLÓGICO DE CLASE MUNDIAL
       ========================================================================== -->
  <section class="section" id="stack" style="background: rgba(10, 14, 24, 0.4);">
    <div class="container">
      <div class="section-header reveal-on-scroll">
        <span class="section-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="16 18 22 12 16 6"></polyline>
            <polyline points="8 6 2 12 8 18"></polyline>
          </svg>
          Tecnología Moderna
        </span>
        <h2 class="section-title">Ecosistema Tecnológico de <span class="text-gradient">Vanguardia</span></h2>
        <p class="section-subtitle">
          Utilizamos las tecnologías más sólidas, probadas y mantenibles de la industria para asegurar que tu software sea rápido, seguro y fácil de escalar a largo plazo.
        </p>
      </div>

      <div class="tech-cloud-grid reveal-on-scroll">
        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#61DAFB"><path d="M12 9a3 3 0 100 6 3 3 0 000-6zm0-7c-5.5 0-9 4.5-9 10s3.5 10 9 10 9-4.5 9-10-3.5-10-9-10zm0 18c-4.4 0-7-3.6-7-8s2.6-8 7-8 7 3.6 7 8-2.6 8-7 8z"/></svg>
          <span class="tech-name">React / Next.js</span>
          <span class="tech-role">Frontend Pro</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#3178C6"><path d="M1.125 0C.502 0 0 .502 0 1.125v21.75C0 23.498.502 24 1.125 24h21.75c.623 0 1.125-.502 1.125-1.125V1.125C24 .502 23.498 0 22.875 0H1.125zm17.363 9.75c.612 0 1.154.037 1.627.111a6.38 6.38 0 0 1 1.306.34v2.458a3.95 3.95 0 0 0-1.35-.408 6.96 6.96 0 0 0-1.51-.157c-.833 0-1.449.18-1.848.54-.4.36-.6.883-.6 1.57v.147c0 .633.207 1.137.62 1.51.413.374 1.08.74 2.001 1.1.92.36 1.603.784 2.048 1.272.445.489.667 1.156.667 2.003 0 1.18-.396 2.096-1.188 2.748-.792.652-1.92.978-3.385.978-.813 0-1.6-.08-2.36-.24a7.92 7.92 0 0 1-1.85-.688v-2.637c.72.41 1.45.71 2.19.9.74.19 1.43.285 2.07.285.83 0 1.44-.176 1.83-.528.39-.352.585-.858.585-1.518v-.147c0-.643-.21-1.152-.63-1.528-.42-.375-1.1-.745-2.04-1.11-.94-.364-1.63-.79-2.07-1.28-.44-.488-.66-1.153-.66-1.995 0-1.133.39-2.02 1.17-2.66.78-.64 1.88-.96 3.3-.96z"/></svg>
          <span class="tech-name">TypeScript</span>
          <span class="tech-role">Tipado Seguro</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#02569B"><path d="M14.314 0L2.3 12 6 15.7 21.684.013h-7.37zM6.012 15.698L0 21.71 3.69 24l8.3-8.3-5.978-5.978v5.976z"/></svg>
          <span class="tech-name">Flutter</span>
          <span class="tech-role">iOS & Android</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#339933"><path d="M12 0C5.37 0 0 5.37 0 12s5.37 12 12 12 12-5.37 12-12S18.63 0 12 0zm0 3.6c4.64 0 8.4 3.76 8.4 8.4s-3.76 8.4-8.4 8.4S3.6 16.64 3.6 12 7.36 3.6 12 3.6zm0 2.4a6 6 0 100 12 6 6 0 000-12z"/></svg>
          <span class="tech-name">Node.js</span>
          <span class="tech-role">Backend Rápido</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#777BB4"><path d="M12 0a12 12 0 100 24 12 12 0 000-24zm0 2.4a9.6 9.6 0 110 19.2 9.6 9.6 0 010-19.2zm-2.4 4.8v9.6h2.4v-3.6h2.4a2.4 2.4 0 000-4.8H9.6v-1.2zm2.4 2.4h2.4a1.2 1.2 0 010 2.4H12V9.6z"/></svg>
          <span class="tech-name">PHP / Laravel</span>
          <span class="tech-role">Backend Sólido</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#3776AB"><path d="M11.9 0C5.3 0 5.7 2.9 5.7 2.9l.01 3h6.3v.9H3.1S0 6.4 0 13c0 6.6 2.7 6.4 2.7 6.4h1.6v-2.3s-.1-2.7 2.7-2.7h4.6s2.6 0 2.6-2.5V3s.4-3-4.7-3zm-1.8 1.8c.6 0 1.1.5 1.1 1.1s-.5 1.1-1.1 1.1-1.1-.5-1.1-1.1.5-1.1 1.1-1.1zM12.1 24c6.6 0 6.2-2.9 6.2-2.9l-.01-3h-6.3v-.9h8.9s3.1.4 3.1-6.2c0-6.6-2.7-6.4-2.7-6.4h-1.6v2.3s.1 2.7-2.7 2.7h-4.6s-2.6 0-2.6 2.5V21s-.4 3 4.7 3zm1.8-1.8c-.6 0-1.1-.5-1.1-1.1s.5-1.1 1.1-1.1 1.1.5 1.1 1.1-.5 1.1-1.1 1.1z"/></svg>
          <span class="tech-name">Python / FastAPI</span>
          <span class="tech-role">IA & APIs</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#336791"><path d="M12 0C5.37 0 0 5.37 0 12s5.37 12 12 12 12-5.37 12-12S18.63 0 12 0zm0 2.4a9.6 9.6 0 110 19.2 9.6 9.6 0 010-19.2zm-1.2 4.8v9.6h2.4V7.2h-2.4z"/></svg>
          <span class="tech-name">PostgreSQL</span>
          <span class="tech-role">Bases de Datos</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#2496ED"><path d="M13.983 11.078h2.119a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.119a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 00.186-.186V3.574a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.186.185.186m0 5.43h2.118a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185m-2.954 0h2.119a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186H8.075a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185"/></svg>
          <span class="tech-name">Docker & K8s</span>
          <span class="tech-role">Contenedores</span>
        </div>

        <div class="tech-chip">
          <svg viewBox="0 0 24 24" fill="#FF9900"><path d="M13.1 14.8c-2.4 1.8-5.8 2.7-8.8 2.7-4.2 0-8-1.5-10.9-4.1-.2-.2-.3-.5-.1-.7.2-.2.5-.2.7 0 2.7 2.4 6.3 3.9 10.3 3.9 2.7 0 5.8-.8 8-2.5.3-.2.7-.2.9.1.2.3.1.7-.1.9zm1.3-.9c-.3-.4-2-.9-4.1-.9-2.1 0-4.1.6-4.5.9-.2.2-.4.1-.5-.1-.1-.2-.1-.5.1-.6.5-.4 2.8-1.1 4.9-1.1 2.3 0 4.2.7 4.5 1 .2.2.1.5-.1.7-.1.1-.3.2-.4.2z"/></svg>
          <span class="tech-name">AWS / Cloud</span>
          <span class="tech-role">Infraestructura</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       PORTAFOLIO / CASOS DE ÉXITO
       ========================================================================== -->
  <section class="section" id="portafolio">
    <div class="container">
      <div class="section-header reveal-on-scroll">
        <span class="section-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
          </svg>
          Casos Reales
        </span>
        <h2 class="section-title">Software Construido para <span class="text-gradient">Escalar</span></h2>
        <p class="section-subtitle">
          Explora algunos de los proyectos que hemos diseñado y desarrollado para clientes en diferentes industrias, desde fintech hasta logística y salud.
        </p>
      </div>

      <div class="portfolio-grid">
        <!-- Proyecto 1: FinPulse SaaS -->
        <article class="project-card reveal-on-scroll">
          <div class="project-banner" style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%);">
            <div class="project-banner-decor">
              <div class="banner-mock-nav">
                <span></span><span></span><span></span>
              </div>
              <div class="banner-mock-content">
                <div class="mock-sidebar"></div>
                <div class="mock-main">
                  <div class="mock-bar" style="width: 50%;"></div>
                  <div class="mock-boxes">
                    <div class="mock-box" style="background: rgba(99, 102, 241, 0.15);"></div>
                    <div class="mock-box"></div>
                    <div class="mock-box"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="project-body">
            <div class="project-tags">
              <span class="project-tag">SaaS Fintech</span>
              <span class="project-tag">React / Node.js</span>
              <span class="project-tag">Stripe API</span>
            </div>
            <h3 class="project-title">FinPulse Analytics</h3>
            <p class="project-desc">
              Plataforma SaaS de conciliación bancaria y facturación automatizada para startups de alto volumen transaccional en América Latina.
            </p>

            <div class="project-metrics-row">
              <div class="pm-item">
                <div class="pm-val">+340%</div>
                <div class="pm-lbl">Eficiencia operativa</div>
              </div>
              <div class="pm-item">
                <div class="pm-val">15k+</div>
                <div class="pm-lbl">Transacciones/día</div>
              </div>
            </div>

            <a href="#cotizador" class="btn btn-secondary btn-sm" style="width: 100%;">Cotizar Sistema Similar</a>
          </div>
        </article>

        <!-- Proyecto 2: MediConnect App -->
        <article class="project-card reveal-on-scroll">
          <div class="project-banner" style="background: linear-gradient(135deg, #064e3b 0%, #0f172a 100%);">
            <div class="project-banner-decor" style="width: 45%; height: 90%; border-radius: 14px;">
              <div class="banner-mock-nav" style="justify-content: center;">
                <span style="width: 30px; height: 3px; border-radius: 2px;"></span>
              </div>
              <div class="banner-mock-content" style="flex-direction: column;">
                <div style="height: 25px; background: rgba(16, 185, 129, 0.2); border-radius: 4px; margin-bottom: 5px;"></div>
                <div style="height: 12px; background: rgba(255, 255, 255, 0.1); border-radius: 2px; width: 70%;"></div>
                <div style="height: 40px; background: rgba(255, 255, 255, 0.05); border-radius: 6px; margin-top: 10px;"></div>
              </div>
            </div>
          </div>

          <div class="project-body">
            <div class="project-tags">
              <span class="project-tag">App Móvil</span>
              <span class="project-tag">Flutter</span>
              <span class="project-tag">Telemedicina</span>
            </div>
            <h3 class="project-title">MediConnect Health</h3>
            <p class="project-desc">
              Aplicación móvil para agendamiento de citas médicas, videollamadas encriptadas y recetas digitales con pagos seguros en un solo clic.
            </p>

            <div class="project-metrics-row">
              <div class="pm-item">
                <div class="pm-val">4.9 ★</div>
                <div class="pm-lbl">App Store & Play Store</div>
              </div>
              <div class="pm-item">
                <div class="pm-val">50k+</div>
                <div class="pm-lbl">Usuarios Activos</div>
              </div>
            </div>

            <a href="#cotizador" class="btn btn-secondary btn-sm" style="width: 100%;">Cotizar App Móvil</a>
          </div>
        </article>

        <!-- Proyecto 3: LogixTrade ERP -->
        <article class="project-card reveal-on-scroll">
          <div class="project-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);">
            <div class="project-banner-decor">
              <div class="banner-mock-nav">
                <span></span><span></span><span></span>
              </div>
              <div class="banner-mock-content">
                <div class="mock-sidebar" style="width: 35%;"></div>
                <div class="mock-main">
                  <div class="mock-bar" style="width: 75%; background: rgba(6, 182, 212, 0.4);"></div>
                  <div class="mock-boxes">
                    <div class="mock-box"></div>
                    <div class="mock-box" style="background: rgba(6, 182, 212, 0.15);"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="project-body">
            <div class="project-tags">
              <span class="project-tag">ERP Empresarial</span>
              <span class="project-tag">PHP / MySQL</span>
              <span class="project-tag">Logística</span>
            </div>
            <h3 class="project-title">LogixTrade Cloud</h3>
            <p class="project-desc">
              Software integral de control de almacenes, envíos multinacionales y facturación electrónica masiva con reportes en tiempo real.
            </p>

            <div class="project-metrics-row">
              <div class="pm-item">
                <div class="pm-val">-65%</div>
                <div class="pm-lbl">Tiempo de Inventario</div>
              </div>
              <div class="pm-item">
                <div class="pm-val">100%</div>
                <div class="pm-lbl">Trazabilidad de Carga</div>
              </div>
            </div>

            <a href="#cotizador" class="btn btn-secondary btn-sm" style="width: 100%;">Cotizar ERP a Medida</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       METODOLOGÍA DE TRABAJO ÁGIL
       ========================================================================== -->
  <section class="section" id="metodologia">
    <div class="container">
      <div class="section-header reveal-on-scroll">
        <span class="section-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="12 6 12 12 14 14"></polyline>
          </svg>
          Proceso Transparente
        </span>
        <h2 class="section-title">Cómo Transformamos tu Idea en <span class="text-gradient">Realidad</span></h2>
        <p class="section-subtitle">
          Un flujo de trabajo ágil, predecible y sin sorpresas. Mantienes visibilidad total del progreso semana a semana.
        </p>
      </div>

      <div class="process-grid">
        <!-- Paso 1 -->
        <div class="glass-card process-card reveal-on-scroll">
          <div class="process-step-indicator">01</div>
          <div class="process-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
          </div>
          <h3 class="process-title">Descubrimiento & Alcance</h3>
          <p class="process-text">
            Analizamos tus objetivos de negocio, requerimientos técnicos y definimos la arquitectura del software con entregables claros y cronograma formal.
          </p>
        </div>

        <!-- Paso 2 -->
        <div class="glass-card process-card reveal-on-scroll">
          <div class="process-step-indicator">02</div>
          <div class="process-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
              <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
            </svg>
          </div>
          <h3 class="process-title">Diseño UX/UI en Figma</h3>
          <p class="process-text">
            Prototipamos la experiencia completa de usuario en alta fidelidad antes de escribir código. Validamos cada pantalla e interacción contigo.
          </p>
        </div>

        <!-- Paso 3 -->
        <div class="glass-card process-card reveal-on-scroll">
          <div class="process-step-indicator">03</div>
          <div class="process-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="16 18 22 12 16 6"></polyline>
              <polyline points="8 6 2 12 8 18"></polyline>
            </svg>
          </div>
          <h3 class="process-title">Desarrollo Ágil en Sprints</h3>
          <p class="process-text">
            Construimos tu plataforma en ciclos de 2 semanas con código limpio, modular y testeado. Recibes demos funcionales en servidores de prueba.
          </p>
        </div>

        <!-- Paso 4 -->
        <div class="glass-card process-card reveal-on-scroll">
          <div class="process-step-indicator">04</div>
          <div class="process-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
              <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
            </svg>
          </div>
          <h3 class="process-title">Lanzamiento & Soporte</h3>
          <p class="process-text">
            Desplegamos en infraestructura Cloud de producción, configuramos dominios y te entregamos la propiedad total del código con 6 meses de garantía técnica.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       TESTIMONIOS DE CLIENTES
       ========================================================================== -->
  <section class="section" id="testimonios">
    <div class="container">
      <div class="section-header reveal-on-scroll">
        <span class="section-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
          Confianza Comprobada
        </span>
        <h2 class="section-title">Lo que Dicen Quienes Ya <span class="text-gradient">Construyen con Nosotros</span></h2>
        <p class="section-subtitle">
          El éxito de nuestros clientes es nuestra mejor carta de presentación.
        </p>
      </div>

      <div class="testimonials-grid">
        <!-- Testimonio 1 -->
        <div class="glass-card testimonial-card reveal-on-scroll">
          <div>
            <div class="testimonial-stars">★★★★★</div>
            <p class="testimonial-quote">
              "El cotizador interactivo fue lo que me convenció inicialmente por su total transparencia, pero el equipo de desarrollo superó cualquier expectativa. Nos entregaron un SaaS financiero robusto en tiempo récord."
            </p>
          </div>
          <div class="testimonial-author">
            <div class="author-avatar">RG</div>
            <div>
              <div class="author-name">Rodrigo Garza</div>
              <div class="author-role">Co-Fundador & CTO en FinPulse</div>
            </div>
          </div>
        </div>

        <!-- Testimonio 2 -->
        <div class="glass-card testimonial-card reveal-on-scroll">
          <div>
            <div class="testimonial-stars">★★★★★</div>
            <p class="testimonial-quote">
              "Necesitábamos lanzar nuestra aplicación de telemedicina con estándares estrictos de seguridad médica y rapidez. Su equipo dominó la arquitectura cloud y el diseño UI/UX de principio a fin."
            </p>
          </div>
          <div class="testimonial-author">
            <div class="author-avatar" style="background: linear-gradient(135deg, #10b981, #06b6d4);">MV</div>
            <div>
              <div class="author-name">Dra. Marcela Valencia</div>
              <div class="author-role">Directora Médica en MediConnect</div>
            </div>
          </div>
        </div>

        <!-- Testimonio 3 -->
        <div class="glass-card testimonial-card reveal-on-scroll">
          <div>
            <div class="testimonial-stars">★★★★★</div>
            <p class="testimonial-quote">
              "Reemplazamos tres sistemas obsoletos por un ERP centralizado desarrollado a medida. Hemos reducido nuestros errores de inventario a prácticamente cero. Excelente comunicación y soporte técnico."
            </p>
          </div>
          <div class="testimonial-author">
            <div class="author-avatar" style="background: linear-gradient(135deg, #f59e0b, #ef4444);">AL</div>
            <div>
              <div class="author-name">Alejandro Loredo</div>
              <div class="author-role">Director de Operaciones en LogixTrade</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       PREGUNTAS FRECUENTES (FAQS) & FORMULARIO DE CONTACTO DIRECTO
       ========================================================================== -->
  <section class="section" id="contacto">
    <div class="container">
      <div class="contact-grid">
        <!-- Columna Izquierda: Formulario de Contacto -->
        <div class="glass-card reveal-on-scroll" style="background: rgba(14, 20, 34, 0.85);">
          <div style="margin-bottom: 2rem;">
            <span class="section-tag">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
              </svg>
              Hablemos de tu Proyecto
            </span>
            <h3 style="font-size: 2rem; margin-bottom: 0.75rem;">¿Tienes una necesidad específica?</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem;">
              Escríbenos directamente y un ingeniero de software se pondrá en contacto contigo en menos de 24 horas para una sesión de asesoría sin costo.
            </p>
          </div>

          <form id="mainContactForm">
            <div class="form-group">
              <label for="contactName" class="form-label">Nombre Completo *</label>
              <input type="text" name="name" id="contactName" class="form-control" placeholder="Tu nombre" required>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
              <div class="form-group">
                <label for="contactEmail" class="form-label">Correo Electrónico *</label>
                <input type="email" name="email" id="contactEmail" class="form-control" placeholder="tu@correo.com" required>
              </div>

              <div class="form-group">
                <label for="contactPhone" class="form-label">Teléfono / WhatsApp</label>
                <input type="tel" name="phone" id="contactPhone" class="form-control" placeholder="+52 ...">
              </div>
            </div>

            <div class="form-group">
              <label for="contactService" class="form-label">Servicio de Interés</label>
              <select name="service" id="contactService" class="form-control">
                <option value="Desarrollo Web / SaaS">Desarrollo Web / SaaS</option>
                <option value="App Móvil iOS y Android">App Móvil iOS y Android</option>
                <option value="Sistema ERP / CRM Empresarial">Sistema ERP / CRM Empresarial</option>
                <option value="E-commerce de Alto Rendimiento">E-commerce de Alto Rendimiento</option>
                <option value="Consultoría / Auditoría de Código">Consultoría / Auditoría de Código</option>
              </select>
            </div>

            <div class="form-group">
              <label for="contactMessage" class="form-label">Detalles del Proyecto *</label>
              <textarea name="message" id="contactMessage" class="form-control" placeholder="Cuéntanos brevemente sobre tu idea, objetivos o requerimientos clave..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
              </svg>
              Enviar Mensaje y Agendar Llamada
            </button>
          </form>
        </div>

        <!-- Columna Derecha: Acordeón de FAQs -->
        <div class="reveal-on-scroll" id="faqs">
          <span class="section-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
              <line x1="12" y1="17" x2="12.01" y2="17"></line>
            </svg>
            Preguntas Frecuentes
          </span>
          <h3 style="font-size: 2rem; margin-bottom: 1.5rem;">Todo lo que necesitas saber</h3>

          <div class="faq-list">
            <!-- FAQ 1 -->
            <div class="faq-item active">
              <button class="faq-question">
                <span>¿Cómo funciona el Cotizador Online de Software?</span>
                <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>
              <div class="faq-answer">
                Nuestro cotizador calcula un estimado en tiempo real basado en la complejidad de la arquitectura, módulos seleccionados (pasarelas de pago, autenticación, dashboards) y plazos de entrega. Puedes enviarlo directamente por WhatsApp o guardarlo para recibir una propuesta formal detallada.
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
              <button class="faq-question">
                <span>¿El código fuente del software será 100% de mi propiedad?</span>
                <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>
              <div class="faq-answer">
                Sí, absolutamente. Al completar el proyecto te transferimos la propiedad intelectual total del código fuente, repositorios de Git, documentación técnica y accesos de servidores. No te cobramos licencias ni regalías sobre tu propio producto.
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
              <button class="faq-question">
                <span>¿Qué garantía y soporte técnico ofrecen tras el lanzamiento?</span>
                <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>
              <div class="faq-answer">
                Todos nuestros desarrollos incluyen una garantía técnica de 6 meses contra cualquier fallo o bug que difiera de las especificaciones pactadas. Además, ofrecemos planes mensuales de mantenimiento preventivo y evolución continua.
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
              <button class="faq-question">
                <span>¿Cómo se estructuran los pagos del proyecto?</span>
                <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>
              <div class="faq-answer">
                Trabajamos bajo un esquema transparente por hitos (milestones) o sprints. Comúnmente se maneja un anticipo inicial del 40%, pagos intermedios al validar entregables funcionales, y el finiquito del 20% al desplegar en producción y transferir el código.
              </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item">
              <button class="faq-question">
                <span>¿Pueden firmar un acuerdo de confidencialidad (NDA)?</span>
                <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>
              <div class="faq-answer">
                Por supuesto. Protegemos tu idea y tu propiedad intelectual desde el primer contacto. Podemos firmar un acuerdo de no divulgación (NDA) antes de profundizar en la lógica o modelo de negocio de tu plataforma.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__.'/includes/footer.php'; ?>
