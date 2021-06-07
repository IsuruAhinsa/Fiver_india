<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('patients');
        Schema::create('patients', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('firstname')->nullable();
            $table->string('middleinitial')->nullable();
            $table->string('lastname')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('homephone')->nullable();
            $table->string('workphone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('email',191)->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('dobmonth')->nullable();
            $table->string('dobday')->nullable();
            $table->string('dobyear')->nullable();
            $table->string('ssn')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('sex')->nullable();
            $table->string('employer')->nullable();
            $table->string('occupation')->nullable();
            $table->string('status')->nullable();
            $table->string('spouselastname')->nullable();
            $table->string('spousefirstname')->nullable();
            $table->string('spousessn')->nullable();
            $table->string('spousedob')->nullable();
            $table->string('emergencyname')->nullable();
            $table->string('emergencyrelationship')->nullable();
            $table->string('emergencyhomephone')->nullable();
            $table->string('emergencycellphone')->nullable();
            $table->string('nickname')->nullable();
            $table->string('caseindicator')->nullable();
            $table->string('referredbytype')->nullable();
            $table->string('paymenttype')->nullable();
            $table->string('suffix')->nullable();
            $table->string('costpervisit')->nullable();
            $table->string('network')->nullable();
            $table->string('coinsurance')->nullable();
            $table->string('coinsurancedp')->nullable();
            $table->string('alternateno')->nullable();
            $table->string('apptreminders')->nullable();
            $table->string('carrier')->nullable();
            $table->string('pitype')->nullable();
            $table->string('language')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
