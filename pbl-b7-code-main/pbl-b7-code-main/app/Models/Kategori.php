<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $fillable = [
        'nama_kategori',
    ];

    public function layanans(): HasMany
    {
        return $this->hasMany(Layanan::class);
    }

    public function paketLayanans(): HasMany
    {
        return $this->hasMany(PaketLayanan::class);
    }
}
