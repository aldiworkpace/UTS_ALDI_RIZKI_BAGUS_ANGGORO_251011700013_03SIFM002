<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Camera extends Model
{
    //
    use HasFactory;

    protected $table = 'cameras';

    protected $fillable = [
        'brand',
        'model',
        'rent_price',
        'image',
        'description',
        'type',
    ];
}
