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
    Schema::create('pengingat_obat', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pengguna_id')->constrained('users')->onDelete('cascade');
    $table->time('waktu_minum');
    $table->string('status_pengingat');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengingat_obat');
    }
};
