<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::dropIfExists('newusers');
        Schema::create('newusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname')->nullable();
            $table->string('middleinitial')->nullable();
            $table->string('lastname')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('email',191)->unique()->nullable();
            $table->string('dobmonth')->nullable();
            $table->string('dobday')->nullable();
            $table->string('dobyear')->nullable();
            $table->string('sex')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('invitecode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newusers');
    }
}
