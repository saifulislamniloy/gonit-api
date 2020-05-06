<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OthersModel extends Model
{
    protected $table = 'others';
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
