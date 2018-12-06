<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoEditorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_editor', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('imageDirectory');
            $table->string('name');
            $table->integer('price');
            $table->integer('size');
            $table->string('platform');
            $table->integer('platformCount');
            $table->string('license');
            $table->string('version');
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
        Schema::dropIfExists('video_editor');
    }
}
