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
            $table->float('chicken_p')->nullable();
            $table->float('chicken_q')->nullable();

            $table->float('tomato_sauce_p')->nullable();
            $table->float('tomato_sauce_q')->nullable();

            $table->float('chili_sauce_p')->nullable();
            $table->float('chili_sauce_q')->nullable();

            $table->float('burger_bun_p')->nullable();
            $table->float('burger_bun_q')->nullable();

            $table->float('oil_p')->nullable();
            $table->float('oil_q')->nullable();

            $table->float('milk_powder_p')->nullable();
            $table->float('milk_powder_q')->nullable();

            $table->float('chicken_powder_p')->nullable();
            $table->float('chicken_powder_q')->nullable();

            $table->float('garam_masala_p')->nullable();
            $table->float('garam_masala_q')->nullable();

            $table->float('butter_p')->nullable();
            $table->float('butter_q')->nullable();

            $table->float('oregano_p')->nullable();
            $table->float('oregano_q')->nullable();

            $table->float('sugar_p')->nullable();
            $table->float('sugar_q')->nullable();

            $table->float('vegetable_p')->nullable();
            $table->float('vegetable_q')->nullable();

            $table->float('fish_sauce_p')->nullable();
            $table->float('fish_sauce_q')->nullable();

            $table->float('bbq_sauce_p')->nullable();
            $table->float('bbq_sauce_q')->nullable();

            $table->float('soya_sauce_p')->nullable();
            $table->float('soya_sauce_q')->nullable();

            $table->float('cocoa_powder_p')->nullable();
            $table->float('cocoa_powder_q')->nullable();

            $table->float('choco_syrup_p')->nullable();
            $table->float('choco_syrup_q')->nullable();

            $table->float('gas_p')->nullable();
            $table->float('gas_q')->nullable();

            $table->float('electricity_bill_p')->nullable();
            $table->float('electricity_bill_q')->nullable();

            $table->float('rent_p')->nullable();
            $table->float('rent_q')->nullable();

            $table->float('mushroom_p')->nullable();
            $table->float('mushroom_q')->nullable();

            $table->float('black_olives_p')->nullable();
            $table->float('black_olives_q')->nullable();

            $table->float('sausage_p')->nullable();
            $table->float('sausage_q')->nullable();

            $table->float('chicken_ball_p')->nullable();
            $table->float('chicken_ball_q')->nullable();

            $table->float('momo_sheet_p')->nullable();
            $table->float('momo_sheet_q')->nullable();

            $table->float('chawmine_p')->nullable();
            $table->float('chawmine_q')->nullable();

            $table->float('pasta_p')->nullable();
            $table->float('pasta_q')->nullable();

            $table->float('oster_p')->nullable();
            $table->float('oster_q')->nullable();

            $table->float('chart_p')->nullable();
            $table->float('chart_q')->nullable();

            $table->float('k_m_p')->nullable();
            $table->float('k_m_q')->nullable();

            $table->float('conflower_p')->nullable();
            $table->float('conflower_q')->nullable();

            $table->float('f_fry_p')->nullable();
            $table->float('f_fry_q')->nullable();

            $table->float('c_wings_p')->nullable();
            $table->float('c_wings_q')->nullable();

            $table->float('potato_p')->nullable();
            $table->float('potato_q')->nullable();

            $table->float('vinegar_p')->nullable();
            $table->float('vinegar_q')->nullable();

            $table->float('salt_p')->nullable();
            $table->float('salt_q')->nullable();

            $table->float('c_fry_p')->nullable();
            $table->float('c_fry_q')->nullable();

            $table->float('c_stacp_p')->nullable();
            $table->float('c_stacp_q')->nullable();

            $table->float('transport_p')->nullable();
            $table->float('transport_q')->nullable();

            $table->float('lemon_p')->nullable();
            $table->float('lemon_q')->nullable();

            $table->float('pudina_p')->nullable();
            $table->float('pudina_q')->nullable();

            $table->float('doi_p')->nullable();
            $table->float('doi_q')->nullable();

            $table->float('salami')->nullable();

            $table->float('total_price')->nullable();
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
