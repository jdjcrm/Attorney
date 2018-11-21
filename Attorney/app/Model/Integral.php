<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Integral extends Model
{
    public $timestamps=false;
    protected $table='att_integral';
    public function inte_First(){
        return $this->get()->toArray();

    }
    public function inte_add($insert){
        return $this->insert(
            $insert
        );
    }

    public function getfind($where){
        return $this->where($where)->get()->toArray();
    }
    public function inte_updata($where){
      return  $this->whereIn('id', $where)->update(['integral' => 0]);
    }
}