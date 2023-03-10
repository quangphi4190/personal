<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateProvincesTable.
 */
class CreateProvincesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provinces', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('region_id');

            $table->string('name');

            $table->timestamps();

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provinces');
	}
}
