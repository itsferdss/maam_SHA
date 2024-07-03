<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name')->nullable();
            $table->string('employee_email')->nullable();
            $table->string('employee_address')->nullable();
            $table->string('employee_contact_number')->nullable();
            $table->date('employee_birthdate')->nullable();
            $table->string('employee_department')->nullable();
            $table->decimal('employee_salary', 10, 2)->nullable();
            $table->string('employee_status')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
