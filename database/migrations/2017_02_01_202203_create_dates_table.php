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
            $table->datetime('startdate')->nullable();
            $table->datetime('enddate')->nullable();
            $table->string('place')->nullable();
            $table->string('title')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('state')->nullable();
            $table->string('DNI')->nullable();
            $table->string('mail')->nullable();
            $table->string('asunt')->nullable();
            $table->string('type')->nullable();
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
