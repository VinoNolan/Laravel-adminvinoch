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
        Schema::create('jasa', function (Blueprint $table) {
            $table->id();
            $table->string('juduljasa');
            $table->decimal('hargajasa', 10);
            $table->text('deskripsijasa');
            $table->string('gambarjasa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasa');
    }
};
