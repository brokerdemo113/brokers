<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brokerdetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone','address',
        'image','company_abb',
        'platform_reg',
        'year',
        'email',
        'website',
        'facebook_link',
        'instagram_link',
        'youtube_link',
        'linkedin_link',
        'twitter_link'

    ];
}
