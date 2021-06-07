<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePatientsAddInsuInfoColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('insuredname',45)->nullable();
            $table->string('claimsadjuster',45)->nullable();
            $table->string('insureddob',45)->nullable();
            $table->string('relationshiptoinsured',45)->nullable();
            $table->string('policynumber',45)->nullable();
            $table->string('groupnumber',45)->nullable();
            $table->string('claimnumber',45)->nullable();
            $table->string('phonenumber',45)->nullable();
            $table->string('visitsauthorized',45)->nullable();
            $table->string('visitsused',45)->nullable();
            $table->string('insindeductible',45)->nullable();
            $table->string('insoutdeductible',45)->nullable();
            $table->string('insinremaining',45)->nullable();
            $table->string('insincoinsuranc',45)->nullable();
            $table->string('insoutcoinsurance',45)->nullable();
            $table->string('insincopay',45)->nullable();
            $table->string('insoutcopay',45)->nullable();
            $table->text('insnotes',400)->nullable();
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
            $table->dropColumn('insuredname')->nullable();
            $table->dropColumn('claimsadjuster',45)->nullable();
            $table->dropColumn('insureddob',45)->nullable();
            $table->dropColumn('relationshiptoinsured',45)->nullable();
            $table->dropColumn('policynumber',45)->nullable();
            $table->dropColumn('groupnumber',45)->nullable();
            $table->dropColumn('claimnumber',45)->nullable();
            $table->dropColumn('phonenumber',45)->nullable();
            $table->dropColumn('visitsauthorized',45)->nullable();
            $table->dropColumn('visitsused',45)->nullable();
            $table->dropColumn('insindeductible',45)->nullable();
            $table->dropColumn('insoutdeductible',45)->nullable();
            $table->dropColumn('insinremaining',45)->nullable();
            $table->dropColumn('insincoinsuranc',45)->nullable();
            $table->dropColumn('insoutcoinsurance',45)->nullable();
            $table->dropColumn('insincopay',45)->nullable();
            $table->dropColumn('insoutcopay',45)->nullable();
            $table->dropColumn('insnotes',400)->nullable();
        });
    }
}
