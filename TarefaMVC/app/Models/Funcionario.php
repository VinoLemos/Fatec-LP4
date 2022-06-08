<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;
    //use HasFactory;
    protected $fillable = ['id',
                         'nome',
                      'salario',
               'dataNascimento',
                     'endereco',
                     'telefone',
                     'email'];
}
