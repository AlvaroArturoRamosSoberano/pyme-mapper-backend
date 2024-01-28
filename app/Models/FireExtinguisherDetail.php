<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FireExtinguisherDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['location', 'last_inspection_date', 'expiration_date', 'capacity', 'notes', 'extinguisher_type_id', 'regulatory_aspect_id'];

    public function extinguisherType()
    {
        return $this->belongsTo(FireExtinguisherType::class);
    }
    public function regulatoryAspect()
    {
        return $this->belongsTo(RegulatoryAspect::class);
    }
}
