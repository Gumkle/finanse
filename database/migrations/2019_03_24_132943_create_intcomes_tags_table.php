<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntcomesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intcomes_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tags_id')->unsigned();
            $table->integer('outcomes_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('tags_id')->references('id')->on('tags');
            $table->foreign('outcomes_id')->references('id')->on('outcomes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intcomes_tags');
    }
}
