<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TankDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['station_location', 'capacity', 'material', 'year_of_manufacture', 'restored', 'position_id', 'fuel_type_id', 'inspection_risk_aspect_id'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function fuel_type()
    {
        return $this->belongsTo(FuelType::class);
    }
    public function inspectionRiskAspect()
    {
        return $this->belongsTo(InspectionRiskAspect::class);
    }
}
