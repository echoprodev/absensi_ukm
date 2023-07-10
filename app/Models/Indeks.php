<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indeks extends Model
{
    use HasFactory;
    protected $table = 'indeks';

    protected $fillable = [
      'struktur', 'poin'
    ];
}
