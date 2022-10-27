<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    public function Owners()
    {
        return $this->belongsTo(Owner::class)->withDefault();
    }
    public function Visits(){
        
        return $this->hasMany(Visit::class);
    }
}
