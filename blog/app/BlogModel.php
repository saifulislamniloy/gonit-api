<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
}
