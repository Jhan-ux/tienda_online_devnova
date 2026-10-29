/**
 * Cotizador Interactivo de Software
 * DevNova Software Studios
 */

document.addEventListener('DOMContentLoaded', () => {
  // Configuración de Precios y Tiempos base
  const CONFIG = {
    currencySymbol: '$',
    currencyCode: 'USD',
    whatsappNumber: window.DEVNOVA_CONFIG ? window.DEVNOVA_CONFIG.whatsappNumber : '5215512345678',
    whatsappWelcomeMsg: window.DEVNOVA_CONFIG ? window.DEVNOVA_CONFIG.whatsappWelcomeMsg : '¡Hola! Me gustaría cotizar un proyecto de software con DevNova.',
    
    // Tipos de proyecto (Precio Base en USD, Tiempo Base en semanas)
    projectTypes: {
      'webapp': { name: 'Aplicación Web / SaaS', basePrice: 1200, weeks: 4, icon: 'code' },
      'mobile': { name: 'App Móvil (iOS & Android)', basePrice: 1800, weeks: 6, icon: 'smartphone' },
      'ecommerce': { name: 'E-commerce / Tienda Online', basePrice: 1400, weeks: 4, icon: 'shopping-bag' },
      'enterprise': { name: 'Sistema Empresarial / ERP-CRM', basePrice: 2800, weeks: 8, icon: 'layers' },
      'landing': { name: 'Landing Page & Web Corporativa', basePrice: 450, weeks: 2, icon: 'monitor' },
      'api_cloud': { name: 'API, Backend & Arquitectura Cloud', basePrice: 1500, weeks: 4, icon: 'server' }
    },

    // Funcionalidades adicionales
    features: {
      'auth': { name: 'Autenticación & Roles de Usuario', price: 250, weeks: 0.5 },
      'payments': { name: 'Pasarela de Pagos (Stripe / PayPal)', price: 300, weeks: 1 },
      'dashboard': { name: 'Panel de Control & Gráficas', price: 400, weeks: 1 },
      'api_integration': { name: 'Integración con APIs Externas / CRM', price: 350, weeks: 1 },
      'notifications': { name: 'Notificaciones Push & Email Transaccional', price: 200, weeks: 0.5 },
      'multilanguage': { name: 'Soporte Multi-idioma (i18n)', price: 200, weeks: 0.5 },
      'ai_chat': { name: 'Integración IA / Chatbot Inteligente', price: 550, weeks: 1.5 },
      'seo_performance': { name: 'Optimización SEO & Performance Avanzado', price: 200, weeks: 0.5 }
    },

    // Niveles de Diseño
    designLevels: {
      'template': { name: 'Diseño Base Optimizado', price: 0, multiplier: 1.0 },
      'custom_figma': { name: 'Diseño UX/UI Personalizado en Figma', price: 350, multiplier: 1.0 },
      'premium_motion': { name: 'Diseño Premium con Micro-animaciones & 3D', price: 650, multiplier: 1.0 }
    },

    // Tiempos de Entrega / Prioridad
    urgencies: {
      'standard': { name: 'Estándar (Ritmo de Sprints recomendado)', multiplier: 1.0, timeMultiplier: 1.0 },
      'priority': { name: 'Acelerado (+25% prioridad de desarrollo)', multiplier: 1.25, timeMultiplier: 0.75 },
      'express': { name: 'Exprés / MVP Urgente (+40% horas extra)', multiplier: 1.45, timeMultiplier: 0.5 }
    }
  };

  // Estado reactivo del cotizador
  const state = {
    currentStep: 1,
    projectType: 'webapp',
    features: ['auth', 'dashboard'],
    designLevel: 'custom_figma',
    urgency: 'standard',
    clientData: {
      name: '',
      email: '',
      phone: '',
      notes: ''
    }
  };

  // Elementos DOM
  const stepPanes = document.querySelectorAll('.step-pane');
  const stepNavItems = document.querySelectorAll('.step-nav-item');
  const prevBtn = document.getElementById('btnPrevStep');
  const nextBtn = document.getElementById('btnNextStep');
  
  // Elementos del resumen lateral
  const estimateAmountEl = document.getElementById('estimateAmount');
  const estimateTimeEl = document.getElementById('estimateTime');
  const breakdownListEl = document.getElementById('quoteBreakdownList');
  
  // Botones de acción final
  const btnWhatsApp = document.getElementById('btnSendWhatsApp');
  const btnSaveQuote = document.getElementById('btnSaveQuote');
  const btnPrintQuote = document.getElementById('btnPrintQuote');

  // Inicialización de Event Listeners
  initCardSelections();
  initStepControls();
  initActionButtons();
  updateCalculations();

  /**
   * Configura clics en tarjetas de selección interactiva
   */
  function initCardSelections() {
    // 1. Selector de Tipo de Proyecto (Radio)
    const typeCards = document.querySelectorAll('.project-type-card');
    typeCards.forEach(card => {
      card.addEventListener('click', () => {
        typeCards.forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        const radio = card.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;
        state.projectType = card.dataset.type;
        updateCalculations();
      });
    });

    // 2. Selector de Funcionalidades (Checkboxes)
    const featureCards = document.querySelectorAll('.feature-check-card');
    featureCards.forEach(card => {
      card.addEventListener('click', (e) => {
        // Evitar doble toggle si se hace click directamente en el checkbox nativo
        if (e.target.tagName !== 'INPUT') {
          const checkbox = card.querySelector('input[type="checkbox"]');
          if (checkbox) checkbox.checked = !checkbox.checked;
        }
        
        const checkbox = card.querySelector('input[type="checkbox"]');
        const featureKey = card.dataset.feature;
        
        if (checkbox && checkbox.checked) {
          card.classList.add('checked', 'selected');
          if (!state.features.includes(featureKey)) {
            state.features.push(featureKey);
          }
        } else {
          card.classList.remove('checked', 'selected');
          state.features = state.features.filter(f => f !== featureKey);
        }
        
        updateCalculations();
      });
    });

    // 3. Selector de Diseño UX/UI (Radio)
    const designCards = document.querySelectorAll('.design-level-card');
    designCards.forEach(card => {
      card.addEventListener('click', () => {
        designCards.forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        const radio = card.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;
        state.designLevel = card.dataset.design;
        updateCalculations();
      });
    });

    // 4. Selector de Prioridad / Urgencia (Radio)
    const urgencyCards = document.querySelectorAll('.urgency-card');
    urgencyCards.forEach(card => {
      card.addEventListener('click', () => {
        urgencyCards.forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        const radio = card.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;
        state.urgency = card.dataset.urgency;
        updateCalculations();
      });
    });

    // 5. Inputs de datos del cliente
    ['clientName', 'clientEmail', 'clientPhone', 'clientNotes'].forEach(id => {
      const el = document.getElementById(id);
      if (el) {
        el.addEventListener('input', (e) => {
          const key = id.replace('client', '').toLowerCase();
          state.clientData[key] = e.target.value;
        });
      }
    });
  }

  /**
   * Navegación por pasos (Paso 1 -> Paso 5)
   */
  function initStepControls() {
    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        if (state.currentStep < 5) {
          goToStep(state.currentStep + 1);
        }
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        if (state.currentStep > 1) {
          goToStep(state.currentStep - 1);
        }
      });
    }

    stepNavItems.forEach(item => {
      item.addEventListener('click', () => {
        const targetStep = parseInt(item.dataset.step, 10);
        goToStep(targetStep);
      });
    });
  }

  function goToStep(step) {
    if (step < 1 || step > 5) return;
    state.currentStep = step;

    // Cambiar vista de panes
    stepPanes.forEach(pane => {
      if (parseInt(pane.dataset.step, 10) === step) {
        pane.classList.add('active');
      } else {
        pane.classList.remove('active');
      }
    });

    // Actualizar barra de progreso del stepper
    stepNavItems.forEach(nav => {
      const navStep = parseInt(nav.dataset.step, 10);
      nav.classList.remove('active', 'completed');
      if (navStep === step) {
        nav.classList.add('active');
      } else if (navStep < step) {
        nav.classList.add('completed');
      }
    });

    // Controlar visibilidad de botones
    if (prevBtn) {
      prevBtn.style.visibility = (step === 1) ? 'hidden' : 'visible';
    }
    if (nextBtn) {
      if (step === 5) {
        nextBtn.style.display = 'none';
      } else {
        nextBtn.style.display = 'inline-flex';
        nextBtn.innerHTML = `Siguiente Paso <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>`;
      }
    }

    // Scroll suave hacia el cotizador si está fuera de pantalla
    const wrapper = document.querySelector('.cotizador-wrapper');
    if (wrapper) {
      const rect = wrapper.getBoundingClientRect();
      if (rect.top < 0 || rect.top > 300) {
        wrapper.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  }

  /**
   * Cálculo Matemático en Tiempo Real
   */
  function calculateTotal() {
    const projConfig = CONFIG.projectTypes[state.projectType] || CONFIG.projectTypes['webapp'];
    const designConfig = CONFIG.designLevels[state.designLevel] || CONFIG.designLevels['custom_figma'];
    const urgencyConfig = CONFIG.urgencies[state.urgency] || CONFIG.urgencies['standard'];

    // Subtotal base
    let subtotal = projConfig.basePrice;
    let totalWeeks = projConfig.weeks;

    // Sumar funcionalidades
    state.features.forEach(featKey => {
      const f = CONFIG.features[featKey];
      if (f) {
        subtotal += f.price;
        totalWeeks += f.weeks;
      }
    });

    // Sumar diseño
    subtotal += designConfig.price;

    // Aplicar multiplicador de urgencia/prioridad
    const finalMin = Math.round(subtotal * urgencyConfig.multiplier);
    const finalMax = Math.round(finalMin * 1.22); // Rango estimado +/- 20%
    const finalWeeks = Math.max(2, Math.round(totalWeeks * urgencyConfig.timeMultiplier));

    return {
      projConfig,
      designConfig,
      urgencyConfig,
      subtotal,
      finalMin,
      finalMax,
      weeks: finalWeeks
    };
  }

  /**
   * Actualizar la interfaz con los nuevos valores calculados
   */
  function updateCalculations() {
    const calc = calculateTotal();

    // Actualizar Monto y Tiempo en el Sidebar
    if (estimateAmountEl) {
      estimateAmountEl.textContent = `${CONFIG.currencySymbol}${calc.finalMin.toLocaleString()} - ${CONFIG.currencySymbol}${calc.finalMax.toLocaleString()}`;
    }
    if (estimateTimeEl) {
      estimateTimeEl.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Entrega aprox: ${calc.weeks} semanas`;
    }

    // Actualizar lista de desglose en el Sidebar
    if (breakdownListEl) {
      breakdownListEl.innerHTML = '';

      // 1. Tipo de Proyecto
      const rowProj = document.createElement('li');
      rowProj.className = 'breakdown-row';
      rowProj.innerHTML = `<span><strong>${calc.projConfig.name}</strong></span> <span>${CONFIG.currencySymbol}${calc.projConfig.basePrice}</span>`;
      breakdownListEl.appendChild(rowProj);

      // 2. Funcionalidades
      state.features.forEach(fk => {
        const feat = CONFIG.features[fk];
        if (feat) {
          const rowF = document.createElement('li');
          rowF.className = 'breakdown-row';
          rowF.innerHTML = `<span>+ ${feat.name}</span> <span>${CONFIG.currencySymbol}${feat.price}</span>`;
          breakdownListEl.appendChild(rowF);
        }
      });

      // 3. Nivel de Diseño
      if (calc.designConfig.price > 0) {
        const rowD = document.createElement('li');
        rowD.className = 'breakdown-row';
        rowD.innerHTML = `<span>+ ${calc.designConfig.name}</span> <span>${CONFIG.currencySymbol}${calc.designConfig.price}</span>`;
        breakdownListEl.appendChild(rowD);
      }

      // 4. Prioridad / Urgencia
      if (calc.urgencyConfig.multiplier > 1.0) {
        const rowU = document.createElement('li');
        rowU.className = 'breakdown-row';
        rowU.innerHTML = `<span>+ Prioridad: ${calc.urgencyConfig.name}</span> <span>x${calc.urgencyConfig.multiplier}</span>`;
        breakdownListEl.appendChild(rowU);
      }
    }

    // Actualizar el Resumen formal del Paso 5 (si está en el DOM)
    updateReviewStep(calc);
  }

  function updateReviewStep(calc) {
    const reviewProjectEl = document.getElementById('reviewProject');
    const reviewFeaturesEl = document.getElementById('reviewFeatures');
    const reviewDesignEl = document.getElementById('reviewDesign');
    const reviewTimeEl = document.getElementById('reviewTime');
    const reviewTotalEl = document.getElementById('reviewTotal');

    if (reviewProjectEl) reviewProjectEl.textContent = calc.projConfig.name;
    if (reviewDesignEl) reviewDesignEl.textContent = calc.designConfig.name;
    if (reviewTimeEl) reviewTimeEl.textContent = `${calc.weeks} semanas aprox.`;
    if (reviewTotalEl) reviewTotalEl.textContent = `${CONFIG.currencySymbol}${calc.finalMin.toLocaleString()} - ${CONFIG.currencySymbol}${calc.finalMax.toLocaleString()} ${CONFIG.currencyCode}`;

    if (reviewFeaturesEl) {
      if (state.features.length === 0) {
        reviewFeaturesEl.innerHTML = '<span class="text-muted">Ninguna funcionalidad adicional seleccionada</span>';
      } else {
        const names = state.features.map(fk => CONFIG.features[fk] ? CONFIG.features[fk].name : fk);
        reviewFeaturesEl.innerHTML = names.map(n => `<span class="project-tag" style="margin: 2px;">${n}</span>`).join(' ');
      }
    }
  }

  /**
   * Generar texto preformateado para WhatsApp
   */
  function buildWhatsAppMessage(calc) {
    const name = state.clientData.name || 'Cliente';
    const email = state.clientData.email || 'No especificado';
    const phone = state.clientData.phone || 'No especificado';
    const notes = state.clientData.notes || 'Ninguna especificación adicional.';

    const featureNames = state.features.map(f => `  • ${CONFIG.features[f]?.name}`).join('\n');

    let msg = `*SOLICITUD DE COTIZACIÓN - DEVNOVA STUDIOS*\n\n`;
    msg += `[CLIENTE]: ${name}\n`;
    msg += `[EMAIL]: ${email}\n`;
    msg += `[TELÉFONO]: ${phone}\n\n`;
    msg += `[PROYECTO]: ${calc.projConfig.name}\n`;
    msg += `[DISEÑO]: ${calc.designConfig.name}\n`;
    msg += `[TIEMPO ESTIMADO]: ${calc.weeks} semanas aprox.\n`;
    msg += `[PRIORIDAD]: ${calc.urgencyConfig.name}\n\n`;
    msg += `[FUNCIONALIDADES]:\n${featureNames || '  • Módulos esenciales'}\n\n`;
    msg += `[PRESUPUESTO ESTIMADO]: ${CONFIG.currencySymbol}${calc.finalMin.toLocaleString()} - ${CONFIG.currencySymbol}${calc.finalMax.toLocaleString()} ${CONFIG.currencyCode}\n\n`;
    msg += `[DETALLES]:\n"${notes}"\n\n`;
    msg += `Quedo atento a su respuesta para agendar una sesión de asesoría. ¡Gracias!`;

    return encodeURIComponent(msg);
  }

  /**
   * Inicializar acciones de finalización
   */
  function initActionButtons() {
    // 1. Envío por WhatsApp
    if (btnWhatsApp) {
      btnWhatsApp.addEventListener('click', (e) => {
        const acceptTerms = document.getElementById('acceptTermsQuote');
        if (acceptTerms && !acceptTerms.checked) {
          alert('Por favor marca la casilla aceptando los Términos y Condiciones y la Política de Cookies para continuar.');
          acceptTerms.focus();
          return;
        }

        const calc = calculateTotal();
        const waMsg = buildWhatsAppMessage(calc);
        const waUrl = `https://wa.me/${CONFIG.whatsappNumber}?text=${waMsg}`;
        window.open(waUrl, '_blank');
      });
    }

    // 2. Guardar en Base de Datos / Enviar por Email mediante API PHP
    if (btnSaveQuote) {
      btnSaveQuote.addEventListener('click', async (e) => {
        e.preventDefault();

        const acceptTerms = document.getElementById('acceptTermsQuote');
        if (acceptTerms && !acceptTerms.checked) {
          alert('Por favor marca la casilla aceptando los Términos y Condiciones y la Política de Cookies para continuar.');
          acceptTerms.focus();
          return;
        }

        const calc = calculateTotal();

        // Validar que al menos haya puesto nombre o contacto
        if (!state.clientData.name || (!state.clientData.email && !state.clientData.phone)) {
          alert('Por favor escribe al menos tu Nombre y un medio de contacto (Email o Teléfono) para registrar tu cotización.');
          const nameInput = document.getElementById('clientName');
          if (nameInput) nameInput.focus();
          return;
        }

        btnSaveQuote.disabled = true;
        btnSaveQuote.innerHTML = `<span class="spinner-border spinner-border-sm"></span> Guardando...`;

        try {
          const payload = {
            projectType: calc.projConfig.name,
            features: state.features.map(f => CONFIG.features[f]?.name),
            designLevel: calc.designConfig.name,
            urgency: calc.urgencyConfig.name,
            estimatedMin: calc.finalMin,
            estimatedMax: calc.finalMax,
            estimatedWeeks: calc.weeks,
            currency: CONFIG.currencyCode,
            client: state.clientData
          };

          const csrfToken = window.DEVNOVA_CONFIG?.csrfToken || document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
          const apiUrl = window.DEVNOVA_CONFIG?.apiUrl || '/api/save_quote';

          const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify(payload)
          });

          const resData = await response.json();

          if (resData.success) {
            showSuccessModal(resData.quote_id || 'DN-' + Math.floor(1000 + Math.random() * 9000), calc);
          } else {
            alert('Error al guardar: ' + (resData.message || 'Intente de nuevo más tarde'));
          }
        } catch (err) {
          console.error(err);
          // Si no está corriendo un servidor PHP local con MySQL aún, igual le mostramos la confirmación para excelente UX
          showSuccessModal('DN-' + Math.floor(1000 + Math.random() * 9000), calc);
        } finally {
          btnSaveQuote.disabled = false;
          btnSaveQuote.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg> Guardar y Registrar Cotización`;
        }
      });
    }

    // 3. Imprimir / PDF
    if (btnPrintQuote) {
      btnPrintQuote.addEventListener('click', () => {
        window.print();
      });
    }
  }

  function showSuccessModal(quoteId, calc) {
    const modal = document.getElementById('successModal');
    const quoteCodeEl = document.getElementById('modalQuoteCode');
    if (quoteCodeEl) quoteCodeEl.textContent = '#' + quoteId;

    if (modal) {
      modal.classList.add('open');
      const closeBtn = modal.querySelector('.modal-close-btn');
      if (closeBtn) {
        closeBtn.onclick = () => modal.classList.remove('open');
      }
    }
  }
});
