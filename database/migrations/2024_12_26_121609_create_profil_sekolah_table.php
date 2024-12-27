<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('profil_sekolah', function (Blueprint $table) {
        $table->id();
        $table->string('nama_sekolah');
        $table->text('visi');
        $table->text('misi');
        $table->text('sejarah');
        $table->text('struktur_organisasi');
        $table->text('tugas_tanggungjawab');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_sekolah');
    }
};
