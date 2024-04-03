<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ayah extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_ayah',
        'tanggal_lahir_ayah',
        'pekerjaan_ayah',
        'alamat_ayah',
        'RT_ayah',
        'RW_ayah',
    ];

    public function anaks(){
        return $this->hasMany(Anak::class);
    }
}
