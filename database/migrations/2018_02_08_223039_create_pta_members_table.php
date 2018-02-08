<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtaMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pta_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('cell_phone');
            $table->string('email');
            $table->string('roll');
            $table->text('roll_comment');
            $table->boolean('volunteer');
            $table->text('comments');
            $table->integer('family_id')->unsigned();
            $table->foreign('family_id')->references('id')->on('families');
            $table->integer('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools');
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
        Schema::dropIfExists('pta_members');
    }
}
