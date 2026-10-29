<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class QuoteController extends Controller
{
    /**
     * Vistas individuales y modulares por sección
     */
    public function index()
    {
        return view('welcome', ['activeSection' => 'hero']);
    }

    public function services()
    {
        return view('welcome', ['activeSection' => 'servicios']);
    }

    public function cotizador()
    {
        return view('welcome', ['activeSection' => 'cotizador']);
    }

    public function portfolio()
    {
        return view('welcome', ['activeSection' => 'portafolio']);
    }

    public function methodology()
    {
        return view('welcome', ['activeSection' => 'metodologia']);
    }

    public function stack()
    {
        return view('welcome', ['activeSection' => 'stack']);
    }

    public function testimonials()
    {
        return view('welcome', ['activeSection' => 'testimonios']);
    }

    public function faqs()
    {
        return view('welcome', ['activeSection' => 'faqs']);
    }

    public function contact(): View
    {
        return view('welcome', ['activeSection' => 'contacto']);
    }

    /**
     * Vista dedicada de Términos y Condiciones
     */
    public function terms(): View
    {
        return view('terms', ['activeSection' => 'terminos']);
    }

    /**
     * Vista dedicada de Política de Cookies
     */
    public function cookiesPolicy(): View
    {
        return view('cookies-policy', ['activeSection' => 'cookies']);
    }

    /**
     * Registrar una cotización en la base de datos
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client.name' => 'required|string|max:255',
            'client.email' => 'nullable|email|max:255',
            'client.phone' => 'nullable|string|max:50',
            'client.notes' => 'nullable|string|max:2000',
            'client.service' => 'nullable|string|max:255',
            'projectType' => 'nullable|string|max:255',
            'features' => 'nullable|array',
            'designLevel' => 'nullable|string|max:255',
            'urgency' => 'nullable|string|max:255',
            'estimatedMin' => 'nullable|numeric',
            'estimatedMax' => 'nullable|numeric',
            'estimatedWeeks' => 'nullable|integer',
            'currency' => 'nullable|string|max:10',
            'isDirectMessage' => 'nullable|boolean',
        ]);

        $quoteCode = 'DN-'.strtoupper(Str::random(6));

        $quote = Quote::create([
            'quote_code' => $quoteCode,
            'client_name' => $request->input('client.name', 'Anónimo'),
            'client_email' => $request->input('client.email'),
            'client_phone' => $request->input('client.phone'),
            'project_type' => $request->input('projectType', $request->input('client.service', 'General')),
            'features' => $request->input('features', []),
            'design_level' => $request->input('designLevel', 'Estándar'),
            'urgency' => $request->input('urgency', 'Normal'),
            'estimated_min' => (int) $request->input('estimatedMin', 0),
            'estimated_max' => (int) $request->input('estimatedMax', 0),
            'estimated_weeks' => (int) $request->input('estimatedWeeks', 0),
            'currency' => $request->input('currency', config('software_studio.currency_code', 'USD')),
            'notes' => $request->input('client.notes'),
            'status' => 'pendiente',
        ]);

        return response()->json([
            'success' => true,
            'quote_id' => $quote->quote_code,
            'message' => 'Cotización registrada correctamente en la base de datos.',
            'quote' => $quote,
        ]);
    }

    /**
     * Panel rápido para consultar cotizaciones registradas
     */
    public function listQuotes()
    {
        $quotes = Quote::latest()->get();

        return response()->json([
            'total' => $quotes->count(),
            'quotes' => $quotes,
        ]);
    }
}
