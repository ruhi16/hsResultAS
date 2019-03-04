<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClsexmsubfmpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clsexmsubfmpms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('clssexam_id');
            $table->unsignedInteger('clsssubject_id');
            $table->string('name');
            $table->integer('fullmarks');
            $table->integer('passmarks');
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
        Schema::dropIfExists('clsexmsubfmpms');
    }
}
