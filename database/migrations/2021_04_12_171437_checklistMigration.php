<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChecklistMigration extends Migration
{
	public function up()
	{
		Schema::create('checklists', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->boolean('completed')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('checklists');
	}
}
