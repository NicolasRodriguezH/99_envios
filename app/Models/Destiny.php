<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destiny extends Model
{
    /* Relation one to many inverse */
    public function origin() {
        return $this->belongsTo(Origin::class);
    }

    use HasFactory;
}
