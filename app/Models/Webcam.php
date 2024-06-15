<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webcam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'stream_url',
        'image_url',
        'in_regione',
    ];
}
