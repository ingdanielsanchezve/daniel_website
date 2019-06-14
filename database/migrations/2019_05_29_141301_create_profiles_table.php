<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('picture');
            $table->string('title');
            $table->string('technologies');
            $table->string('location');
            $table->string('subtitle');
            $table->string('linkedin');
            $table->string('github');
            $table->string('skype');
            $table->text('cv_url');
            $table->text('aboutme');
            $table->longtext('aboutme_more1');
            $table->longtext('aboutme_more2');
            $table->longtext('aboutme_more3');
            $table->longtext('aboutme_more4');
            $table->string('birthdate');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('phone');
            $table->string('email');
            $table->string('lang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
