<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('reportsTo', 'employees_ibfk_1')->references('employeeNumber')->on('employees')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('officeCode', 'employees_ibfk_2')->references('officeCode')->on('offices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('employees_ibfk_1');
            $table->dropForeign('employees_ibfk_2');
        });
    }
}
