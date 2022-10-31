<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $fillable = ['name', 'color'];

    /* relacion muchos a muchos */
    public function guides() {
        return $this->belongsToMany(Guide::class);
    }

    use HasFactory;
}
