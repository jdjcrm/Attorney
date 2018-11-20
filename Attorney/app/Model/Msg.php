<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Msg extends Model
{
    protected $table='att_msg';
    public function getFirst($where){
        return $this->where($where)->orderByDesc('ctime')->first()->toArray();

    }
}