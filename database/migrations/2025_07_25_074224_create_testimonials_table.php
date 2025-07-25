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
    Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('customer_name');
        $table->string('customer_origin'); // Asal kota/instansi
        $table->string('service_used'); // Jasa yg digunakan
        $table->text('content'); // Isi testimoni
        $table->string('image_proof')->nullable(); // Path ke gambar bukti screenshot
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
