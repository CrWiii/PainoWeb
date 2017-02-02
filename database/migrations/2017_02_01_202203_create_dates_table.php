<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('startdate')->null();
            $table->datetime('enddate')->null();
            $table->string('place')->null();
            $table->mediumText('description')->null();
            $table->string('state')->null();
            $table->string('DNI')->null();
            $table->string('mail')->null();
            $table->string('asunt')->null();
            $table->string('type')->null();
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
        Schema::dropIfExists('dates');
    }
}
