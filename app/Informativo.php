<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informativo extends Model
{
  protected $fillable = [
     'id',
     'titulo',
     'conteudo',
     'pessoa'
];

protected $table = 'informativos';
}
