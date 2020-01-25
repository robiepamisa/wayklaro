<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('category')->insert(array(
            'category_name' => 'jQuery'
        ));

        DB::table('category')->insert(array(
            'category_name' => 'WordPress'
        ));
        DB::table('category')->insert(array(
            'category_name' => 'JavaScript'
        ));
        DB::table('category')->insert(array(
            'category_name' => 'PHP'
        ));
        DB::table('category')->insert(array(
            'category_name' => 'CSS'
        ));
        DB::table('category')->insert(array(
            'category_name' => 'Html'
        ));
        DB::table('category')->insert(array(
            'category_name' => 'Api'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('category')->where('category_name','=','jQuery')->delete();
        DB::table('category')->where('category_name','=','WordPress')->delete();
        DB::table('category')->where('category_name','=','JavaScript')->delete();
        DB::table('category')->where('category_name','=','PHP')->delete();
        DB::table('category')->where('category_name','=','CSS')->delete();
        DB::table('category')->where('category_name','=','Html')->delete();
        DB::table('category')->where('category_name','=','Api')->delete();

    }
}
