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
        Schema::table('produk_desas', function (Blueprint $table) {
            $table->string('lokasi')->nullable()->after('foto');
            $table->string('whatsapp')->nullable()->after('lokasi');
        });
    }

    public function down(): void
    {
        Schema::table('produk_desas', function (Blueprint $table) {
            $table->dropColumn(['lokasi', 'whatsapp']);
        });
    }
};
