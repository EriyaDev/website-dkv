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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained()->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained('kelass')->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained()->onDelete('cascade');
            $table->foreignId('ruang_id')->constrained()->onDelete('cascade');
            $table->string('hari', 20);
            $table->foreignId('jam_ke_mulai_id')->constrained('jam_pelajarans')->onDelete('cascade');
            $table->foreignId('jam_ke_selesai_id')->constrained('jam_pelajarans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
