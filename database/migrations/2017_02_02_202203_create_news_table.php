<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration{

    public function up(){
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('state')->nullable();
            $table->string('img')->nullable();
            $table->string('created_by')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('news');
    }
}
