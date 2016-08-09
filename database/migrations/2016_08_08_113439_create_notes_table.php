<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('notes', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('noteboard_group_id')->unsigned();
			$table->string('content');
			$table->string('backgroundColor');
			$table->string('color');
			$table->timestamps();

			$table->foreign('noteboard_group_id')->references('id')->on('noteboard_groups');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notes');
    }
}
