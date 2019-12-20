<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleDataToRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('role')->insert(array(
            'role' => 'admin'
        ));

         DB::table('role')->insert(array(
            'role' => 'employee'
        ));

          DB::table('role')->insert(array(
            'role' => 'user'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         
        DB::table('role')->where('role','=','employee')->delete();
        DB::table('role')->where('role','=','user')->delete();
    }
}
