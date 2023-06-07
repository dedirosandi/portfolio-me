<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'position',
        'start',
        'end',
        'skill',
        'desc',
        // kolom-kolom lain yang sudah ada
    ];
}
