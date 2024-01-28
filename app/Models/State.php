<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
    public function geographicDetails()
    {
        return $this->hasMany(GeographicDetail::class);
    }
}
