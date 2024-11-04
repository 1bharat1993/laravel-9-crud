<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    //here we are mapping customers table
    protected $table= "customers";//table name
    protected $primaryKey="customer_id";


    public function setNameAttribute($value){
        $this->attributes['name']=ucwords($value);
    }

    public function getDobAttribute($value){
       return date("d-M-Y",strtotime($value));
    }
}
