<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_sales extends Model
{
    use HasFactory;
    protected $table='sub_sales';
    
    public function sales(){
        return $this->hasOne(Sale::class);
    }
}
