<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Ewm extends Model
{
    protected $table='att_ewm';
    public function ewm_desc($where){
        return $this->where($where)->orderBy('id', 'desc')->first()->toArray();
    }
}
