<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
