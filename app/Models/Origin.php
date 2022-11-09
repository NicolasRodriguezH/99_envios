<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    protected $guarded = ['id', 'timestamps'];
    
    public function destinies() {
        return $this->hasMany(Destiny::class);
    }

    public function guides() {
        return $this->hasMany(Guide::class);
    }

    use HasFactory;
}
