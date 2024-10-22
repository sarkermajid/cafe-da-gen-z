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
        Schema::create('daily_expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('daily_market_id');
            $table->string('date')->nullable();
            $table->integer('chicken_q')->nullable();
            $table->integer('tomato_sauce_q')->nullable();
            $table->integer('chili_sauce_q')->nullable();
            $table->integer('burger_bun_q')->nullable();
            $table->integer('oil_q')->nullable();
            $table->integer('milk_powder_q')->nullable();
            $table->integer('chicken_powder_q')->nullable();
            $table->integer('garam_masala_q')->nullable();
            $table->integer('butter_q')->nullable();
            $table->integer('oregano_q')->nullable();
            $table->integer('sugar_q')->nullable();
            $table->integer('vegetable_q')->nullable();
            $table->integer('fish_sauce_q')->nullable();
            $table->integer('bbq_sauce_q')->nullable();
            $table->integer('soya_sauce_q')->nullable();
            $table->integer('cocoa_powder_q')->nullable();
            $table->integer('choco_syrup_q')->nullable();
            $table->integer('gas_q')->nullable();
            $table->integer('mushroom_q')->nullable();
            $table->integer('black_olives_q')->nullable();
            $table->integer('sausage_q')->nullable();
            $table->integer('chicken_ball_q')->nullable();
            $table->integer('momo_sheet_q')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_expenses');
    }
};
