<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_7623473')->references('id')->on('countries');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id', 'department_fk_7623485')->references('id')->on('departments');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_7623439')->references('id')->on('teams');
        });
    }
}
