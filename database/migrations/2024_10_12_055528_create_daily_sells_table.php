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
        Schema::create('daily_sells', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->integer('regular_mb')->default(0);
            $table->integer('special_mb')->default(0);
            $table->integer('chicken_momo_5')->default(0);
            $table->integer('sre_momo_5')->default(0);
            $table->integer('bbq_momo_5')->default(0);
            $table->integer('cheese_momo_5')->default(0);
            $table->integer('m_burger')->default(0);
            $table->integer('r_burger')->default(0);
            $table->integer('c_burger')->default(0);
            $table->integer('s_burger')->default(0);
            $table->integer('chow_mein_11')->default(0);
            $table->integer('chow_mein_12')->default(0);
            $table->integer('chow_mein_13')->default(0);
            $table->integer('s_chow_mein_11')->default(0);
            $table->integer('r_sauce_pasta')->default(0);
            $table->integer('w_sauce_pasta')->default(0);
            $table->integer('c_soup')->default(0);
            $table->integer('t_soup')->default(0);
            $table->integer('m_soup')->default(0);
            $table->integer('c_l_4')->default(0);
            $table->integer('c_w_4')->default(0);
            $table->integer('c_b_4')->default(0);
            $table->integer('c_pop_100')->default(0);
            $table->integer('c_pop_200')->default(0);
            $table->integer('c_pop_250')->default(0);
            $table->integer('french_fry')->default(0);
            $table->integer('potatoe_wings')->default(0);
            $table->integer('k_singara')->default(0);
            $table->integer('m_lemonade')->default(0);
            $table->integer('f_lemonade')->default(0);
            $table->integer('lassi')->default(0);
            $table->integer('cold_coffe')->default(0);
            $table->integer('c_cold_coffe')->default(0);
            $table->integer('o_cold_coffe')->default(0);
            $table->decimal('total_price', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_sells');
    }
};
