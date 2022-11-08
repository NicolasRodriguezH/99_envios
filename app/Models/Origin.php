<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    
    public function destinies() {
        return $this->hasMany(Destiny::class);
    }

    use HasFactory;
}
