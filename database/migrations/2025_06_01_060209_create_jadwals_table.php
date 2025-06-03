<?php

use App\Models\Guru;
use App\Models\JamPelajaran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Ruang;
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
            // $table->foreignId('guru_id')->constrained()->onDelete('cascade');
            // $table->foreignId('kelas_id')->constrained('kelass')->onDelete('cascade');
            // $table->foreignId('mapel_id')->constrained()->onDelete('cascade');
            // $table->foreignId('ruang_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Guru::class);
            $table->foreignIdFor(Kelas::class);
            $table->foreignIdFor(Mapel::class);
            $table->foreignIdFor(Ruang::class);
            $table->foreignIdFor(JamPelajaran::class);
            $table->string('hari', 20);
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
