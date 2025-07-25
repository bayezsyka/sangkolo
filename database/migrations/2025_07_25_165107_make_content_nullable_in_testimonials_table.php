<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            // Mengubah kolom 'content' agar boleh kosong (nullable)
            $table->text('content')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            // Mengembalikan kolom 'content' agar tidak boleh kosong
            $table->text('content')->nullable(false)->change();
        });
    }
};