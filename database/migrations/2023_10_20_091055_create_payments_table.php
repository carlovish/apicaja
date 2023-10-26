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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('concept');
            $table->double('local_amount');
            $table->dateTime('fecha');
            $table->double('usd_amount');
            $table->double('momo_amount');
            $table->double('pos_amount');
            $table->string('descri');
            $table->string('account');
            $table->double('euro_amount');
            $table->string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
