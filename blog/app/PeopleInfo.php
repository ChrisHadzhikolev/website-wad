<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleInfo extends Model
{
    public function people()
    {
        return $this->hasOne('App\UserInfo');
    }
}
