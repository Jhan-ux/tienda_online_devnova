# 🚀 DevNova Studios - Plataforma Web en Laravel

Sitio web oficial de alta conversión para estudio / agencia de desarrollo de software, desarrollado con **Laravel 13**, arquitectura **MVC**, vistas con **Blade**, base de datos mediante **Eloquent ORM** y un **Cotizador Interactivo de Presupuestos** en tiempo real.

---

## 📂 Arquitectura del Proyecto en Laravel

```
tienda de cotizaciones/
├── app/
│   ├── Http/Controllers/
│   │   └── QuoteController.php    # Controlador: renderiza la web y guarda cotizaciones
│   └── Models/
│       └── Quote.php              # Modelo Eloquent para cotizaciones y prospectos
├── config/
│   └── software_studio.php        # Configuración central (WhatsApp, marca, moneda, emails)
├── database/
│   ├── migrations/
│   │   └── ...create_quotes_table.php # Migración con el esquema de cotizaciones
│   └── database.sqlite            # Base de datos predeterminada lista para usar
├── public/
│   └── assets/                    # Hojas de estilo CSS y scripts JS del cotizador
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php      # Plantilla maestra con navbar, footer y modales
│       ├── partials/
│       │   └── cotizador.blade.php# Componente interactivo del cotizador paso a paso
│       └── welcome.blade.php      # Página principal (Hero, Servicios, Stack, FAQs)
├── routes/
│   └── web.php                    # Rutas web y API de Laravel
└── .env                           # Variables de entorno y configuración
```

---

## ⚡ Cómo Ejecutar la Aplicación

### 1. Iniciar el Servidor de Laravel
Abre una terminal en esta carpeta y ejecuta:
```bash
php artisan serve
```
El sitio estará disponible de inmediato en:
👉 **[http://localhost:8000/](http://localhost:8000/)**

### 2. Acceso Directo al Cotizador
👉 **[http://localhost:8000/#cotizador](http://localhost:8000/#cotizador)**

### 3. Consultar Cotizaciones Guardadas
Puedes consultar todas las cotizaciones registradas por los clientes vía API JSON en:
👉 **[http://localhost:8000/api/quotes](http://localhost:8000/api/quotes)**

---

## ⚙️ Personalización

1. **Datos de Contacto y WhatsApp:**
   En [`config/software_studio.php`](file:///c:/xampp/htdocs/tienda%20de%20cotizaciones/config/software_studio.php) o en tu archivo [`.env`](file:///c:/xampp/htdocs/tienda%20de%20cotizaciones/.env):
   ```env
   STUDIO_NAME="DevNova Software Studios"
   STUDIO_WHATSAPP="5215512345678"
   ```

2. **Precios y Módulos del Cotizador:**
   En [`public/assets/js/cotizador.js`](file:///c:/xampp/htdocs/tienda%20de%20cotizaciones/public/assets/js/cotizador.js), puedes modificar el objeto `CONFIG` con tus tarifas personalizadas en segundos.

3. **Base de Datos:**
   Viene configurado por defecto con **SQLite** para que funcione sin dependencias externas. Si prefieres usar **MySQL** con XAMPP, simplemente ajusta en [`.env`](file:///c:/xampp/htdocs/tienda%20de%20cotizaciones/.env):
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tienda_cotizaciones
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   Y luego corre:
   ```bash
   php artisan migrate
   ```
