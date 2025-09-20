<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentForm extends Model
{
    use HasFactory;

    public $table = 'attachment_forms';

    protected $dates = [
        'signature_date',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'full_name',
        'preferred_name',
        'email_address',
        'phone_number',
        'date_of_birth',
        'nationality',
        'gender',
        'current_address',
        'university_institution',
        'course_of_study',
        'current_year_of_study',
        'expected_graduation_year',
        'school_contact_person',
        'attachment_period',
        'department_area_of_interest',
        'learning_objectives',
        'key_skills',
        'languages_spoken',
        'signature_name',
        'signature_date',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
