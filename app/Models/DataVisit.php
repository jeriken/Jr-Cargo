<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataVisit extends Model
{
    use HasFactory;

    protected $table = 'data_visit';

    public function getPartnerStatusAttribute($value)
    {
        return ($value == 1) ? "Tertarik" : "Tidak Tertarik";
    }
}
