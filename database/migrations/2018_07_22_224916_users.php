<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::create('users',function($myTable){
        $myTable -> increments('id');
        $myTable -> string('email');
        
        
        $myTable -> string('username',100);
        $myTable -> string('password',255);
        $myTable -> string('remember_token',128);
       
        $myTable -> timestamps();

    });*/
    }
    //->unique()
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
