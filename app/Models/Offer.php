<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'type',
        'position_offered',
        'assignments' => "array",
        'assignments_description',
        'required_profile' => "array",
        'required_profile_description',
        'skills' => "array",
        'job_benefits' => "array",
        'job_benefits_description',
        'nb' => "array",
        'trades_id',
        'activity_area',
        'contract_type_id',
        'experience_level',
        'studies_level',
        'languages' => "array",
        'post_size',
        'cities' => "array",
        'countries' => "array",
        'status_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'assignments' => "array",
        'required_profile' => "array",
        'skills' => "array",
        'job_benefits' => "array",
        'nb' => "array",
        'languages' => "array",
        'cities' => "array",
        'countries' => "array",
    ];
}
