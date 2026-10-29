<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

// Rutas de Vistas por Secciones del Sistema
Route::get('/', [QuoteController::class, 'index'])->name('home');
Route::get('/servicios', [QuoteController::class, 'services'])->name('services');
Route::get('/cotizador', [QuoteController::class, 'cotizador'])->name('cotizador');
Route::get('/proyectos', [QuoteController::class, 'portfolio'])->name('portfolio');
Route::get('/portafolio', [QuoteController::class, 'portfolio']);
Route::get('/metodologia', [QuoteController::class, 'methodology'])->name('methodology');
Route::get('/stack', [QuoteController::class, 'stack'])->name('stack');
Route::get('/testimonios', [QuoteController::class, 'testimonials'])->name('testimonials');
Route::get('/ayuda', [QuoteController::class, 'faqs'])->name('faqs');
Route::get('/contacto', [QuoteController::class, 'contact'])->name('contact');
Route::get('/terminos', [QuoteController::class, 'terms'])->name('terms');
Route::get('/terminos-y-condiciones', [QuoteController::class, 'terms']);
Route::get('/cookies', [QuoteController::class, 'cookiesPolicy'])->name('cookies');
Route::get('/politica-de-cookies', [QuoteController::class, 'cookiesPolicy']);

// Rutas API de Cotizaciones
Route::post('/api/save_quote', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/api/quotes', [QuoteController::class, 'listQuotes'])->name('quote.list');
