<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs', function (Blueprint $table) {
            $table->id();
            $table->string('index_no')->nullable();
            $table->string('name')->nullable();
            $table->string('desi')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('join_date')->nullable();
            $table->string('subject')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('stuffs');
    }
}
