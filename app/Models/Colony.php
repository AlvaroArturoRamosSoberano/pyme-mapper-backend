<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colony extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'municipality_id'];

    public function municipality() {
        return $this->belongsTo(Municipality::class);
    }
    public function geographicDetails()
    {
        return $this->hasMany(GeographicDetail::class);
    }
}
