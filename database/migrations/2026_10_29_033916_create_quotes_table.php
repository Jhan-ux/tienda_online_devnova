<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('quote_code', 20)->unique();
            $table->string('client_name');
            $table->string('client_email')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('project_type');
            $table->json('features')->nullable();
            $table->string('design_level')->nullable();
            $table->string('urgency')->nullable();
            $table->unsignedInteger('estimated_min')->default(0);
            $table->unsignedInteger('estimated_max')->default(0);
            $table->unsignedInteger('estimated_weeks')->default(0);
            $table->string('currency', 10)->default('USD');
            $table->text('notes')->nullable();
            $table->string('status', 30)->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
