<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_table', function (Blueprint $table) {
            $table->id();
            $table->String('Name');
            $table->String('Description');
            $table->String('EmpName');
            $table->String('EmpDate');
            $table->String('Approval');
            $table->String('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks_table');
    }
}
