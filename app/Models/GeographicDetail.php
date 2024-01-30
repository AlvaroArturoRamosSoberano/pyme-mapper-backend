<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeographicDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['latitude', 'longitude', 'street', 'state_id', 'municipality_id', 'colony_id'];

    public function company()
    {
        return $this->hasOne(Company::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    public function colony()
    {
        return $this->belongsTo(Colony::class);
    }
}
