<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kakastro extends Model
{
    use HasFactory;

    protected $table = 'kakastros';

    protected $fillable = [
        'title',
        'gambar',
        'body',
        'published_at',
        
    ];
}
