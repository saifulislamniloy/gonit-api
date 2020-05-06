<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChapterModel extends Model
{
    protected $table = 'chapter';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
