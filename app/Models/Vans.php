<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vans extends Model
{
    protected $table = 'vans';
    public $incrementing = false;
    public $timestamp = false;
    protected $fillable =
    [
    'v_cm',
    'v_eu',
    'v_uk',
    'v_usm',
    'v_usw'
    ];
    use HasFactory;
}
