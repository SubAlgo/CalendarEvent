<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyTaskid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Step', function (Blueprint $table) {
            $table->integer('taskid')->unsigned()->notnull();
            
            $table->foreign('taskid')->references('id')->on('Task');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Step', function (Blueprint $table) {
            //
        });
    }
}
