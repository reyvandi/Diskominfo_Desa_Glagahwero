<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil_desas', function (Blueprint $table) {
            $table->id();
            $table->text('visi');
            $table->json('misi'); // array misi
            $table->longText('sejarah');
            $table->string('bagan')->nullable(); // path gambar bagan
            $table->string('periode')->nullable(); // contoh: 2022 - 2029
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil_desas');
    }
};
