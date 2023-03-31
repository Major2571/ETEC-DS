<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuemSomos extends Model
{
    // use HasFactory;
    protected $table = 'tbQuemSomos';
    protected $fillable = [ 'idQuemSomos', 'nome', 'sobrenome'];
    public $timestamps = false;
}
