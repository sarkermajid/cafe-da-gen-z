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
        Schema::create('menu_prices', function (Blueprint $table) {
            $table->id();
            $table->string('regular_mb')->default(0);
            $table->string('special_mb')->default(0);
            $table->string('chicken_momo_5')->default(0);
            $table->string('sre_momo_5')->default(0);
            $table->string('bbq_momo_5')->default(0);
            $table->string('cheese_momo_5')->default(0);
            $table->string('m_burger')->default(0);
            $table->string('r_burger')->default(0);
            $table->string('c_burger')->default(0);
            $table->string('s_burger')->default(0);
            $table->string('chow_mein_11')->default(0);
            $table->string('chow_mein_12')->default(0);
            $table->string('chow_mein_13')->default(0);
            $table->string('s_chow_mein_11')->default(0);
            $table->string('r_sauce_pasta')->default(0);
            $table->string('w_sauce_pasta')->default(0);
            $table->string('c_soup')->default(0);
            $table->string('t_soup')->default(0);
            $table->string('m_soup')->default(0);
            $table->string('c_l_4')->default(0);
            $table->string('c_w_4')->default(0);
            $table->string('c_b_4')->default(0);
            $table->string('c_pop_100')->default(0);
            $table->string('c_pop_200')->default(0);
            $table->string('c_pop_250')->default(0);
            $table->string('french_fry')->default(0);
            $table->string('potatoe_wings')->default(0);
            $table->string('k_singara')->default(0);
            $table->string('m_lemonade')->default(0);
            $table->string('f_lemonade')->default(0);
            $table->string('lassi')->default(0);
            $table->string('cold_coffe')->default(0);
            $table->string('c_cold_coffe')->default(0);
            $table->string('o_cold_coffe')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_prices');
    }
};
