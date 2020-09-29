<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Subdepartment extends Model
{
    use HasFactory;
    protected $table = "subdepartments";
    public function department()
    {
        return $this->hasOne('App\Models\Department','id','departments_id');
    }
    public function team()
    {
        return $this->hasMany('App\Models\Team','subdepartments_id','id');
    }
}
