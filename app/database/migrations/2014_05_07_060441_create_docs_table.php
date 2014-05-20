<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docs', function($table)
		{
			$table->increments('id');
            $table->integer('user_id');
			$table->string('title', 64);
			$table->text('content');
			$table->timestamps();
		});
		// DB::table('docs')->insert(array(
		// 	'title'=>'test',
		// 	'content'=>'just a test!',
  //           'created_at'=>time(),
  //           'updated_at'=>''
		// ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('docs');
	}

}
