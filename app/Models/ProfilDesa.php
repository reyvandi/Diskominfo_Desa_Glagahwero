<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    protected $fillable = [
        'visi',
        'misi',
        'sejarah',
        'bagan',
        'periode',
    ];

    protected $casts = [
        'misi' => 'array',
    ];
}
