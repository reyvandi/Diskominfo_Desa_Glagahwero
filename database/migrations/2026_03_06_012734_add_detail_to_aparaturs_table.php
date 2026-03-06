<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('aparaturs', function (Blueprint $table) {
            $table->string('alamat')->nullable()->after('foto');
            $table->string('pendidikan')->nullable()->after('alamat');
            $table->string('ttl')->nullable()->after('pendidikan');
            $table->string('periode')->nullable()->after('ttl');
            $table->text('deskripsi')->nullable()->after('periode');
        });
    }

    public function down(): void
    {
        Schema::table('aparaturs', function (Blueprint $table) {
            $table->dropColumn(['alamat', 'pendidikan', 'ttl', 'periode', 'deskripsi']);
        });
    }
};
