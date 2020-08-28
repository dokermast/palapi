<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [ 'name', 'full_name', 'email', 'bio'];
}
