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
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ayah_id')->constrained();
            $table->foreignId('ibu_id')->constrained();
            $table->string('nama_anak');
            $table->date('tanggal_lahir_anak');
            $table->enum('jenis_kelamin', ['L', 'P']); // Tipe data enum untuk jenis kelamin
            $table->enum('keterangan_anak', ['Anak Adopsi', 'Anak Kandung']); // Tipe data enum untuk keterangan anak
            $table->softDeletes(); // untuk membuat penghapusan data sementara
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anaks');
    }
};