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
  Schema::create('dokter', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pengguna_id')->constrained('users')->onDelete('cascade');
    $table->string('spesialisasi');
    $table->string('foto')->nullable();
    $table->string('jadwal_praktek_hari');
    $table->string('jadwal_praktek_waktu');
    $table->string('tempat_praktek');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};
