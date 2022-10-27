<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{

    protected $guarded = ['id', 'timestamps'];

    public function guide() {
        return $this->belongsTo(Guide::class);
    }

    use HasFactory;
}
