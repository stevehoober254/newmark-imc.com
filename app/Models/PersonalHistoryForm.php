<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalHistoryForm extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const DO_YOU_HAVE_PERSONAL_WEBSITE_SELECT = [
        'yes' => 'yes',
        'no'  => 'no',
    ];

    public $table = 'personal_history_forms';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'full_name',
        'age',
        'nationality',
        'gender',
        'marital_status',
        'current_physical_address',
        'email_address',
        'phone_number',
        'highest_level_of_education',
        'field_of_study',
        'institution',
        'award_achieved',
        'date_of_graduation',
        'high_school_grade',
        'leadership_quality',
        'practice_area_you_are_interested_in',
        'created_at',
        'skills',
        'type_of_engagement',
        'preferred_workstation',
        'salary_expectations',
        'why_would_you_like_to_join_our_team',
        'facebook_url',
        'twitter_url',
        'linked_in_url',
        'do_you_have_personal_website',
        'portfolio_url',
        'other_links_works',
        'current_step',
        'organization_one',
        'number_of_employees_supervised_one',
        'start_date_one',
        'end_date_one',
        'description_of_the_roles_and_responsibilities_one',
        'reason_for_leaving_one',
        'organization_two',
        'number_of_employees_supervised_two',
        'start_date_two',
        'end_date_two',
        'description_of_the_roles_and_responsibilities_two',
        'reason_for_leaving_two',
        'organization_three',
        'number_of_employees_supervised_three',
        'start_date_three',
        'end_date_three',
        'description_of_the_roles_and_responsibilities_three',
        'reason_for_leaving_three',
        'slug',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
