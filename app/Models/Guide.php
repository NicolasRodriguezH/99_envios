<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $guarded = ['id', 'timestamps'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function receiver() {
        return $this->hasOne(Receiver::class);
    }

    /* Relacion uno a muchos (inversa) */
    public function status() {
        return $this->belongsTo(StatusGuide::class);
    }

    public function origin() {
        return $this->belongsTo(Origin::class);
    }

    public function destiny() {
        return $this->belongsTo(Destiny::class);
    }

    public function tipoEnvio() {
        return $this->belongsTo(TipoEnvio::class);
    }

    public function novelty() {
        return $this->belongsTo(Novelty::class);
    }

    use HasFactory;
}
