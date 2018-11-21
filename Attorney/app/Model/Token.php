<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Token extends Model
{
    protected $table='access_token';
    public function token_sel(){
        return $this->get()->toArray();
    }
}
