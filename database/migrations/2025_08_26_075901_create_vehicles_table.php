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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('model');
            $table->string('color')->nullable();
            $table->string('plat_no');
            $table->foreignId('user_id')->constrained()->onDate('cascade');
            $table->timestamps();
            $table->softDeletes(); // soft delete 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
