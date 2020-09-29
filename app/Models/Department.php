<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subdepartment;
class Department extends Model
{
    use HasFactory;
    protected $table = "departments";
    public function subdepartment()
    {
        return $this->hasMany('App\Models\Subdepartment','departments_id','id');
    }
}
