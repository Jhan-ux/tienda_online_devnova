<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Información de la Empresa / Estudio de Software
    |--------------------------------------------------------------------------
    */
    'app_name' => env('STUDIO_NAME', 'DevNova Software Studios'),
    'slogan' => env('STUDIO_SLOGAN', 'Ingeniería de Software & Soluciones Digitales de Alto Rendimiento'),
    'description' => 'Diseñamos y desarrollamos aplicaciones web, apps móviles y software a medida para startups y empresas en crecimiento.',
    
    // Contacto y WhatsApp
    'whatsapp_number' => env('STUDIO_WHATSAPP', '5215512345678'), // Formato internacional sin '+'
    'whatsapp_welcome_msg' => '¡Hola! Me gustaría cotizar un proyecto de software con DevNova. Aquí están los detalles preliminares:',
    'contact_email' => env('STUDIO_EMAIL', 'contacto@devnovasoftware.com'),
    'contact_phone' => env('STUDIO_PHONE', '+52 55 1234 5678'),
    'location' => 'Ciudad de México / Remoto Global',

    // Moneda
    'currency_symbol' => '$',
    'currency_code' => 'USD',

    // Redes Sociales
    'socials' => [
        'github' => 'https://github.com',
        'linkedin' => 'https://linkedin.com',
        'twitter' => 'https://twitter.com',
        'instagram' => 'https://instagram.com'
    ]
];
