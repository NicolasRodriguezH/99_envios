<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $guarded = ['id', 'timestamps'];

    public function receiver() {
        return $this->hasOne(Receiver::class);
    }

    public function rapiRadicado() {
        return $this->hasOne(RapiRadicado::class);
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

    use HasFactory;
}
