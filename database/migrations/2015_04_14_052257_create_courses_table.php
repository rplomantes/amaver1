<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id')->unsigned();
                        $table->string('paymentrequestid');
                        $table->string('courseid');
                        $table->string('coursename');
                         $table->decimal('amount', 9, 2);
                        $table->string('status');
			$table->timestamps();
                        
                        $table->foreign('user_id')
                                ->references('id')
                                ->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
