<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Grade model represents different vanilla grades and their characteristics.
 */
class Grade extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'grade',
        'length_min',
        'length_max',
        'moisture_min',
        'moisture_max',
        'description',
        'image'
    ];
}
