<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = 'tblaboratorio';
    protected $fillable = ['idLab','Laboratorio'];
    public $timestamps = false;
}
