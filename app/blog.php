<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class blog extends Model
{
    //
    use Searchable;
    protected $fillable = ['title', 'body'];
}
