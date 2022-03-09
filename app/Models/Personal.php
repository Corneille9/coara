<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'image',
        'phone_number',
        'civility',
        'country',
        'languages' => "array",
        'notification_method',
        'activity_area_ids' => "array",
        'research_trades_ids' => "array",
        'regions',
        'desired_contract_type' => "array",
        'desired_salary',
        'user_id',
        'status_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'languages' => "array",
        'desired_contract_type' => "array",
        'research_trades_ids' => "array",
    ];
}
