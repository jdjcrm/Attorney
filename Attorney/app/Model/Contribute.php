<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Contribute extends Model
{
    protected $table='att_contribute';
    public function bute_add($insert){
        return $this->insert($insert);
    }
}
