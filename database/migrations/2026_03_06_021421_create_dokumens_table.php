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
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori'); // apbdes, keuangan, peraturan, perizinan
            $table->string('sub_kategori')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('file')->nullable();       // path file (PDF/DOC/dll)
            $table->string('ukuran')->nullable();     // e.g. "24 MB"
            $table->integer('urutan')->default(0);
            $table->date('tanggal')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};