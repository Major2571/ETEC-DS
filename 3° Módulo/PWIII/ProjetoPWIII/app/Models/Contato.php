<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model {
    protected $table = 'tbContato';
    protected $fillable = ['idContato','nome','email','assunto','mensagem'];
    public $timestamps = false;

}
