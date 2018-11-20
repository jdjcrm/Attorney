<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table='att_user';
    public function getGet($where){
        return $this->where($where)->get()->toArray();
    }

    public function add($insert){
        return $this->insert($insert);
    }
}
