<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    protected $fillable = ['novedad'];

    public function guides() {
        return $this->hasMany(Guide::class);
    }

    use HasFactory;
}
