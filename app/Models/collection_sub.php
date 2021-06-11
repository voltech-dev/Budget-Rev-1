<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collection_sub extends Model
{
    use HasFactory;
    protected $table='collection_sub';
    
    public function collection(){
        return $this->hasOne(collection::class,'id','collection_id');
    }
    public function division(){
        return $this->hasOne(division::class,'id','division_id');
    }
}