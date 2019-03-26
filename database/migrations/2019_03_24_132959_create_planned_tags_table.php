<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlannedTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planned_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('planned_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('planned_id')->references('id')->on('planned');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planned_tags');
    }
}
