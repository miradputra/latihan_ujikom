<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangStudi extends Model
{
    protected $fillable = ['bidang_kode','bidang_nama'];
     public $timetamps = 'true';     
}
