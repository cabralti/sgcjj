<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
      'academy',
      'athlete',
      'type_document',
      'path'
    ];
}
