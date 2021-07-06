<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_sub extends Model
{
    use HasFactory;
    protected $table='br_sales_sub';
    
    public function sales(){
        return $this->hasOne(Sale::class);
    }
    public function division(){
        return $this->hasOne(division::class,'id','division_id');
    }
}
