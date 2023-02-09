<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewBalance extends Model
{
    protected $table = 'newbalance';
    public $incrementing = false;
    public $timestamp = false;
    protected $fillable =
    [
    'nb_cm',
    'nb_eu',
    'nb_uk',
    'nb_usm',
    'nb_usw'
    ];
    use HasFactory;
}
