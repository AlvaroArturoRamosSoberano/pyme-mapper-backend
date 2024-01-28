<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colony extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'city_id'];

    public function city() {
        return $this->belongsTo(City::class);
    }
    public function geographicDetails()
    {
        return $this->hasMany(GeographicDetail::class);
    }
}
