<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegulatoryAspect extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['date_assessed', 'responsable_department', 'conservation_program', 'emergency_plan', 'fire_extinguisher', 'inspection_id'];

    public function inspection()
    {
        return $this->belongsTo(Inspection::class);
    }
    public function regulatoryLicenses()
    {
        return $this->hasMany(RegulatoryLicense::class);
    } 
    public function regulatorySystemProtections()
    {
        return $this->hasMany(RegulatorySystemProtection::class);
    } 
}
