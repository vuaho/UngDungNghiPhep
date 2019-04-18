<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddForeignToUseractions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useractions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('action_id')->references('id')->on('actions');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('useractions');
    }
}
