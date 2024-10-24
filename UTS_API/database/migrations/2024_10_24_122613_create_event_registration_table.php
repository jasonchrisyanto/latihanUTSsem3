<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('EventRegistration', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_event');
            $table->date('tanggal_event');
            $table->string('nomor')->unique();
            $table->string('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('EventRegistration');
    }
};
