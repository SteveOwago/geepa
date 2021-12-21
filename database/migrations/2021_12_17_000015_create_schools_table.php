<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('academic_year');
            $table->string('email');
            $table->string('city');
            $table->string('detailed_location')->nullable();
            $table->string('post_office_box')->nullable();
            $table->string('contact_2')->nullable();
            $table->string('contact_4')->nullable();
            $table->string('contact_3')->nullable();
            $table->string('contact_1');
            $table->string('website')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
