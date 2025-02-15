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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('width');
            $table->integer('height');
            $table->string('ModelNumber');
            $table->string('Warranty');
            $table->string('Material_1');
            $table->string('Material_2');
            $table->string('Country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
