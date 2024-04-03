<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class anak extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_anak',
        'tanggal_lahir_anak',
        'jenis_kelamin_anak',
        'anak_ke',
        'alamat_anak',
        'RT_anak',
        'RW_anak',
    ];

    public function ayahs(){
        return $this->belongsTo(Ayah::class, 'ayah_id');
    }

    public function ibus(){
        return $this->belongsTo(Ibu::class, 'ibu_id');
    }
}