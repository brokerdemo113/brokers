<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licensedetails extends Model
{
    use HasFactory;
    protected $fillable = [

        'selectbroker',
            'selectlicense',
            'currentstatus',
            'country',
            'licensed_institution',
            'email_license',
            'website_institution',
            'address_license',
            'license_type',
            'license_no',
            'effective_date',
            'expiration_time',
            'phone_number'
        ];

}
