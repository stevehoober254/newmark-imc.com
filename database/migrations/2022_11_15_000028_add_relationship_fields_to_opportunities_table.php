<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOpportunitiesTable extends Migration
{
    public function up()
    {
        Schema::table('opportunities', function (Blueprint $table) {
            $table->unsignedBigInteger('expertise_area_id')->nullable();
            $table->foreign('expertise_area_id', 'expertise_area_fk_7623741')->references('id')->on('our_expertises');
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id', 'location_fk_7623743')->references('id')->on('countries');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_7623753')->references('id')->on('teams');
        });
    }
}
