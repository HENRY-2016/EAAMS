<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_table', function (Blueprint $table) {
            $table->id();
            $table->String('FName');
            $table->String('LName');
            $table->String('Contact');
            $table->String('Address');
            $table->String('Position');
            $table->String('StartDate');
            $table->String('Salary');
            $table->String('Account');
            $table->String('UserName');
            $table->String('PassWord');
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
        Schema::dropIfExists('employee_table');
    }
}
