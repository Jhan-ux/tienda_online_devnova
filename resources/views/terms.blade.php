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

      <div style="font-family: var(--font-mono); font-size: 0.75rem; color: #ffffff; background: #000080; padding: 4px 10px; border: 1px solid #ffffff;">
        SISTEMA LEGAL // DOC-TERMS-2026
      </div>
    </div>

    <!-- Main Windows 95 Outset Window -->
    <div class="win-outset" style="background: var(--win-surface); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
      <!-- Window Titlebar -->
      <div class="win-titlebar">
        <div class="win-titlebar-left">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
          </svg>
          <span>TERMINOS_Y_CONDICIONES.TXT - Bloc de notas [DevNova Legal Edition]</span>
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

      <!-- Text Sheet (Inset White Paper) -->
      <div class="win-inset notepad-text-sheet" style="max-height: none; padding: 24px;">
        <div class="legal-doc-content">
          <div class="legal-header">
            <h1 class="legal-title" style="font-size: 1.5rem;">TÉRMINOS Y CONDICIONES DE SERVICIO</h1>
            <p class="legal-meta"><strong>DEVNOVA SOFTWARE STUDIOS</strong> | Documento Ref: DOC-LEG-2026-v2.5</p>
            <p class="legal-meta">Última actualización: Octubre de 2026 | Jurisdicción: Internacional &amp; Comercial</p>
            <hr class="legal-divider">
          </div>

          <section class="legal-section">
            <h3>1. ACEPTACIÓN DE LOS TÉRMINOS</h3>
            <p>
              Al navegar en el portal web de <strong>DevNova Software Studios</strong>, interactuar con el cotizador digital de proyectos, enviar requerimientos técnicos o solicitar propuestas de desarrollo, el usuario (en adelante, "El Cliente") declara haber leído, comprendido y aceptado en su totalidad las cláusulas, deberes y derechos aquí descritos.
            </p>
          </section>

          <section class="legal-section">
            <h3>2. NATURALEZA DE LOS SERVICIOS Y ASESORÍA</h3>
            <p>
              DevNova Software Studios es una firma especializada en ingeniería de software, arquitectura de sistemas en la nube, desarrollo de plataformas web (Laravel, Node.js, Vue, React), aplicaciones móviles (Flutter, Kotlin) y automatizaciones SaaS de alto rendimiento.
            </p>
            <p>
              Nuestros servicios abarcan levantamiento de requerimientos, diseño UI/UX de alta fidelidad, desarrollo frontend/backend, control de calidad (QA), despliegue automatizado en infraestructura cloud y soporte continuo post-lanzamiento.
            </p>
          </section>

          <section class="legal-section">
            <h3>3. ALCANCE Y VALIDEZ DEL COTIZADOR DIGITAL INTERACTIVO</h3>
            <p>
              Las cifras, tiempos y rangos arrojados por nuestro cotizador interactivo representan <strong>estimaciones preliminares y referenciales</strong> basadas en parámetros promedio de mercado y complejidad tecnológica.
            </p>
            <ul>
              <li><strong>No vinculación contractual inmediata:</strong> El cálculo en línea no constituye una oferta comercial irrevocable hasta que un arquitecto de soluciones valide los requerimientos específicos.</li>
              <li><strong>Propuesta Técnica Definitiva (SOW):</strong> La cotización final se formaliza a través de un Documento de Alcance de Trabajo (Statement of Work) con cronograma de sprints y especificaciones técnicas detalladas.</li>
              <li><strong>Vigencia de las Cotizaciones:</strong> Salvo pacto en contrario, las estimaciones guardadas y enviadas mantienen una validez de treinta (30) días calendario.</li>
            </ul>
          </section>

          <section class="legal-section">
            <h3>4. PROPIEDAD INTELECTUAL Y DERECHOS SOBRE EL CÓDIGO FUENTE</h3>
            <p>
              En DevNova Studios creemos en la soberanía tecnológica de nuestros clientes:
            </p>
            <ul>
              <li><strong>Propiedad del Cliente:</strong> Una vez liquidado el importe acordado por el proyecto, el código fuente propietario desarrollado a medida, los assets gráficos y las bases de datos pasan a ser propiedad exclusiva de El Cliente, otorgándole total libertad de uso, modificación y comercialización.</li>
              <li><strong>Componentes Base y Open Source:</strong> Se respetarán las licencias de librerías y frameworks de terceros (como Laravel, PHP, bases de datos o paquetes licenciados bajo MIT/Apache 2.0).</li>
              <li><strong>Portafolio:</strong> Salvo suscripción de acuerdo de confidencialidad estricto (NDA), DevNova se reserva el derecho de citar el proyecto en su portafolio comercial o casos de éxito.</li>
            </ul>
          </section>

          <section class="legal-section">
            <h3>5. CONFIDENCIALIDAD Y PROTECCIÓN DE INFORMACIÓN (NDA)</h3>
            <p>
              Toda información técnica, modelo de negocio, credenciales o datos de usuarios suministrados por El Cliente serán tratados bajo el más riguroso secreto profesional. DevNova Studios ofrece la firma formal de Acuerdos de No Divulgación (NDA) antes de iniciar la fase de descubrimiento o revisión de código legado.
            </p>
          </section>

          <section class="legal-section">
            <h3>6. METODOLOGÍA ÁGIL, ENTREGABLES Y PAGOS</h3>
            <p>
              Los proyectos se ejecutan bajo metodologías ágiles (Scrum/Kanban) con entregas iterativas y demostraciones quincenales:
            </p>
            <ul>
              <li><strong>Estructura de Pago Estándar:</strong> Anticipo del 50% al aprobar la propuesta técnica y 50% contra entrega y despliegue final en producción (o esquema de hitos por sprint en proyectos corporativos).</li>
              <li><strong>Aprobación de Sprints:</strong> El Cliente dispondrá de un período de revisión de cinco (5) días hábiles tras la presentación de cada hito para emitir feedback u observaciones.</li>
              <li><strong>Modificaciones de Alcance:</strong> Toda solicitud de funcionalidades que exceda el alcance pactado inicialmente será presupuestada como un Change Request (adicional) con su respectivo impacto en tiempo y costo.</li>
            </ul>
          </section>

          <section class="legal-section">
            <h3>7. GARANTÍA TÉCNICA Y PERÍODO DE ESTABILIZACIÓN</h3>
            <p>
              Respaldamos la calidad de nuestro código con una <strong>Garantía de Estabilización de seis (6) meses</strong> posteriores al pase a producción. Durante este período, DevNova resolverá sin costo adicional cualquier error (bug) o discrepancia atribuible al desarrollo respecto a los requerimientos aprobados.
            </p>
            <p>
              La garantía no cubre modificaciones realizadas por desarrolladores ajenos a nuestro equipo, fallos en servidores externos o cambios imprevistos en APIs de terceros.
            </p>
          </section>

          <section class="legal-section">
            <h3>8. POLÍTICA DE COOKIES Y TRATAMIENTO DE DATOS</h3>
            <p>
              Este sitio web opera bajo las directrices de nuestra <a href="{{ route('cookies') }}" style="color: #000080; font-weight: 700; text-decoration: underline;">Política de Cookies</a>. Utilizamos cookies esenciales para la seguridad de sesión CSRF y almacenamiento local para memorizar preferencias visuales del usuario. Puedes ajustar tus preferencias en cualquier momento desde el pie de página o menú Inicio.
            </p>
          </section>

          <section class="legal-section">
            <h3>9. CANAL DE ATENCIÓN Y CONTACTO LEGAL</h3>
            <p>
              Para consultas relacionadas con estos Términos o formalización de contratos personalizados:
            </p>
            <p>
              <strong>Correo Legal:</strong> <a href="mailto:{{ config('software_studio.contact_email', 'contacto@devnovasoftware.com') }}">{{ config('software_studio.contact_email', 'contacto@devnovasoftware.com') }}</a><br>
              <strong>WhatsApp Oficial:</strong> +{{ config('software_studio.whatsapp_number', '5215512345678') }}<br>
              <strong>Oficina:</strong> {{ config('software_studio.office_location', 'Ciudad de México / Remoto Global') }}
            </p>
          </section>
        </div>
      </div>

      <!-- Action Footer -->
      <div class="notepad-footer-actions">
        <div style="font-size: 0.72rem; color: #4b5563; font-family: var(--font-mono);">
          <span>Documento verificado digitalmente para el ejercicio 2026</span>
        </div>
        <div style="display: flex; gap: 6px;">
          <button type="button" class="win-btn" onclick="window.print()">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
            <span>Imprimir Documento</span>
          </button>
          <a href="{{ url('/') }}" class="win-btn win-btn-highlight" style="text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
            <span>Aceptar y Volver al Inicio</span>
          </a>
        </div>
      </div>

      <!-- Statusbar -->
      <div class="win-statusbar">
        <span>LÍNEAS: 184 | PALABRAS: 1,420</span>
        <span>FORMATO: TEXTO PLANO ANSI</span>
        <span>DEVNOVA OS COMPLIANCE: 100% OK</span>
      </div>
    </div>
  </div>
</main>
@endsection
