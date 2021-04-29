<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collection_target extends Model
{
    use HasFactory;
    protected $table='collection_target';
    
    public function collection(){
        return $this->hasOne(Collection::class);
    }
}
