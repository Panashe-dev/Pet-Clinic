<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
   // use HasFactory;

    protected $table= 'owners';

    public function Pets()
    {
        return $this->hasMany(Pet::class);
    }
    
}
