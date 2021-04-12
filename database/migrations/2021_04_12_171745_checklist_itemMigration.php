<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChecklistItemMigration extends Migration
{
	public function up()
	{
		Schema::create('checklist_items', function (Blueprint $table) {
			$table->bigIncrements('id');
            $table->string('name');
            $table->boolean('completed')->default(false);
			$table->timestamps();

            $table->foreignId('checklists_id')->constrained();
		});
	}

	public function down()
	{
		Schema::dropIfExists('checklist_items');
	}
}
