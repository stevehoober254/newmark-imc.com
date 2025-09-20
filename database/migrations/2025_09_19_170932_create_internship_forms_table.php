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
        Schema::create('internship_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('preferred_name')->nullable();
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('gender');
            $table->string('marital_status');
            $table->text('current_address');
            $table->string('university_institution');
            $table->string('course_of_study');
            $table->string('year_of_study');
            $table->text('academic_achievements')->nullable();
            $table->text('previous_experience')->nullable();
            $table->text('technical_skills')->nullable();
            $table->text('languages_spoken')->nullable();
            $table->text('why_interested');
            $table->text('career_aspirations');
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
        Schema::dropIfExists('internship_forms');
    }
};
