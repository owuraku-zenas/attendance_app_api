<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendances', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('people_id');
            $table->unsignedBigInteger('date_id');

            $table->foreign('people_id')->references('id')->on('people');
            $table->foreign('date_id')->references('id')->on('dates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendances', function (Blueprint $table) {
            //
        });
    }
}
