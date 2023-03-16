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
            $table->longText('full_name');
            $table->integer('age');
            $table->longText('nationality');
            $table->longText('gender');
            $table->longText('marital_status');
            $table->longText('current_physical_address');
            $table->longText('email_address')->unique();
            $table->longText('phone_number');
            $table->longText('highest_level_of_education')->nullable();
            $table->longText('field_of_study')->nullable();
            $table->longText('institution')->nullable();
            $table->longText('award_achieved')->nullable();
            $table->longText('date_of_graduation')->nullable();
            $table->longText('high_school_grade')->nullable();
            $table->longText('leadership_quality')->nullable();
            $table->longText('practice_area_you_are_interested_in')->nullable();
            $table->longText('skills')->nullable();
            $table->longText('type_of_engagement')->nullable();
            $table->longText('preferred_workstation')->nullable();
            $table->longText('salary_expectations', 15, 2)->nullable();
            $table->longText('why_would_you_like_to_join_our_team')->nullable();
            $table->longText('facebook_url')->nullable();
            $table->longText('twitter_url')->nullable();
            $table->longText('linked_in_url')->nullable();
            $table->longText('do_you_have_personal_website')->nullable();
            $table->longText('portfolio_url')->nullable();
            $table->longText('other_links_works')->nullable();
            $table->longText('current_step')->nullable();
            $table->longText('organization_one')->nullable();
            $table->integer('number_of_employees_supervised_one')->nullable();
            $table->longText('start_date_one')->nullable();
            $table->longText('end_date_one')->nullable();
            $table->longText('description_of_the_roles_and_responsibilities_one')->nullable();
            $table->longText('reason_for_leaving_one')->nullable();
            $table->longText('organization_two')->nullable();
            $table->integer('number_of_employees_supervised_two')->nullable();
            $table->longText('start_date_two')->nullable();
            $table->longText('end_date_two')->nullable();
            $table->longText('description_of_the_roles_and_responsibilities_two')->nullable();
            $table->longText('reason_for_leaving_two')->nullable();
            $table->longText('organization_three')->nullable();
            $table->integer('number_of_employees_supervised_three')->nullable();
            $table->longText('start_date_three')->nullable();
            $table->longText('end_date_three')->nullable();
            $table->longText('description_of_the_roles_and_responsibilities_three')->nullable();
            $table->longText('reason_for_leaving_three')->nullable();
            $table->longText('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
