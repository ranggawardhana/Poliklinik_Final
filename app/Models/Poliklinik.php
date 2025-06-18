<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poliklinik extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_obat',
        'kemasan',
        'harga',
    ];

    public function dokter():HasMany
    {
        return $this->hasMany(User::class, 'id_poliklinik');
    }
}
