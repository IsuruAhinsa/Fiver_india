<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePatientsAddColumnSocialHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('Standing',50)->nullable();
            $table->string('Sit_at_a_desk',50)->nullable();
            $table->string('Work_on_a_computer',50)->nullable();
            $table->string('Work_on_a_phone',50)->nullable();
            $table->string('Moderate_Heavy_labor',50)->nullable();
            $table->string('Stay_at_home',50)->nullable();
            $table->string('Deliver_packages',50)->nullable();
            $table->string('Retired',50)->nullable();
            $table->string('Tobacco_Smoke',50)->nullable();
            $table->string('Alcoholic_beverages',50)->nullable();
            $table->string('Caffeine',50)->nullable();
            $table->string('Exercise',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('Standing',50)->nullable();
            $table->dropColumn('Sit_at_a_desk',50)->nullable();
            $table->dropColumn('Work_on_a_computer',50)->nullable();
            $table->dropColumn('Work_on_a_phone',50)->nullable();
            $table->dropColumn('Moderate_Heavy_labor',50)->nullable();
            $table->dropColumn('Stay_at_home',50)->nullable();
            $table->dropColumn('Deliver_packages',50)->nullable();
            $table->dropColumn('Retired',50)->nullable();
            $table->dropColumn('Tobacco_Smoke',50)->nullable();
            $table->dropColumn('Alcoholic_beverages',50)->nullable();
            $table->dropColumn('Caffeine',50)->nullable();
            $table->dropColumn('Exercise',50)->nullable();
        });
    }
}
