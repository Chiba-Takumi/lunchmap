<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToShopsTable extends Migration
{

    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->integer('user_id');
        });
    }


    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
        });
    }
}
