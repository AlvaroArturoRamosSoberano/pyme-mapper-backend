<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnicalSheet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['contact_person', 'contact_email', 'contact_phone', 'founding_date', 'legal_status', 'fiscal_code', 'bussiness_description', 'other_details'];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
