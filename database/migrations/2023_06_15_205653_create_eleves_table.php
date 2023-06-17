<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->timestamps();
        });
    }

    public function down()
    {

        Schema::table('eleves', function (Blueprint $table) {
            $table->dropForeign('eleves_club_id_foreign');
        });

        Schema::dropIfExists('eleves');
    }
}