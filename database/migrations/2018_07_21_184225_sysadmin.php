<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sysadmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sysAdmins',function($myTable){
        $myTable -> increments('id');
        $myTable -> string('name');//255 by default
        $myTable -> string('lastname',30);
        $myTable -> string('description',500);
        $myTable -> string('age');
        $myTable -> date('created');
        $myTable -> timestamps();

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sysAdmins');
    }
}
