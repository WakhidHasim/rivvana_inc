<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'description',
        'vision',
        'mission'
    ];
}
