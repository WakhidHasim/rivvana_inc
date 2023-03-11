<?php

namespace App\Models;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'icon', 'description'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'service_id', 'id');
    }
}
