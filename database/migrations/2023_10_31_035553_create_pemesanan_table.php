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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('pesanan');
            $table->integer('quantity');
            $table->decimal('totalharga', 10);
            $table->string('namapembeli');
            $table->string('email');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->text('alamatlengkap');
            $table->string('tipepembayaran');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
