<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PharIo\Manifest\License;

class RegulatoryLicense extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['adquisition_date', 'expiration_date', 'status', 'regulatory_aspect_id', 'license_id'];

    public function regulatoryAspect()
    {
        return $this->belongsTo(RegulatoryAspect::class);
    }
    public function license()
    {
        return $this->belongsTo(License::class);
    }
}
