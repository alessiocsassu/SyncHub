<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'hub_id',
        'token',
        'created_by',
        // Altri campi se necessario
    ];

    // Relazione con l'hub a cui fa riferimento la richiesta di token
    public function hub()
    {
        return $this->belongsTo(Hub::class);
    }

    // Relazione con l'utente che ha creato la richiesta di token
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Altri metodi, relazioni o accessori se necessario
}
