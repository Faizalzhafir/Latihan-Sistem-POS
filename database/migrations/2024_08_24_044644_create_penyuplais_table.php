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
        Schema::create('penyuplais', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_name');
            $table->string('telephone');
            $table->string('address');
            $table->string('descriptions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyuplais');
    }
};
