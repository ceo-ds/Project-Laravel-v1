<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $fillable = [
        'id_loc',
        'id_secl',
        'name',
        'address',
        'city',
        'state',
        'country',
    ];

    public $timestemps = true;
}
