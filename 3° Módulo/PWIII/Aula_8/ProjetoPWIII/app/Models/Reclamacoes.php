<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamacoes extends Model
{
    // use HasFactory;
    protected $table = 'tbReclamacao';

    protected $fillable = [ 'idRec', 'idLab', 'pc', 'titulo', 'descricao', 'dtCriacao'];

    public $timestamps = false;
}
