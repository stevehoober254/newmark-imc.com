<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalHistoryFormsTable extends Migration
{
    public function up()
    {
        Schema::create('personal_history_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->integer('age');
            $table->string('nationality');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('current_physical_address');
            $table->string('email_address')->unique();
            $table->string('phone_number');
            $table->string('highest_level_of_education')->nullable();
            $table->string('field_of_study')->nullable();
            $table->string('institution')->nullable();
            $table->date('date_of_graduation')->nullable();
            $table->longText('award_achieved')->nullable();
            $table->string('high_school_grade')->nullable();
            $table->longText('leadership_quality')->nullable();
            $table->longText('organization')->nullable();
            $table->integer('number_of_employees_supervised')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('description_of_the_roles_and_responsibilities')->nullable();
            $table->longText('reason_for_leaving')->nullable();
            $table->string('company_name')->nullable();
            $table->string('number_of_employees_supervised_pd')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
