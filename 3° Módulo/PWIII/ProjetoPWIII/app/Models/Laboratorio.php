<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = 'tblaboratorio';
    protected $fillable = ['id','Laboratorio'];
    public $timestamps = false;
}
