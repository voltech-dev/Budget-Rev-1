<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turnover_sub extends Model
{
    use HasFactory;
    protected $table='turnover_sub';
    
    public function turnover(){
        return $this->hasOne(Turnover::class,'id','turnover_id');
    }
    public function division(){
        return $this->hasOne(division::class,'id','division_id');
    }
}