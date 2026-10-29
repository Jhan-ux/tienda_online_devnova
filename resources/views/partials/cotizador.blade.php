<!-- ==========================================================================
     COMPONENTE BLADE: ASISTENTE INTERACTIVO DE COTIZACIÓN DE SOFTWARE (RETRO OS 95)
     ========================================================================== -->
<section class="section" id="cotizador">
  <div class="container">
    
    <!-- Outer Window Container (Windows 95 Outset Bevel) -->
    <div class="win-outset cotizador-window">
      <!-- Wizard Titlebar -->
      <div class="win-titlebar">
        <div class="win-titlebar-left">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fde047" stroke-width="2.5">
            <rect x="4" y="2" width="16" height="20" rx="2"></rect>
            <line x1="8" y1="6" x2="16" y2="6"></line>
            <line x1="16" y1="14" x2="16" y2="18"></line>
            <path d="M16 10h.01"></path>
            <path d="M12 10h.01"></path>
            <path d="M8 10h.01"></path>
            <path d="M12 14h.01"></path>
            <path d="M8 14h.01"></path>
            <path d="M12 18h.01"></path>
            <path d="M8 18h.01"></path>
          </svg>
          <span>ASISTENTE_DE_COTIZACION.EXE - WIZARD v2.0</span>
          <span style="font-size: 9px; padding: 1px 5px; background: rgba(0,0,128,0.5); border: 1px solid #fde047; color: #fde047; font-family: var(--font-mono); font-weight: 800;">AUTO_CALC</span>
        </div>
        <div class="win-titlebar-right">
          <span class="win-control-btn">_</span>
          <span class="win-control-btn">□</span>
          <span class="win-control-btn">X</span>
        </div>
      </div>

      <!-- Stepper / Property Sheet Tabs -->
      <nav class="cotizador-stepper" aria-label="Pasos de la cotización">
        <button type="button" class="step-nav-item active" data-step="1">
          <span class="step-badge-num">1</span>
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line></svg>
          <span>Tipo de Proyecto</span>
        </button>
        <button type="button" class="step-nav-item" data-step="2">
          <span class="step-badge-num">2</span>
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line></svg>
          <span>Funcionalidades</span>
        </button>
        <button type="button" class="step-nav-item" data-step="3">
          <span class="step-badge-num">3</span>
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><path d="m4.93 4.93 4.24 4.24"></path></svg>
          <span>Diseño UI/UX</span>
        </button>
        <button type="button" class="step-nav-item" data-step="4">
          <span class="step-badge-num">4</span>
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
          <span>Tiempos de Entrega</span>
        </button>
        <button type="button" class="step-nav-item" data-step="5">
          <span class="step-badge-num">5</span>
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span>Resumen &amp; Envío</span>
        </button>
      </nav>

      <!-- Main Layout: Wizard Steps Content + Live Receipt Panel -->
      <div class="cotizador-main-layout">
        <div class="cotizador-steps-content">

          <!-- ================= PASO 1: TIPO DE PROYECTO ================= -->
          <div class="cotizador-step-pane active step-pane" data-step="1">
            <div class="wizard-step-header">
              <h3 class="wizard-step-title">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000080" stroke-width="2.5">
                  <rect x="2" y="3" width="20" height="14" rx="2"></rect>
                  <line x1="8" y1="21" x2="16" y2="21"></line>
                </svg>
                <span>Paso 1: ¿Qué tipo de solución digital deseas construir?</span>
              </h3>
              <p class="wizard-step-desc">Selecciona la base tecnológica principal que mejor se adapte a tu objetivo.</p>
            </div>

            <div class="options-grid grid-2col">
              <!-- Web App / SaaS -->
              <div class="option-select-card project-type-card selected" data-type="webapp">
                <input type="radio" name="project_type" value="webapp" checked>
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="3" width="20" height="14" rx="2"></rect>
                      <line x1="8" y1="21" x2="16" y2="21"></line>
                      <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                  </div>
                  <div>
                    <h4 class="option-title">Web App / SaaS</h4>
                    <span class="option-badge-price">Desde $1,200 USD</span>
                  </div>
                </div>
                <p class="option-info">Plataforma web con usuarios, panel de control, base de datos y modelo de suscripción.</p>
              </div>

              <!-- App Móvil Híbrida -->
              <div class="option-select-card project-type-card" data-type="mobile">
                <input type="radio" name="project_type" value="mobile">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="5" y="2" width="14" height="20" rx="2"></rect>
                      <line x1="12" y1="18" x2="12.01" y2="18"></line>
                    </svg>
                  </div>
                  <div>
                    <h4 class="option-title">App Móvil (iOS &amp; Android)</h4>
                    <span class="option-badge-price">Desde $1,800 USD</span>
                  </div>
                </div>
                <p class="option-info">Aplicación nativa para Android y iOS con Flutter de alto desempeño y notificaciones.</p>
              </div>

              <!-- E-commerce / Tienda -->
              <div class="option-select-card project-type-card" data-type="ecommerce">
                <input type="radio" name="project_type" value="ecommerce">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                    </svg>
                  </div>
                  <div>
                    <h4 class="option-title">E-commerce / Tienda</h4>
                    <span class="option-badge-price">Desde $1,400 USD</span>
                  </div>
                </div>
                <p class="option-info">Catálogo interactivo, pasarelas de pago (Stripe/PayPal), cálculo de envíos y stock.</p>
              </div>

              <!-- ERP / CRM a Medida -->
              <div class="option-select-card project-type-card" data-type="enterprise">
                <input type="radio" name="project_type" value="enterprise">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                      <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                  </div>
                  <div>
                    <h4 class="option-title">ERP / CRM a Medida</h4>
                    <span class="option-badge-price">Desde $2,800 USD</span>
                  </div>
                </div>
                <p class="option-info">Automatización de procesos operativos, logística, facturación y gestión empresarial interna.</p>
              </div>

              <!-- Landing Page Corporativa -->
              <div class="option-select-card project-type-card" data-type="landing">
                <input type="radio" name="project_type" value="landing">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                  </div>
                  <div>
                    <h4 class="option-title">Landing Page Corporativa</h4>
                    <span class="option-badge-price">Desde $450 USD</span>
                  </div>
                </div>
                <p class="option-info">Sitio web de ultra alta conversión, animaciones de vanguardia y optimización SEO pro.</p>
              </div>

              <!-- API & Cloud Backend -->
              <div class="option-select-card project-type-card" data-type="api_cloud">
                <input type="radio" name="project_type" value="api_cloud">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="2" width="20" height="8" rx="2"></rect>
                      <rect x="2" y="14" width="20" height="8" rx="2"></rect>
                    </svg>
                  </div>
                  <div>
                    <h4 class="option-title">API &amp; Cloud Backend</h4>
                    <span class="option-badge-price">Desde $1,500 USD</span>
                  </div>
                </div>
                <p class="option-info">Arquitectura de microservicios escalables, bases de datos optimizadas y APIs REST/GraphQL.</p>
              </div>
            </div>
          </div>

          <!-- ================= PASO 2: FUNCIONALIDADES ================= -->
          <div class="cotizador-step-pane step-pane" data-step="2">
            <div class="wizard-step-header">
              <h3 class="wizard-step-title">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000080" stroke-width="2.5">
                  <line x1="4" y1="21" x2="4" y2="14"></line>
                  <line x1="12" y1="21" x2="12" y2="12"></line>
                  <line x1="20" y1="21" x2="20" y2="16"></line>
                </svg>
                <span>Paso 2: Módulos y Funcionalidades Requeridas</span>
              </h3>
              <p class="wizard-step-desc">Marca las capacidades que debe tener tu plataforma. Puedes seleccionar múltiples módulos.</p>
            </div>

            <div class="options-grid grid-2col">
              <!-- Auth -->
              <div class="option-select-card feature-check-card checked selected" data-feature="auth">
                <input type="checkbox" class="feature-checkbox" checked>
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Autenticación &amp; Roles</h4>
                    <span class="option-badge-price">+$250 USD</span>
                  </div>
                </div>
                <p class="option-info">Registro, login JWT, contraseñas encriptadas y permisos por nivel de usuario.</p>
              </div>

              <!-- Pagos -->
              <div class="option-select-card feature-check-card" data-feature="payments">
                <input type="checkbox" class="feature-checkbox">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Pasarela de Pagos</h4>
                    <span class="option-badge-price">+$300 USD</span>
                  </div>
                </div>
                <p class="option-info">Integración segura con Stripe, PayPal o pasarelas locales con webhooks.</p>
              </div>

              <!-- Dashboard -->
              <div class="option-select-card feature-check-card checked selected" data-feature="dashboard">
                <input type="checkbox" class="feature-checkbox" checked>
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Panel de Métricas / Admin</h4>
                    <span class="option-badge-price">+$400 USD</span>
                  </div>
                </div>
                <p class="option-info">Gráficas dinámicas interactivas, reportes exportables y control de operaciones.</p>
              </div>

              <!-- APIs Externas -->
              <div class="option-select-card feature-check-card" data-feature="api_integration">
                <input type="checkbox" class="feature-checkbox">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Integración de APIs Externas</h4>
                    <span class="option-badge-price">+$350 USD</span>
                  </div>
                </div>
                <p class="option-info">Conexión con CRM, ERP, WhatsApp Cloud API o software contable externo.</p>
              </div>

              <!-- Notificaciones -->
              <div class="option-select-card feature-check-card" data-feature="notifications">
                <input type="checkbox" class="feature-checkbox">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Notificaciones Automatizadas</h4>
                    <span class="option-badge-price">+$200 USD</span>
                  </div>
                </div>
                <p class="option-info">Alertas push móviles, notificaciones por email transaccional y recordatorios.</p>
              </div>

              <!-- Multi-idioma -->
              <div class="option-select-card feature-check-card" data-feature="multilanguage">
                <input type="checkbox" class="feature-checkbox">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Soporte Multi-idioma (i18n)</h4>
                    <span class="option-badge-price">+$200 USD</span>
                  </div>
                </div>
                <p class="option-info">Internacionalización completa (Español, Inglés, etc.) con selector dinámico.</p>
              </div>

              <!-- Inteligencia Artificial -->
              <div class="option-select-card feature-check-card" data-feature="ai_chat">
                <input type="checkbox" class="feature-checkbox">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"></path></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Integración de IA / Chatbot</h4>
                    <span class="option-badge-price">+$550 USD</span>
                  </div>
                </div>
                <p class="option-info">Asistente automatizado inteligente conectado con OpenAI / Claude para atención.</p>
              </div>

              <!-- SEO & Performance Pro -->
              <div class="option-select-card feature-check-card" data-feature="seo_performance">
                <input type="checkbox" class="feature-checkbox">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                  </div>
                  <div>
                    <h4 class="option-title">SEO &amp; Performance Pro</h4>
                    <span class="option-badge-price">+$200 USD</span>
                  </div>
                </div>
                <p class="option-info">Optimización extrema de Core Web Vitals (PageSpeed 95+), meta tags e indexación.</p>
              </div>
            </div>
          </div>

          <!-- ================= PASO 3: DISEÑO UI/UX ================= -->
          <div class="cotizador-step-pane step-pane" data-step="3">
            <div class="wizard-step-header">
              <h3 class="wizard-step-title">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000080" stroke-width="2.5">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polygon points="10 8 16 12 10 16 10 8"></polygon>
                </svg>
                <span>Paso 3: Nivel de Diseño &amp; Experiencia de Usuario (UI/UX)</span>
              </h3>
              <p class="wizard-step-desc">¿Qué grado de personalización visual requiere tu producto digital?</p>
            </div>

            <div class="options-grid">
              <!-- Template Optimizado -->
              <div class="option-select-card design-level-card" data-design="template">
                <input type="radio" name="design_level" value="template">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Diseño Base Optimizado</h4>
                    <span class="option-badge-price">Incluido (+0 USD)</span>
                  </div>
                </div>
                <p class="option-info">Estructura limpia basada en componentes probados de alta conversión y accesibilidad estándar.</p>
              </div>

              <!-- Custom Figma -->
              <div class="option-select-card design-level-card selected" data-design="custom_figma">
                <input type="radio" name="design_level" value="custom_figma" checked>
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Diseño UX/UI Personalizado en Figma</h4>
                    <span class="option-badge-price">Recomendado (+350 USD)</span>
                  </div>
                </div>
                <p class="option-info">Prototipado interactivo exclusivo en Figma para tu marca, wireframes y flujos UX validados antes de programar.</p>
              </div>

              <!-- Premium Motion & 3D -->
              <div class="option-select-card design-level-card" data-design="premium_motion">
                <input type="radio" name="design_level" value="premium_motion">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="m4.93 4.93 4.24 4.24"></path><path d="m14.83 9.17 4.24-4.24"></path></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Experiencia Premium con Micro-animaciones</h4>
                    <span class="option-badge-price">Avanzado (+650 USD)</span>
                  </div>
                </div>
                <p class="option-info">Micro-interacciones avanzadas, efectos de transición fluidos y detalles de diseño de nivel internacional.</p>
              </div>
            </div>
          </div>

          <!-- ================= PASO 4: TIEMPOS DE ENTREGA ================= -->
          <div class="cotizador-step-pane step-pane" data-step="4">
            <div class="wizard-step-header">
              <h3 class="wizard-step-title">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000080" stroke-width="2.5">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 14 14"></polyline>
                </svg>
                <span>Paso 4: Prioridad y Tiempos de Entrega</span>
              </h3>
              <p class="wizard-step-desc">Selecciona la velocidad con la que necesitas el primer lanzamiento funcional (MVP).</p>
            </div>

            <div class="options-grid">
              <!-- Estándar -->
              <div class="option-select-card urgency-card selected" data-urgency="standard">
                <input type="radio" name="urgency" value="standard" checked>
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Ritmo Estándar (Recomendado)</h4>
                    <span class="option-badge-price">Tarifa Normal (1.0x)</span>
                  </div>
                </div>
                <p class="option-info">Sprints ágiles bisemanales con revisiones programadas y pruebas de control de calidad exhaustivas.</p>
              </div>

              <!-- Prioritario -->
              <div class="option-select-card urgency-card" data-urgency="priority">
                <input type="radio" name="urgency" value="priority">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                  </div>
                  <div>
                    <h4 class="option-title">Acelerado (+25% Prioridad)</h4>
                    <span class="option-badge-price">Plazo -25% (1.25x)</span>
                  </div>
                </div>
                <p class="option-info">Asignación de desarrolladores con dedicación prioritaria para reducir el tiempo total de entrega.</p>
              </div>

              <!-- Exprés -->
              <div class="option-select-card urgency-card" data-urgency="express">
                <input type="radio" name="urgency" value="express">
                <div class="option-header-row">
                  <div class="win-inset option-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path></svg>
                  </div>
                  <div>
                    <h4 class="option-title">MVP Exprés / Urgente (+45%)</h4>
                    <span class="option-badge-price">Plazo -50% (1.45x)</span>
                  </div>
                </div>
                <p class="option-info">Horas extendidas y despliegue ultra rápido para lanzamientos con fecha límite inamovible.</p>
              </div>
            </div>
          </div>

          <!-- ================= PASO 5: RESUMEN Y ENVÍO ================= -->
          <div class="cotizador-step-pane step-pane" data-step="5">
            <div class="wizard-step-header">
              <h3 class="wizard-step-title">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000080" stroke-width="2.5">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span>Paso 5: Resumen de tu Proyecto &amp; Registro</span>
              </h3>
              <p class="wizard-step-desc">Revisa el alcance y completa tus datos para recibir la propuesta formal o iniciar la conversación directa por WhatsApp.</p>
            </div>

            <!-- Resumen Sunken Box -->
            <div class="win-inset" style="padding: 12px; background-color: #ffffff; margin-bottom: 12px;">
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 10px; margin-bottom: 10px;">
                <div>
                  <span style="font-size: 0.68rem; font-family: var(--font-mono); color: #6b7280; font-weight: 800; text-transform: uppercase;">Proyecto Base</span>
                  <div id="reviewProject" style="font-size: 0.95rem; font-weight: 800; color: #111827;">-</div>
                </div>
                <div>
                  <span style="font-size: 0.68rem; font-family: var(--font-mono); color: #6b7280; font-weight: 800; text-transform: uppercase;">Nivel de Diseño</span>
                  <div id="reviewDesign" style="font-size: 0.95rem; font-weight: 800; color: #111827;">-</div>
                </div>
                <div>
                  <span style="font-size: 0.68rem; font-family: var(--font-mono); color: #6b7280; font-weight: 800; text-transform: uppercase;">Tiempo Estimado</span>
                  <div id="reviewTime" style="font-size: 0.95rem; font-weight: 800; color: #047857; font-family: var(--font-mono);">-</div>
                </div>
                <div>
                  <span style="font-size: 0.68rem; font-family: var(--font-mono); color: #6b7280; font-weight: 800; text-transform: uppercase;">Inversión Estimada</span>
                  <div id="reviewTotal" style="font-size: 1.1rem; font-weight: 900; color: #000080; font-family: var(--font-mono);">-</div>
                </div>
              </div>

              <div style="border-top: 1px dashed #cbd5e1; padding-top: 8px;">
                <span style="font-size: 0.68rem; font-family: var(--font-mono); color: #6b7280; font-weight: 800; text-transform: uppercase; display: block; margin-bottom: 4px;">Módulos Seleccionados</span>
                <div id="reviewFeatures" style="display: flex; flex-wrap: wrap; gap: 4px;">-</div>
              </div>
            </div>

            <!-- Formulario de Datos del Cliente -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
              <div class="form-group">
                <label for="clientName" class="form-label">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                  <span>Nombre Completo o Empresa *</span>
                </label>
                <input type="text" id="clientName" class="form-control" placeholder="Ej. Carlos Mendoza" required>
              </div>

              <div class="form-group">
                <label for="clientEmail" class="form-label">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                  <span>Correo Electrónico *</span>
                </label>
                <input type="email" id="clientEmail" class="form-control" placeholder="carlos@tuempresa.com" required>
              </div>

              <div class="form-group">
                <label for="clientPhone" class="form-label">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                  <span>Teléfono / WhatsApp *</span>
                </label>
                <input type="tel" id="clientPhone" class="form-control" placeholder="+51 987 654 321" required>
              </div>

              <div class="form-group">
                <label for="clientNotes" class="form-label">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
                  <span>Descripción de la Idea o Metas</span>
                </label>
                <input type="text" id="clientNotes" class="form-control" placeholder="Ej. Plataforma para gestión de citas médicas...">
              </div>
            </div>

            <!-- Botones de Acción Final del Paso 5 -->
            <div style="display: flex; flex-direction: column; gap: 8px; margin-top: 10px;">
              <button type="button" class="win-btn btn-sidebar-whatsapp" id="btnSendWhatsApp" style="padding: 10px; font-size: 0.88rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                <span>Enviar Cotización por WhatsApp con un Clic</span>
              </button>

              <div style="display: flex; gap: 8px;">
                <button type="button" class="win-btn btn-sidebar-save" id="btnSaveQuote" style="flex: 1; padding: 8px;">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                    <polyline points="17 21 17 13 7 13 7 21"></polyline>
                  </svg>
                  <span>Guardar en Base de Datos</span>
                </button>

                <button type="button" class="win-btn" id="btnPrintQuote" style="flex: 1; padding: 8px;">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                  </svg>
                  <span>Imprimir Presupuesto</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Wizard Back / Next Buttons -->
          <div class="wizard-nav-bar">
            <button type="button" class="win-btn" id="btnPrevStep" style="visibility: hidden;">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
              <span>&lt; Paso Anterior</span>
            </button>

            <button type="button" class="win-btn" id="btnNextStep" style="background-color: #dbeafe; color: #1e3a8a; border-color: #ffffff #1e3a8a #1e3a8a #ffffff;">
              <span>Siguiente Paso &gt;</span>
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- Sidebar: Receipt / Properties Window (RESUMEN_FINANCIERO.DAT) -->
        <aside class="win-outset receipt-sidebar-window">
          <!-- Sidebar Titlebar -->
          <div class="win-titlebar" style="background: linear-gradient(90deg, #000080 0%, #1084d0 100%);">
            <div class="win-titlebar-left">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fde047" stroke-width="2.5">
                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                <line x1="6" y1="8" x2="10" y2="8"></line>
              </svg>
              <span>RESUMEN_FINANCIERO.DAT</span>
            </div>
            <span style="font-family: var(--font-mono); font-size: 10px; color: #fde047;">EN VIVO</span>
          </div>

          <!-- Sidebar Body: Sunken White Paper Sheet -->
          <div class="win-inset receipt-sheet">
            <div class="receipt-header-brand">
              <div class="receipt-brand-name">DEVNOVA SOFTWARE STUDIOS</div>
              <div class="receipt-date-id">VALUACIÓN TÉCNICA EN TIEMPO REAL</div>
            </div>

            <!-- Highlight Box -->
            <div class="estimate-highlight-box">
              <span class="estimate-label">Inversión Estimada:</span>
              <div class="estimate-price-value" id="estimateAmount">$1,850 - $2,250</div>
              <div class="estimate-time-chip" id="estimateTime">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                <span>Entrega aprox: 5 semanas</span>
              </div>
            </div>

            <!-- Breakdown List -->
            <div>
              <div class="breakdown-title">Desglose de Conceptos:</div>
              <ul class="breakdown-items-list" id="quoteBreakdownList">
                <!-- Se puebla dinámicamente con JavaScript -->
              </ul>
            </div>

            <!-- Sidebar Actions & Guarantee -->
            <div class="sidebar-actions-cluster">
              <div style="font-size: 0.72rem; color: #4b5563; line-height: 1.4; display: flex; align-items: flex-start; gap: 5px;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" style="flex-shrink: 0; margin-top: 1px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span><strong>Garantía DevNova:</strong> Código 100% propietario, arquitectura documentada y 6 meses de soporte incluidos.</span>
              </div>

              <a href="https://wa.me/{{ config('software_studio.whatsapp_number') }}?text={{ urlencode(config('software_studio.whatsapp_welcome_msg')) }}" 
                 target="_blank" 
                 rel="noreferrer" 
                 class="win-btn btn-sidebar-whatsapp" 
                 style="width: 100%; padding: 6px;">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                <span>Consultar con un Ingeniero</span>
              </a>
            </div>
          </div>

          <div class="win-statusbar">
            <span>SISTEMA: AUTOMATICO</span>
            <span>MONEDA: {{ config('software_studio.currency_code', 'USD') }}</span>
          </div>
        </aside>
      </div>

      <!-- Outer Window Bottom Statusbar -->
      <div class="win-statusbar">
        <span style="display: flex; align-items: center; gap: 5px;">
          <span class="status-ping-dot"></span>
          <span>CALCULADOR EN LÍNEA: ACTIVO</span>
        </span>
        <span style="font-weight: 800; color: #000080;">ESTIMACIÓN DINÁMICA GARANTIZADA</span>
      </div>
    </div>

  </div>
</section>
