<!-- COMPONENTE: COTIZADOR INTERACTIVO DE SOFTWARE -->
<section class="section" id="cotizador">
  <div class="container">
    <div class="section-header reveal-on-scroll">
      <span class="section-tag">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <circle cx="12" cy="12" r="10"></circle>
          <path d="M12 6v6l4 2"></path>
        </svg>
        Cotizador Inteligente 2.0
      </span>
      <h2 class="section-title">Calcula tu Inversión en <span class="text-gradient">Tiempo Real</span></h2>
      <p class="section-subtitle">
        Diseñado para brindarte transparencia total. Personaliza la arquitectura de tu software, selecciona los módulos que requieres y obtén un desglose preliminar al instante.
      </p>
    </div>

    <div class="cotizador-wrapper reveal-on-scroll">
      <!-- Stepper / Barra de Progreso Superior -->
      <nav class="cotizador-stepper" aria-label="Pasos de la cotización">
        <button type="button" class="step-nav-item active" data-step="1">
          <span class="step-num">1</span>
          <span>Tipo de Proyecto</span>
        </button>
        <button type="button" class="step-nav-item" data-step="2">
          <span class="step-num">2</span>
          <span>Funcionalidades</span>
        </button>
        <button type="button" class="step-nav-item" data-step="3">
          <span class="step-num">3</span>
          <span>Diseño UI/UX</span>
        </button>
        <button type="button" class="step-nav-item" data-step="4">
          <span class="step-num">4</span>
          <span>Tiempos de Entrega</span>
        </button>
        <button type="button" class="step-nav-item" data-step="5">
          <span class="step-num">5</span>
          <span>Resumen & Envío</span>
        </button>
      </nav>

      <!-- Layout Principal: Contenido de Pasos + Barra Lateral de Resumen -->
      <div class="cotizador-layout">
        <div class="cotizador-steps-content">

          <!-- ================= PASO 1: TIPO DE PROYECTO ================= -->
          <div class="step-pane active" data-step="1">
            <h3 class="step-title">¿Qué tipo de solución digital deseas construir?</h3>
            <p class="step-desc">Selecciona la base tecnológica principal que mejor describa tu necesidad.</p>

            <div class="options-grid-cards">
              <!-- Web App -->
              <div class="option-select-card project-type-card selected" data-type="webapp">
                <input type="radio" name="project_type" value="webapp" checked>
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                  </svg>
                </div>
                <h4 class="option-name">Web App / SaaS</h4>
                <p class="option-info">Plataforma web con usuarios, panel de control, base de datos y modelo por suscripción.</p>
                <span class="option-tag">Desde $1,200 USD</span>
              </div>

              <!-- App Móvil -->
              <div class="option-select-card project-type-card" data-type="mobile">
                <input type="radio" name="project_type" value="mobile">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                    <line x1="12" y1="18" x2="12.01" y2="18"></line>
                  </svg>
                </div>
                <h4 class="option-name">App Móvil Híbrida</h4>
                <p class="option-info">Aplicación nativa para Android y iOS con Flutter / React Native de alto desempeño.</p>
                <span class="option-tag">Desde $1,800 USD</span>
              </div>

              <!-- E-commerce -->
              <div class="option-select-card project-type-card" data-type="ecommerce">
                <input type="radio" name="project_type" value="ecommerce">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                  </svg>
                </div>
                <h4 class="option-name">E-commerce / Tienda</h4>
                <p class="option-info">Catálogo interactivo, pasarelas de pago, cálculo de envíos y control de inventario.</p>
                <span class="option-tag">Desde $1,400 USD</span>
              </div>

              <!-- Sistema Empresarial -->
              <div class="option-select-card project-type-card" data-type="enterprise">
                <input type="radio" name="project_type" value="enterprise">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                    <polyline points="2 17 12 22 22 17"></polyline>
                    <polyline points="2 12 12 17 22 12"></polyline>
                  </svg>
                </div>
                <h4 class="option-name">ERP / CRM a Medida</h4>
                <p class="option-info">Automatización de procesos operativos, logística, facturación y gestión empresarial interna.</p>
                <span class="option-tag">Desde $2,800 USD</span>
              </div>

              <!-- Landing Page Corporativa -->
              <div class="option-select-card project-type-card" data-type="landing">
                <input type="radio" name="project_type" value="landing">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                  </svg>
                </div>
                <h4 class="option-name">Landing Corporativa</h4>
                <p class="option-info">Sitio web de ultra alta conversión, animaciones de vanguardia y optimización SEO pro.</p>
                <span class="option-tag">Desde $450 USD</span>
              </div>

              <!-- API & Cloud -->
              <div class="option-select-card project-type-card" data-type="api_cloud">
                <input type="radio" name="project_type" value="api_cloud">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                    <line x1="6" y1="6" x2="6.01" y2="6"></line>
                    <line x1="6" y1="18" x2="6.01" y2="18"></line>
                  </svg>
                </div>
                <h4 class="option-name">API & Cloud Backend</h4>
                <p class="option-info">Arquitectura de microservicios escalables, bases de datos optimizadas y APIs REST/GraphQL.</p>
                <span class="option-tag">Desde $1,500 USD</span>
              </div>
            </div>
          </div>

          <!-- ================= PASO 2: FUNCIONALIDADES ================= -->
          <div class="step-pane" data-step="2">
            <h3 class="step-title">Módulos y Funcionalidades Requeridas</h3>
            <p class="step-desc">Marca las capacidades que debe tener tu plataforma. Puedes seleccionar múltiples opciones.</p>

            <div class="features-grid-list">
              <!-- Auth -->
              <label class="feature-check-card checked" data-feature="auth">
                <input type="checkbox" class="feature-checkbox" checked>
                <div class="feature-info">
                  <div class="feature-name">Autenticación & Roles</div>
                  <div class="feature-desc">Registro, login JWT, contraseñas seguras y permisos.</div>
                </div>
                <div class="feature-price-badge">+$250</div>
              </label>

              <!-- Pagos -->
              <label class="feature-check-card" data-feature="payments">
                <input type="checkbox" class="feature-checkbox">
                <div class="feature-info">
                  <div class="feature-name">Pasarela de Pagos</div>
                  <div class="feature-desc">Integración con Stripe, PayPal o MercadoPago.</div>
                </div>
                <div class="feature-price-badge">+$300</div>
              </label>

              <!-- Dashboard -->
              <label class="feature-check-card checked" data-feature="dashboard">
                <input type="checkbox" class="feature-checkbox" checked>
                <div class="feature-info">
                  <div class="feature-name">Panel de Métricas / Admin</div>
                  <div class="feature-desc">Gráficas dinámicas, reportes y métricas operativas.</div>
                </div>
                <div class="feature-price-badge">+$400</div>
              </label>

              <!-- APIs Externas -->
              <label class="feature-check-card" data-feature="api_integration">
                <input type="checkbox" class="feature-checkbox">
                <div class="feature-info">
                  <div class="feature-name">Integración de APIs Externas</div>
                  <div class="feature-desc">Conexión con CRM, ERP, WhatsApp API o facturación.</div>
                </div>
                <div class="feature-price-badge">+$350</div>
              </label>

              <!-- Notificaciones -->
              <label class="feature-check-card" data-feature="notifications">
                <input type="checkbox" class="feature-checkbox">
                <div class="feature-info">
                  <div class="feature-name">Notificaciones Automatizadas</div>
                  <div class="feature-desc">Alertas por Push, WhatsApp y emails transaccionales.</div>
                </div>
                <div class="feature-price-badge">+$200</div>
              </label>

              <!-- Multi-idioma -->
              <label class="feature-check-card" data-feature="multilanguage">
                <input type="checkbox" class="feature-checkbox">
                <div class="feature-info">
                  <div class="feature-name">Soporte Multi-idioma</div>
                  <div class="feature-desc">Internacionalización (Español, Inglés, etc.).</div>
                </div>
                <div class="feature-price-badge">+$200</div>
              </label>

              <!-- Inteligencia Artificial -->
              <label class="feature-check-card" data-feature="ai_chat">
                <input type="checkbox" class="feature-checkbox">
                <div class="feature-info">
                  <div class="feature-name">Integración de IA / Chatbot</div>
                  <div class="feature-desc">Asistente automatizado con LLM / embeddings.</div>
                </div>
                <div class="feature-price-badge">+$550</div>
              </label>

              <!-- SEO y Rendimiento -->
              <label class="feature-check-card" data-feature="seo_performance">
                <input type="checkbox" class="feature-checkbox">
                <div class="feature-info">
                  <div class="feature-name">SEO & Performance Pro</div>
                  <div class="feature-desc">Score 95+ en PageSpeed, meta tags y rich snippets.</div>
                </div>
                <div class="feature-price-badge">+$200</div>
              </label>
            </div>
          </div>

          <!-- ================= PASO 3: DISEÑO UI/UX ================= -->
          <div class="step-pane" data-step="3">
            <h3 class="step-title">Nivel de Diseño & Experiencia de Usuario (UX/UI)</h3>
            <p class="step-desc">¿Qué grado de personalización visual requiere la identidad de tu marca?</p>

            <div class="options-grid-cards">
              <!-- Template Optimizado -->
              <div class="option-select-card design-level-card" data-design="template">
                <input type="radio" name="design_level" value="template">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                  </svg>
                </div>
                <h4 class="option-name">Diseño Base Optimizado</h4>
                <p class="option-info">Estructura limpia basada en componentes probados de alta conversión.</p>
                <span class="option-tag">Incluido (+0 USD)</span>
              </div>

              <!-- Custom Figma -->
              <div class="option-select-card design-level-card selected" data-design="custom_figma">
                <input type="radio" name="design_level" value="custom_figma" checked>
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                    <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                    <path d="M2 2l7.586 7.586"></path>
                    <circle cx="11" cy="11" r="2"></circle>
                  </svg>
                </div>
                <h4 class="option-name">Diseño a Medida en Figma</h4>
                <p class="option-info">Prototipado interactivo exclusivo para tu marca, wireframes y flujos UX validados.</p>
                <span class="option-tag">Recomendado (+350 USD)</span>
              </div>

              <!-- Premium Motion & 3D -->
              <div class="option-select-card design-level-card" data-design="premium_motion">
                <input type="radio" name="design_level" value="premium_motion">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polygon points="10 8 16 12 10 16 10 8"></polygon>
                  </svg>
                </div>
                <h4 class="option-name">Experiencia Premium & 3D</h4>
                <p class="option-info">Micro-interacciones avanzadas, efectos de partículas, glassmorphism y elementos interactivos.</p>
                <span class="option-tag">Avanzado (+650 USD)</span>
              </div>
            </div>
          </div>

          <!-- ================= PASO 4: TIEMPOS DE ENTREGA ================= -->
          <div class="step-pane" data-step="4">
            <h3 class="step-title">Prioridad y Tiempos de Entrega</h3>
            <p class="step-desc">Selecciona la velocidad con la que necesitas el primer lanzamiento (MVP).</p>

            <div class="options-grid-cards">
              <!-- Estándar -->
              <div class="option-select-card urgency-card selected" data-urgency="standard">
                <input type="radio" name="urgency" value="standard" checked>
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 14 14"></polyline>
                  </svg>
                </div>
                <h4 class="option-name">Ritmo Estándar</h4>
                <p class="option-info">Sprints ágiles bisemanales con revisiones programadas y pruebas exhaustivas.</p>
                <span class="option-tag">Tarifa Normal (1.0x)</span>
              </div>

              <!-- Prioritario -->
              <div class="option-select-card urgency-card" data-urgency="priority">
                <input type="radio" name="urgency" value="priority">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                  </svg>
                </div>
                <h4 class="option-name">Acelerado / Prioritario</h4>
                <p class="option-info">Asignación de desarrolladores dedicados para reducir el tiempo en un 25%.</p>
                <span class="option-tag">+25% Prioridad</span>
              </div>

              <!-- Exprés -->
              <div class="option-select-card urgency-card" data-urgency="express">
                <input type="radio" name="urgency" value="express">
                <div class="option-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                    <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                  </svg>
                </div>
                <h4 class="option-name">MVP Exprés / Urgente</h4>
                <p class="option-info">Horas extendidas y despliegue rápido para lanzamientos con fecha límite inamovible.</p>
                <span class="option-tag">+45% Fast-Track</span>
              </div>
            </div>
          </div>

          <!-- ================= PASO 5: RESUMEN Y ENVÍO ================= -->
          <div class="step-pane" data-step="5">
            <h3 class="step-title">Resumen de tu Proyecto & Contacto</h3>
            <p class="step-desc">Revisa el alcance y completa tus datos para recibir la propuesta formal o iniciar la conversación directa por WhatsApp.</p>

            <!-- Tarjeta con desglose resumido -->
            <div class="glass-card" style="margin-bottom: 2rem; background: rgba(18, 24, 38, 0.9);">
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.25rem; margin-bottom: 1.5rem;">
                <div>
                  <span style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Proyecto Base</span>
                  <div id="reviewProject" style="font-size: 1.1rem; font-weight: 700; color: #fff;">-</div>
                </div>
                <div>
                  <span style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Nivel de Diseño</span>
                  <div id="reviewDesign" style="font-size: 1.1rem; font-weight: 700; color: #fff;">-</div>
                </div>
                <div>
                  <span style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Tiempo Estimado</span>
                  <div id="reviewTime" style="font-size: 1.1rem; font-weight: 700; color: var(--accent-emerald);">-</div>
                </div>
                <div>
                  <span style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase;">Rango de Inversión</span>
                  <div id="reviewTotal" style="font-size: 1.25rem; font-weight: 800; color: var(--accent-cyan);">-</div>
                </div>
              </div>

              <div>
                <span style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; display: block; margin-bottom: 0.4rem;">Módulos Seleccionados</span>
                <div id="reviewFeatures" style="display: flex; flex-wrap: wrap; gap: 0.4rem;">-</div>
              </div>
            </div>

            <!-- Formulario de Datos del Cliente -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
              <div class="form-group">
                <label for="clientName" class="form-label">Nombre Completo o Empresa *</label>
                <input type="text" id="clientName" class="form-control" placeholder="Ej. Carlos Mendoza" required>
              </div>

              <div class="form-group">
                <label for="clientEmail" class="form-label">Correo Electrónico *</label>
                <input type="email" id="clientEmail" class="form-control" placeholder="carlos@tuempresa.com" required>
              </div>

              <div class="form-group">
                <label for="clientPhone" class="form-label">Teléfono / WhatsApp *</label>
                <input type="tel" id="clientPhone" class="form-control" placeholder="+52 55 1234 5678" required>
              </div>

              <div class="form-group">
                <label for="clientNotes" class="form-label">Breve descripción de tu idea o metas</label>
                <input type="text" id="clientNotes" class="form-control" placeholder="Ej. Plataforma para conectar usuarios con instructores...">
              </div>
            </div>

            <!-- Botones de Acción Final del Paso 5 -->
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 1.5rem;">
              <button type="button" class="btn btn-success btn-lg" id="btnSendWhatsApp" style="flex: 1; min-width: 250px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                Enviar por WhatsApp con un Clic
              </button>

              <button type="button" class="btn btn-primary" id="btnSaveQuote">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                  <polyline points="17 21 17 13 7 13 7 21"></polyline>
                  <polyline points="7 3 7 8 15 8"></polyline>
                </svg>
                Guardar y Registrar Cotización
              </button>

              <button type="button" class="btn btn-secondary" id="btnPrintQuote">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="6 9 6 2 18 2 18 9"></polyline>
                  <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                  <rect x="6" y="14" width="12" height="8"></rect>
                </svg>
                Imprimir / PDF
              </button>
            </div>
          </div>

          <!-- Barra de Navegación Inferior (Anterior / Siguiente) -->
          <div class="step-controls">
            <button type="button" class="btn btn-secondary" id="btnPrevStep" style="visibility: hidden;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
              </svg>
              Paso Anterior
            </button>

            <button type="button" class="btn btn-primary" id="btnNextStep">
              Siguiente Paso
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button>
          </div>
        </div>

        <!-- Barra Lateral de Resumen Dinámico en Tiempo Real -->
        <aside class="cotizador-sidebar">
          <div>
            <h4 class="sidebar-title">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent-primary)" stroke-width="2">
                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                <line x1="6" y1="8" x2="10" y2="8"></line>
                <line x1="6" y1="12" x2="14" y2="12"></line>
                <line x1="6" y1="16" x2="18" y2="16"></line>
              </svg>
              Presupuesto Dinámico
            </h4>

            <div class="estimate-box">
              <div class="estimate-label">Inversión Estimada</div>
              <div class="estimate-amount" id="estimateAmount">$1,850 - $2,250</div>
              <div class="estimate-currency"><?php echo CURRENCY_CODE; ?> • Sin costos ocultos</div>
              <div class="estimate-time" id="estimateTime" style="margin-top: 0.6rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                Entrega aprox: 5 semanas
              </div>
            </div>

            <span style="font-size: 0.85rem; font-weight: 700; color: #e2e8f0; display: block; margin-bottom: 0.6rem;">Desglose de Conceptos:</span>
            <ul class="quote-breakdown-list" id="quoteBreakdownList">
              <!-- Se puebla dinámicamente con JavaScript -->
            </ul>
          </div>

          <div style="border-top: 1px solid var(--glass-border); padding-top: 1.25rem;">
            <div style="font-size: 0.82rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 1rem;">
              <strong style="color: var(--accent-emerald);">✓ Garantía DevNova:</strong> Código 100% de tu propiedad, arquitectura documentada y 6 meses de soporte correctivo incluidos.
            </div>

            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" style="width: 100%;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
              </svg>
              ¿Tienes dudas? Habla con un Arquitecto
            </a>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
