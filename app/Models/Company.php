<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['identifier_key', 'image_path', 'technical_sheet_id', 'industry_id', 'geographic_detail_id'];

    public function technicalSheet()
    {
        return $this->belongsTo(TechnicalSheet::class);
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    public function geographicdetail()
    {
        return $this->belongsTo(GeographicDetail::class);
    }
    public function incidentRecords()
    {
        return $this->hasMany(IncidenRecord::class);
    }
    public function inspections()
    {
        return $this->hasMany(Inspection::class);
    }
}
