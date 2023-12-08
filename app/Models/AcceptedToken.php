<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'token_request_id',
        'user_id',
        // Altri campi se necessario
    ];

    // Relazione con la richiesta di token accettata
    public function tokenRequest()
    {
        return $this->belongsTo(TokenRequest::class);
    }

    // Relazione con l'utente che ha accettato il token
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Altri metodi, relazioni o accessori se necessario
}
