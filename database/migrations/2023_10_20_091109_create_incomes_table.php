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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('concept');
            $table->double('local_amount');
            $table->dateTime('date');
            $table->double('usd_amount')->default(0);
            $table->double('momo_amount')->default(0);
            $table->double('pos_amount')->default(0);
            $table->string('descri')->default(null);
            $table->string('account');
            $table->double('euro_amount')->default(0);
            $table->string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
