<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAdminCrud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_admin_crud', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('password', 60);
            $table->integer('user_id')->nullable(true)->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('table_user_crud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_admin_crud');
    }
}
