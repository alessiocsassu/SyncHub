<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message',
        'read_status',
        // Altri campi se necessario
    ];

    // Relazione con l'utente a cui è associata la notifica
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Altri metodi, relazioni o accessori se necessario
}
