<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turnover_target extends Model
{
    use HasFactory;
    protected $table='turnover_target';
    
    public function turnover(){
        return $this->hasOne(Turnover::class);
    }
}