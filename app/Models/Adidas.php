<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adidas extends Model
{
    protected $table = 'adidas';
    public $incrementing = true;
    public $timestamp = false;
    protected $fillable =
    [
    'a_cm',
    'a_eu',
    'a_uk',
    'a_usm',
    'a_usw'
    ];
    use HasFactory;
}
