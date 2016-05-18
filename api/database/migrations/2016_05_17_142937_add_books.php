<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('books')->insert(array(
            'name'=>'The Godfather',
            'author'=>'Mario Puzo',
            'created_at'=>date('Y-m-d H-m-s'),
            'updated_at'=>date('Y-m-d H-m-s')
        ));
        DB::table('books')->insert(array(
            'name'=>'The Alchemist',
            'author'=>'Paolo Coelho',
            'created_at'=>date('Y-m-d H-m-s'),
            'updated_at'=>date('Y-m-d H-m-s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('books')->where('name', '=', 'The Godfather')->delete();
        DB::table('books')->where('name', '=', 'The Alchemist')->delete();
    }
}
