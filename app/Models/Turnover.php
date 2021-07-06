<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turnover extends Model
{
    use HasFactory;
    protected $table= 'br_turnover';
    public function unit(){
        return $this->hasOne(unit::class,'id','unit_id');
    }
    public function company(){
        return $this->hasOne(company::class,'id','company_id');
    }
    public function division(){
        return $this->hasOne(company::class,'id','division_id');
    }
    public function year(){
        return $this->hasOne(financial_year::class,'id','financial_year_id');
    }
}
