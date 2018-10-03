<?php

namespace Tupa\Translate;

use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    protected $table = 'localization';
    protected $fillable = ['in_code','en','vn','page'];
}
