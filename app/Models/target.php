<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class target extends Model
{
    use HasFactory;
    protected $table='target';
    
    public function sales(){
        return $this->hasOne(Sale::class);
    }
}
