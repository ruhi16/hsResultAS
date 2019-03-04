<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClssexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clssexams', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('clss_id');
            $table->unsignedInteger('exam_id');
            $table->string('status');
            $table->unsignedInteger('session_id');
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
        Schema::dropIfExists('clssexams');
    }
}
