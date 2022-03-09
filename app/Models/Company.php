<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'postal_code',
        'country',
        'city',
        'staff_size',
        'website_url',
        'company_email',
        'logo',
        'activity_area_ids',
        'description',
        'civility',
        'contact_firstname',
        'contact_lastname',
        'phone_number1',
        'phone_number2',
        'user_id',
    ];
}
