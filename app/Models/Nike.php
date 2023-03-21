<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nike extends Model
{
    protected $table = 'nike';
    public $incrementing = true;
    public $timestamp = false;
    protected $fillable =
    [
    'n_cm',
    'n_eu',
    'n_uk',
    'n_usm',
    'n_usw'
    ];
    use HasFactory;
}
