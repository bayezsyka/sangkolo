<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('joker'); // Roles: admin, joker
            $table->string('nickname')->nullable();
            $table->string('major')->nullable(); // Jurusan Kuliah
            $table->text('skills')->nullable(); // Keahlian
            $table->boolean('is_approved')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'nickname', 'major', 'skills', 'is_approved']);
        });
    }
};