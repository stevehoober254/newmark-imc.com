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
            $table->string('date_of_graduation')->nullable();
            $table->longText('award_achieved')->nullable();
            $table->string('high_school_grade')->nullable();
            $table->longText('leadership_quality')->nullable();
            $table->longText('organization')->nullable();
            $table->integer('number_of_employees_supervised')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('description_of_the_roles_and_responsibilities')->nullable();
            $table->longText('reason_for_leaving')->nullable();
            $table->string('practice_area_you_are_interested_in')->nullable();
            $table->string('skills')->nullable();
            $table->string('type_of_engagement')->nullable();
            $table->string('preferred_workstation')->nullable();
            $table->decimal('salary_expectations', 15, 2)->nullable();
            $table->longText('why_would_you_like_to_join_our_team')->nullable();
            $table->longText('facebook_url')->nullable();
            $table->longText('twitter_url')->nullable();
            $table->longText('linked_in_url')->nullable();
            $table->string('do_you_have_personal_website')->nullable();
            $table->longText('portfolio_url')->nullable();
            $table->longText('other_links_works')->nullable();
            $table->string('current_step')->nullable();
            $table->longText('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
