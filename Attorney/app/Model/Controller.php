<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Contribute extends Model
{
    protected $table='att_contribute';
    public function Contribute_arr(){
        return $this->get();

    }
}