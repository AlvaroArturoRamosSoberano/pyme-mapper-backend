<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionRiskAspect extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['gas_production', 'explosiveness', 'gas_tank', 'inspection_id', 'risk_aspect_id'];

    public function inspection()
    {
        return $this->belongsTo(Inspection::class);
    }
    public function riskAspect()
    {
        return $this->belongsTo(RiskAspect::class);
    }
    public function tankDetails()
    {
        return $this->hasMany(TankDetail::class);
    }
}
