<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'offer_id',
        'user_id',
        'company_id',
        'applicant_firstname',
        'applicant_lastname',
        'applicant_email',
        'applicant_civility',
        'message',
        'notification_method',
    ];
}
