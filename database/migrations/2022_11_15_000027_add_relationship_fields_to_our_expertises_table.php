<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOurExpertisesTable extends Migration
{
    public function up()
    {
        Schema::table('our_expertises', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_7623688')->references('id')->on('teams');
        });
    }
}
