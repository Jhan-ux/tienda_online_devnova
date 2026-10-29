/**
 * Scripts principales del sitio web - Estética Windows 95 Retro OS
 * DevNova Software Studios
 */

document.addEventListener('DOMContentLoaded', () => {
  // ==========================================================================
  // 1. WEB AUDIO API SYNTHESIZER FOR RETRO SFX (Mechanical Click Sound)
  // ==========================================================================
  let audioCtx = null;
  let sfxEnabled = localStorage.getItem('retro_sfx_enabled') !== 'false'; // default true

  function getAudioContext() {
    if (!audioCtx && (window.AudioContext || window.webkitAudioContext)) {
      audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    }
    if (audioCtx && audioCtx.state === 'suspended') {
      audioCtx.resume();
    }
    return audioCtx;
  }

  function playRetroClick(frequency = 750, type = 'square', duration = 0.035) {
    if (!sfxEnabled) return;
    try {
      const ctx = getAudioContext();
      if (!ctx) return;
      const osc = ctx.createOscillator();
      const gain = ctx.createGain();

      osc.type = type;
      osc.frequency.setValueAtTime(frequency, ctx.currentTime);
      osc.frequency.exponentialRampToValueAtTime(150, ctx.currentTime + duration);

      gain.gain.setValueAtTime(0.08, ctx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + duration);

      osc.connect(gain);
      gain.connect(ctx.destination);

      osc.start();
      osc.stop(ctx.currentTime + duration);
    } catch (e) {
      // Audio not permitted or supported
    }
  }

  // Expose sound player globally for cotizador.js
  window.playRetroClick = playRetroClick;

  // Bind clicks to all retro buttons and interactive cards
  document.addEventListener('click', (e) => {
    const target = e.target.closest('.win-btn, .step-nav-item, .option-select-card, .nav-link-btn, .faq-question, .filter-btn, .start-menu-item, .win-control-btn');
    if (target) {
      playRetroClick();
    }
  });

  // SFX Toggle buttons
  const sfxToggleBtns = [document.getElementById('toggleSfx'), document.getElementById('trayToggleSfx')].filter(Boolean);
  function updateSfxUI() {
    sfxToggleBtns.forEach(btn => {
      const label = btn.querySelector('.sfx-label');
      if (label) {
        label.textContent = sfxEnabled ? 'SFX: ON' : 'SFX: OFF';
      }
      btn.title = sfxEnabled ? 'Efectos de sonido: Activados' : 'Efectos de sonido: Desactivados';
      if (sfxEnabled) {
        btn.classList.remove('win-btn-pressed');
      } else {
        btn.classList.add('win-btn-pressed');
      }
    });
  }
  updateSfxUI();

  sfxToggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      sfxEnabled = !sfxEnabled;
      localStorage.setItem('retro_sfx_enabled', sfxEnabled ? 'true' : 'false');
      updateSfxUI();
      if (sfxEnabled) playRetroClick(900);
    });
  });

  // ==========================================================================
  // 2. CRT SCANLINES OVERLAY TOGGLE
  // ==========================================================================
  const crtOverlay = document.getElementById('crtOverlay');
  let crtEnabled = localStorage.getItem('retro_crt_enabled') === 'true'; // default false (pantalla nítida y brillante)

  function updateCrtUI() {
    if (crtOverlay) {
      if (crtEnabled) {
        crtOverlay.classList.remove('disabled');
      } else {
        crtOverlay.classList.add('disabled');
      }
    }
    const crtBtns = [document.getElementById('toggleCrt'), document.getElementById('trayToggleCrt')].filter(Boolean);
    crtBtns.forEach(btn => {
      const label = btn.querySelector('.crt-label');
      if (label) {
        label.textContent = crtEnabled ? 'CRT: ON' : 'CRT: OFF';
      }
      btn.title = crtEnabled ? 'Efecto Monitor CRT: Activado' : 'Efecto Monitor CRT: Desactivado';
      if (crtEnabled) {
        btn.classList.remove('win-btn-pressed');
      } else {
        btn.classList.add('win-btn-pressed');
      }
    });
  }
  updateCrtUI();

  const crtBtns = [document.getElementById('toggleCrt'), document.getElementById('trayToggleCrt')].filter(Boolean);
  crtBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      crtEnabled = !crtEnabled;
      localStorage.setItem('retro_crt_enabled', crtEnabled ? 'true' : 'false');
      updateCrtUI();
    });
  });

  // ==========================================================================
  // 3. WINDOWS 95 TASKBAR LIVE CLOCK
  // ==========================================================================
  const taskbarClock = document.getElementById('taskbarClock');
  function updateClock() {
    if (!taskbarClock) return;
    const now = new Date();
    let hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12 || 12;
    taskbarClock.textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
  }
  updateClock();
  setInterval(updateClock, 1000);

  // ==========================================================================
  // 4. WINDOWS 95 START MENU POPUP
  // ==========================================================================
  const startBtn = document.getElementById('taskbarStartBtn');
  const startMenu = document.getElementById('winStartMenu');

  if (startBtn && startMenu) {
    startBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = startMenu.classList.toggle('open');
      startBtn.classList.toggle('active', isOpen);
    });

    document.addEventListener('click', (e) => {
      if (!startMenu.contains(e.target) && !startBtn.contains(e.target)) {
        startMenu.classList.remove('open');
        startBtn.classList.remove('active');
      }
    });

    startMenu.querySelectorAll('.start-menu-item').forEach(item => {
      item.addEventListener('click', () => {
        startMenu.classList.remove('open');
        startBtn.classList.remove('active');
      });
    });
  }

  // ==========================================================================
  // 5. MOBILE NAVIGATION MENU
  // ==========================================================================
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileNavPanel = document.getElementById('mobileNavPanel');

  if (mobileToggle && mobileNavPanel) {
    mobileToggle.addEventListener('click', () => {
      mobileNavPanel.classList.toggle('open');
      mobileToggle.classList.toggle('win-btn-pressed');
    });

    mobileNavPanel.querySelectorAll('.win-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        mobileNavPanel.classList.remove('open');
        mobileToggle.classList.remove('win-btn-pressed');
      });
    });
  }

  // ==========================================================================
  // 6. SCROLL REVEAL OBSERVER
  // ==========================================================================
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  if ('IntersectionObserver' in window && revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -20px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add('revealed'));
  }

  // ==========================================================================
  // 7. FAQS ACCORDION (WinHelp Collapsible Topics)
  // ==========================================================================
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question');
    const toggleIcon = item.querySelector('.faq-toggle-icon');
    if (questionBtn) {
      questionBtn.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        // Cerrar otros
        faqItems.forEach(other => {
          other.classList.remove('active');
          const otherIcon = other.querySelector('.faq-toggle-icon');
          if (otherIcon) otherIcon.textContent = '[+]';
        });

        if (!isActive) {
          item.classList.add('active');
          if (toggleIcon) toggleIcon.textContent = '[-]';
        } else {
          if (toggleIcon) toggleIcon.textContent = '[+]';
        }
      });
    }
  });

  // ==========================================================================
  // 8. HERO SYSTEM METRICS COUNTERS
  // ==========================================================================
  const metricValues = document.querySelectorAll('.metric-number');
  if ('IntersectionObserver' in window) {
    let animated = false;
    const heroObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !animated) {
          animated = true;
          metricValues.forEach(valEl => {
            const target = parseInt(valEl.dataset.target, 10);
            if (!isNaN(target)) {
              let count = 0;
              const duration = 1200;
              const stepTime = 25;
              const step = Math.ceil(target / (duration / stepTime));
              const timer = setInterval(() => {
                count += step;
                if (count >= target) {
                  count = target;
                  clearInterval(timer);
                }
                valEl.textContent = `${count}${valEl.dataset.suffix || ''}`;
              }, stepTime);
            }
          });
        }
      });
    }, { threshold: 0.3 });

    const heroSection = document.getElementById('hero');
    if (heroSection) heroObserver.observe(heroSection);
  }

  // ==========================================================================
  // 9. CONTACT FORM SUBMISSION (DIAL-UP NETWORKING)
  // ==========================================================================
  const contactForm = document.getElementById('mainContactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;

      submitBtn.disabled = true;
      submitBtn.innerHTML = `<span>ENVIANDO PAQUETES...</span>`;

      const formData = new FormData(contactForm);
      const data = Object.fromEntries(formData.entries());

      try {
        const csrfToken = window.DEVNOVA_CONFIG?.csrfToken || document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
        const apiUrl = window.DEVNOVA_CONFIG?.apiUrl || '/api/save_quote';

        const res = await fetch(apiUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': csrfToken
          },
          body: JSON.stringify({
            isDirectMessage: true,
            client: {
              name: data.name,
              email: data.email,
              phone: data.phone,
              service: data.service,
              notes: data.message
            }
          })
        });

        alert('[CONEXION EXITOSA]\nTu mensaje ha sido recibido con exito por DevNova Studios. Te contactaremos a la brevedad.');
        contactForm.reset();
      } catch (err) {
        console.error(err);
        alert('[CONEXION REALIZADA]\nTu solicitud se ha transmitido. Nos comunicaremos contigo en breve.');
        contactForm.reset();
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    });
  }

  // ==========================================================================
  // 10. RESTART ANIMATION / CLEAR CONSOLE BUTTONS
  // ==========================================================================
  const btnRestartTerm = document.getElementById('btnRestartTerm');
  if (btnRestartTerm) {
    btnRestartTerm.addEventListener('click', () => {
      const termLogs = document.getElementById('termOutputLogs');
      if (termLogs) {
        termLogs.innerHTML = `
          <div class="terminal-dim">Microsoft(R) Windows 95 - Developer Environment [Version 4.00.950]<br>Iniciando entorno empresarial DevNova Studios...</div>
          <div class="terminal-line"><span class="term-prompt">$</span> <span class="term-cmd">php artisan serve --port=8000</span></div>
          <div class="term-output">> Laravel 13.39.0 Engine: OK</div>
          <div class="term-output">> Cotizador Interactivo 2.0: ACTIVO</div>
          <div class="term-output">> Base de Datos: SQLite / MySQL Sincronizada</div>
          <div class="term-output term-success">> Uptime: 99.9% | Calidad: 100% Garantizada</div>
          <div class="terminal-line" style="margin-top: 8px;"><span class="term-prompt">$</span> <span class="term-cmd">system.ready()</span><span class="term-cursor"></span></div>
        `;
      }
    });
  }

  const btnCopyTerm = document.getElementById('btnCopyTerm');
  if (btnCopyTerm) {
    btnCopyTerm.addEventListener('click', () => {
      const termText = "Microsoft Windows 95 DevNova Studios\nLaravel 13 Engine: OK\nCotizador Interactivo: ACTIVO";
      navigator.clipboard.writeText(termText).then(() => {
        alert('[PORTAPAPELES]\nTexto de terminal copiado con exito.');
      });
    });
  }

  // ==========================================================================
  // 11. DESKTOP SECTION WORKSPACE MANAGER (Windows Mode / Sections Switcher)
  // ==========================================================================
  const workspace = document.getElementById('mainContent');
  const sectionPanes = document.querySelectorAll('.os-section-pane');
  const activeTitleTag = document.getElementById('activeWindowTitle');
  const toggleViewBtn = document.getElementById('toggleViewMode');

  const sectionNames = {
    'hero': 'INICIO',
    'servicios': 'SERVICIOS.EXE',
    'cotizador': 'COTIZADOR.EXE',
    'portafolio': 'PROYECTOS.DIR',
    'metodologia': 'METODOLOGIA.SYS',
    'stack': 'STACK.CFG',
    'testimonios': 'REVIEWS.LOG',
    'faqs': 'WINHELP32.HLP',
    'contacto': 'CONTACTO.EXE'
  };

  let currentViewMode = localStorage.getItem('retro_view_mode') || 'full-screen-mode'; // default: full-screen-mode

  function setViewMode(mode) {
    currentViewMode = mode;
    localStorage.setItem('retro_view_mode', mode);
    if (workspace) {
      workspace.classList.remove('full-screen-mode', 'continuous-mode');
      workspace.classList.add(mode);
    }
    if (toggleViewBtn) {
      const label = toggleViewBtn.querySelector('.viewmode-label');
      if (label) {
        label.textContent = mode === 'full-screen-mode' ? 'SECCIONES' : 'CONTINUO';
      }
      toggleViewBtn.classList.toggle('win-btn-pressed', mode === 'continuous-mode');
    }
  }

  function activateSection(targetId, updateHash = true) {
    if (!targetId) return;
    targetId = targetId.replace('#', '');
    const targetPane = document.getElementById(targetId) || document.querySelector(`[data-section="${targetId}"]`);
    if (!targetPane) return;

    // In full-screen mode, show only active section
    if (workspace && workspace.classList.contains('full-screen-mode')) {
      sectionPanes.forEach(pane => pane.classList.remove('active-section'));
      targetPane.classList.add('active-section');
      window.scrollTo({ top: 0, behavior: 'smooth' });
    } else {
      // In continuous mode, scroll to the section
      targetPane.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // Update active state on navigation triggers
    document.querySelectorAll('.section-nav-trigger, .nav-link-btn, .taskbar-app-tab').forEach(el => {
      const elTarget = (el.dataset.target || el.getAttribute('href') || '').replace('#', '');
      const isActive = elTarget === targetId;
      el.classList.toggle('active', isActive);
      if (el.classList.contains('taskbar-app-tab')) {
        el.classList.toggle('win-btn-pressed', isActive);
      }
    });

    // Update titlebar indicator
    if (activeTitleTag) {
      activeTitleTag.textContent = `[ ${sectionNames[targetId] || targetId.toUpperCase()} ]`;
    }

    // Update bottom taskbar active app label
    const taskbarLabel = document.getElementById('taskbarActiveAppLabel');
    if (taskbarLabel) {
      taskbarLabel.textContent = `DevNova - ${sectionNames[targetId] || targetId.toUpperCase()}`;
    }

    if (updateHash && window.location.hash !== `#${targetId}`) {
      history.pushState(null, '', `#${targetId}`);
    }
  }

  // Taskbar active app tab click
  const taskbarAppTab = document.getElementById('taskbarActiveAppTab');
  if (taskbarAppTab) {
    taskbarAppTab.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Bind clicks to all triggers
  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('.section-nav-trigger');
    if (trigger) {
      const target = trigger.dataset.target || (trigger.getAttribute('href') || '').replace('#', '');
      if (target && document.getElementById(target)) {
        e.preventDefault();
        activateSection(target, true);
        if (typeof playRetroClick === 'function') playRetroClick(850);
      }
    }
  });

  // Listen for browser back / forward
  window.addEventListener('hashchange', () => {
    const hash = window.location.hash.replace('#', '');
    if (hash && document.getElementById(hash)) {
      activateSection(hash, false);
    }
  });

  // Toggle View Mode Button
  if (toggleViewBtn) {
    toggleViewBtn.addEventListener('click', () => {
      const nextMode = currentViewMode === 'full-screen-mode' ? 'continuous-mode' : 'full-screen-mode';
      setViewMode(nextMode);
      if (nextMode === 'full-screen-mode') {
        const hash = window.location.hash.replace('#', '') || 'hero';
        activateSection(hash, false);
      }
    });
  }

  // Initialize view mode & initial section
  setViewMode(currentViewMode);
  const initialHash = window.location.hash.replace('#', '') || window.DEVNOVA_CONFIG?.activeSection || 'hero';
  activateSection(initialHash, false);
});
