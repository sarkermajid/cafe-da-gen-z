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
        Schema::create('daily_markets', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            // Items with price and quantity columns
            $table->integer('chicken_p')->nullable();
            $table->integer('chicken_q')->nullable();

            $table->integer('tomato_sauce_p')->nullable();
            $table->integer('tomato_sauce_q')->nullable();

            $table->integer('chili_sauce_p')->nullable();
            $table->integer('chili_sauce_q')->nullable();

            $table->integer('burger_bun_p')->nullable();
            $table->integer('burger_bun_q')->nullable();

            $table->integer('oil_p')->nullable();
            $table->integer('oil_q')->nullable();

            $table->integer('milk_powder_p')->nullable();
            $table->integer('milk_powder_q')->nullable();

            $table->integer('chicken_powder_p')->nullable();
            $table->integer('chicken_powder_q')->nullable();

            $table->integer('garam_masala_p')->nullable();
            $table->integer('garam_masala_q')->nullable();

            $table->integer('butter_p')->nullable();
            $table->integer('butter_q')->nullable();

            $table->integer('oregano_p')->nullable();
            $table->integer('oregano_q')->nullable();

            $table->integer('sugar_p')->nullable();
            $table->integer('sugar_q')->nullable();

            $table->integer('vegetable_p')->nullable();
            $table->integer('vegetable_q')->nullable();

            $table->integer('fish_sauce_p')->nullable();
            $table->integer('fish_sauce_q')->nullable();

            $table->integer('bbq_sauce_p')->nullable();
            $table->integer('bbq_sauce_q')->nullable();

            $table->integer('soya_sauce_p')->nullable();
            $table->integer('soya_sauce_q')->nullable();

            $table->integer('cocoa_powder_p')->nullable();
            $table->integer('cocoa_powder_q')->nullable();

            $table->integer('choco_syrup_p')->nullable();
            $table->integer('choco_syrup_q')->nullable();

            $table->integer('gas_p')->nullable();
            $table->integer('gas_q')->nullable();

            $table->integer('electricity_bill_p')->nullable();
            $table->integer('electricity_bill_q')->nullable();

            $table->integer('rent_p')->nullable();
            $table->integer('rent_q')->nullable();

            $table->integer('mushroom_p')->nullable();
            $table->integer('mushroom_q')->nullable();

            $table->integer('black_olives_p')->nullable();
            $table->integer('black_olives_q')->nullable();

            $table->integer('sausage_p')->nullable();
            $table->integer('sausage_q')->nullable();

            $table->integer('chicken_ball_p')->nullable();
            $table->integer('chicken_ball_q')->nullable();

            $table->integer('momo_sheet_p')->nullable();
            $table->integer('momo_sheet_q')->nullable();

            $table->integer('chawmine_p')->nullable();
            $table->integer('chawmine_q')->nullable();

            $table->integer('pasta_p')->nullable();
            $table->integer('pasta_q')->nullable();

            $table->integer('oster_p')->nullable();
            $table->integer('oster_q')->nullable();

            $table->integer('chart_p')->nullable();
            $table->integer('chart_q')->nullable();

            $table->integer('k_m_p')->nullable();
            $table->integer('k_m_q')->nullable();

            $table->integer('conflower_p')->nullable();
            $table->integer('conflower_q')->nullable();

            $table->integer('f_fry_p')->nullable();
            $table->integer('f_fry_q')->nullable();

            $table->integer('c_wings_p')->nullable();
            $table->integer('c_wings_q')->nullable();

            $table->integer('potato_p')->nullable();
            $table->integer('potato_q')->nullable();

            $table->integer('vinegar_p')->nullable();
            $table->integer('vinegar_q')->nullable();

            $table->integer('salt_p')->nullable();
            $table->integer('salt_q')->nullable();

            $table->integer('c_fry_p')->nullable();
            $table->integer('c_fry_q')->nullable();

            $table->integer('c_stacp_p')->nullable();
            $table->integer('c_stacp_q')->nullable();

            $table->integer('transport_p')->nullable();
            $table->integer('transport_q')->nullable();

            $table->integer('lemon_p')->nullable();
            $table->integer('lemon_q')->nullable();

            $table->integer('pudina_p')->nullable();
            $table->integer('pudina_q')->nullable();

            $table->integer('doi_p')->nullable();
            $table->integer('doi_q')->nullable();

            $table->integer('salami')->nullable();

            $table->integer('total_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_markets');
    }
};
