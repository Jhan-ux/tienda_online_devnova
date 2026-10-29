<?php

/**
 * API Endpoint: Guardar y procesar cotizaciones y solicitudes de contacto
 * DevNova Software Studios
 */
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__.'/../config.php';

// Leer datos enviados por JSON
$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

if (! $data) {
    echo json_encode([
        'success' => false,
        'message' => 'No se recibieron datos válidos.',
    ]);
    exit;
}

$quoteId = 'DN-'.strtoupper(substr(md5(uniqid(rand(), true)), 0, 6));
$timestamp = date('Y-m-d H:i:s');

// Estructurar el registro
$record = [
    'quote_id' => $quoteId,
    'date' => $timestamp,
    'is_direct_message' => isset($data['isDirectMessage']) ? true : false,
    'project_type' => $data['projectType'] ?? ($data['client']['service'] ?? 'General'),
    'features' => $data['features'] ?? [],
    'design_level' => $data['designLevel'] ?? 'Estándar',
    'urgency' => $data['urgency'] ?? 'Normal',
    'estimated_min' => $data['estimatedMin'] ?? 0,
    'estimated_max' => $data['estimatedMax'] ?? 0,
    'estimated_weeks' => $data['estimatedWeeks'] ?? 0,
    'currency' => $data['currency'] ?? 'USD',
    'client' => [
        'name' => htmlspecialchars($data['client']['name'] ?? 'Anónimo'),
        'email' => htmlspecialchars($data['client']['email'] ?? ''),
        'phone' => htmlspecialchars($data['client']['phone'] ?? ''),
        'notes' => htmlspecialchars($data['client']['notes'] ?? ''),
    ],
];

// Almacenar en archivo JSON local de respaldo en data/quotes.json
$storageDir = __DIR__.'/../data';
if (! is_dir($storageDir)) {
    mkdir($storageDir, 0755, true);
}

$storageFile = $storageDir.'/quotes.json';
$existingQuotes = [];

if (file_exists($storageFile)) {
    $fileContent = file_get_contents($storageFile);
    $existingQuotes = json_decode($fileContent, true) ?? [];
}

// Agregar al inicio
array_unshift($existingQuotes, $record);

// Guardar los datos de manera atómica
$saved = file_put_contents($storageFile, json_encode($existingQuotes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

if ($saved !== false) {
    echo json_encode([
        'success' => true,
        'quote_id' => $quoteId,
        'message' => 'Cotización registrada correctamente.',
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al escribir el archivo de almacenamiento.',
    ]);
}
