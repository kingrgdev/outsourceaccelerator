<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->ipAddress('ip_address');
            $table->string('country');
            $table->string('country_code');
            $table->string('region_code');
            $table->string('region');
            $table->string('city');
            $table->unsignedMediumInteger('zip_code')->length(10);
            $table->string('latitude');
            $table->string('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ip_address');
            $table->dropColumn('country')->nullable();
            $table->dropColumn('country_code')->nullable();
            $table->dropColumn('region_code')->nullable();
            $table->dropColumn('region')->nullable();
            $table->dropColumn('city')->nullable();
            $table->dropColumn('zip_code')->nullable();
            $table->dropColumn('latitude')->nullable();
            $table->dropColumn('longitude')->nullable();
        });
    }
}
