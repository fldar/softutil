<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
  protected $fillable = [
   'descricao',
   'conteudo'
];

protected $table = 'utils';
}
