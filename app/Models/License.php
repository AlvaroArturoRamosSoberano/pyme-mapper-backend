<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class License extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function regulatoryLicenses()
    {
        return $this->hasMany(RegulatoryLicense::class);
    }
}
