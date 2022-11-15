<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Opportunity extends Model implements HasMedia
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use InteractsWithMedia;
    use HasFactory;

    public const CATEGORY_SELECT = [
        'full time'  => 'Full time',
        'part time'  => 'Part Time',
        'contract'   => 'Contract',
        'internship' => 'Internship',
    ];

    public $table = 'opportunities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'job_title',
        'category',
        'expertise_area_id',
        'reporting_to',
        'location_id',
        'job_purpose',
        'key_responsibility',
        'qualification',
        'how_to_apply',
        'status',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function expertise_area()
    {
        return $this->belongsTo(OurExpertise::class, 'expertise_area_id');
    }

    public function location()
    {
        return $this->belongsTo(Country::class, 'location_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
