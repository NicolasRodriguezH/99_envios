<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusGuide extends Model
{

    protected $fillable = ['name', 'color'];

    /* relacion uno a muchos */
    public function guides() {
        return $this->hasMany(Guide::class);
    }

    use HasFactory;
}
