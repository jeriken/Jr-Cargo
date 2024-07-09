<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataArmada extends Model
{
    use HasFactory;

    protected $table = 'data_armada';

    public function getKondisiBersihAttribute($value)
    {
        return ($value == 1) ? "Bersih" : "Buruk";
    }

    public function getLampuSeinAttribute($value)
    {
        switch ($value) {
            case 0:
                $return = "Tidak Berfungsi Semua";
                break;
            case 1:
                $return = "Berfungsi Semua";
                break;
            case 2:
                $return = "Kiri Mati";
                break;
            case 3:
                $return = "Kanan Mati";
                break;
            default:
                $return = "Berfungsi Semua";
        }
        return $return;
    }

    public function user(){
        return $this->belongsTo(BadasoUser::class, 'user_id', 'id');
    }

}
