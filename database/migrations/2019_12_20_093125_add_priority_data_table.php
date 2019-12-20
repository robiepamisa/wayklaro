<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriorityDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('priority')->insert(array(
            'priority' => 'LESS'
        ));

        DB::table('priority')->insert(array(
            'priority' => 'NORMAL'
        ));

        DB::table('priority')->insert(array(
            'priority' => 'HIGH'
        ));


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       DB::table('priority')->where('priority','=','LESS')->delete();
       DB::table('priority')->where('priority','=','NORMAL')->delete();
       DB::table('priority')->where('priority','=','HIGH')->delete();
    }
}
