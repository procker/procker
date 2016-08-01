<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteboardGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('noteboardGroups', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('noteboard_id')->unsigned();
			$table->string('name');
			$table->timestamps();

			$table->foreign('noteboard_id')->references('id')->on('noteboards');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('noteboardGroups');
    }
}
