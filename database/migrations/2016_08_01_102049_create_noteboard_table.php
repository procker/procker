<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('noteboards', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->string('name');
			$table->timestamps();

			$table->foreign('project_id')->references('id')->on('project');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('noteboards');
    }
}
