<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lname')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('school')->nullable();
            $table->string('location')->nullable();
            $table->string('grade')->nullable();
            $table->integer('phone')->unsigned()->nullable();
            $table->unsignedBigInteger('country_id')->default(109);
            $table->foreign('country_id', 'country_fk_5358744')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
