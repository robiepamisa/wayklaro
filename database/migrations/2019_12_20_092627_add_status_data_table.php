 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          DB::table('status')->insert(array(
            'status' => 'Resolved'
        ));

          DB::table('status')->insert(array(
            'status' => 'Not resolve'
        ));

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::table('status')->where('status','=','Resolve')->delete();
         DB::table('status')->where('status','=','Not resolve')->delete();
    }
}
