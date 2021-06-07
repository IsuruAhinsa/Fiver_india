<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableFamilyHistoriesModifyColumnLength extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) 
        {
            $table->string('Mother',500)->change()->nullable();
            $table->string('Father',500)->change()->nullable();
            $table->string('Sisters',500)->change()->nullable();
            $table->string('Brothers',500)->change()->nullable();
            $table->string('Children',500)->change()->nullable();
            
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
            $table->dropColum('Mother',500)->change()->nullable();
            $table->dropColum('Father',500)->change()->nullable();
            $table->dropColum('Sisters',500)->change()->nullable();
            $table->dropColum('Brothers',500)->change()->nullable();
            $table->dropColum('Children',500)->change()->nullable();
        });
    }
}
