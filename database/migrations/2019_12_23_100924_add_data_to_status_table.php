<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('status')->insert(array(
            'status' => 'Not resolve'
        ));

         DB::table('status')->insert(array(
            'status' => 'Resolved'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       DB::table('status')->where('status','=','Not resolve')->delete();
       DB::table('status')->where('status','=','Resolve')->delete();
    }
}
