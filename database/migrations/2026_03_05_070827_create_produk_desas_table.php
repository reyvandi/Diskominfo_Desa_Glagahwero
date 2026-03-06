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
        Schema::create('produk_desas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori'); // umkm, wisata, pakaian, makanan, adat
            $table->string('sub_kategori')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->integer('urutan')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk_desas');
    }
};
