<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Departement extends Model
{
    use HasFactory;
    
    public $fillable = ['id_dept','id_secd','name'];
    protected $table = 'departements';
    public $timestamps = false;
    public $created_at = false;
}
