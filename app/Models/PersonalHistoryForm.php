<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PersonalHistoryForm extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const DO_YOU_HAVE_PERSONAL_WEBSITE_SELECT = [
        'yes' => 'yes',
        'no'  => 'no',
    ];

    public $table = 'personal_history_forms';

    protected $dates = [
        'date_of_graduation',
        'start_date',
        'end_date',
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
        'date_of_graduation',
        'award_achieved',
        'high_school_grade',
        'leadership_quality',
        'organization',
        'number_of_employees_supervised',
        'start_date',
        'end_date',
        'description_of_the_roles_and_responsibilities',
        'reason_for_leaving',
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
        'slug',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getDateOfGraduationAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    // public function setDateOfGraduationAttribute($value)
    // {
    //     $this->attributes['date_of_graduation'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    // }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
