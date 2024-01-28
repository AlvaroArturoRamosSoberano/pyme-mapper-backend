<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inspection extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['inspection_date', 'status', 'notes', 'user_id', 'company_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function inspectionRiskAspects()
    {
        return $this->hasOne(InspectionRiskAspect::class);
    }
}
