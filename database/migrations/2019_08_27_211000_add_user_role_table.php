<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table){
            $table->tinyInteger('id')->unsigned()->autoIncrement();
            $table->string('name', 16);
        });

        Schema::table('users', function (Blueprint $table){
            $table->tinyInteger('role_id')->unsigned();
        });

        DB::table('roles')->insert(array(
            ['name' => 'admin'],
            ['name' => 'student']
        ));

        DB::table('users')->whereNull('role_id')->update(['role_id' => 2]);

        Schema::disableForeignKeyConstraints();
        Schema::table('users', function (Blueprint $table){
            $table->foreign('role_id')->references('id')->on('roles');
        });
        Schema::disableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('role_id');
        });

        Schema::table('users', function (Blueprint $table){
            $table->dropForeign('role_id');
        });

        Schema::dropIfExists('roles');
    }
}
