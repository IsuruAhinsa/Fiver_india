<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePatientsAddColumnFamilyHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('Mother',50)->nullable();
            $table->string('Father',50)->nullable();
            $table->string('Sisters',50)->nullable();
            $table->string('Brothers',50)->nullable();
            $table->string('Children',50)->nullable();
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
            $table->dropColumn('Mother',50)->nullable();
            $table->dropColumn('Father',50)->nullable();
            $table->dropColumn('Sisters',50)->nullable();
            $table->dropColumn('Brothers',50)->nullable();
            $table->dropColumn('Children',50)->nullable();
        });
    }
}
