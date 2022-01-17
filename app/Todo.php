<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    public $fillable = ['kegiatan', 'is_done', 'tanggal', 'pukul', 'tempat'];
}
