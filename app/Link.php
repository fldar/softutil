<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  protected $fillable = [
     'site',
     'link'
];

protected $table = 'links';
}
