<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncidentRecord extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['incident_date', 'incident_type', 'incident_title', 'description', 'resolution', 'notes', 'image_path', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
