<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('faskes', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nama_pengelola');
            $table->text('alamat');
            $table->string('website');
            $table->string('email');
            $table->foreignId('kabkota_id')->constrained('kabkota')->onDelete('cascade');
            $table->integer('rating');
            $table->double('latitude');
            $table->double('longitude');
            $table->foreignId('jenis_faskes_id')->constrained('jenis_faskes')->onDelete('cascade');
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faskes');
    }
};
