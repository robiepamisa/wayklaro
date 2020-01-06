<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('role')->insert(array(
            'role_name' => 'admin'
        ));

         DB::table('role')->insert(array(
            'role_name' => 'employee'
        ));

          DB::table('role')->insert(array(
            'role_name' => 'user'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('role')->where('role_name','=','admin')->delete();
        DB::table('role')->where('role_name','=','employee')->delete();
        DB::table('role')->where('role_name','=','user')->delete();
    }
}
