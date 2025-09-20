<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipForm extends Model
{
    use HasFactory;

    public $table = 'internship_forms';

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
        'marital_status',
        'current_address',
        'university_institution',
        'course_of_study',
        'year_of_study',
        'academic_achievements',
        'previous_experience',
        'technical_skills',
        'languages_spoken',
        'why_interested',
        'career_aspirations',
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
