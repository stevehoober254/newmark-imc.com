<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('preferred_name')->nullable();
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('gender');
            $table->text('current_address');
            $table->string('university_institution');
            $table->string('course_of_study');
            $table->string('current_year_of_study');
            $table->string('expected_graduation_year');
            $table->string('school_contact_person')->nullable();
            $table->string('attachment_period');
            $table->string('department_area_of_interest')->nullable();
            $table->text('learning_objectives');
            $table->text('key_skills')->nullable();
            $table->text('languages_spoken')->nullable();
            $table->string('signature_name');
            $table->date('signature_date');
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
        Schema::dropIfExists('attachment_forms');
    }
};
