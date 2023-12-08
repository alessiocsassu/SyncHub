<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'token',
        'password',
        // Aggiungi altri campi se necessario
    ];

    // Relazione con gli hub creati dall'utente
    public function createdHubs()
    {
        return $this->hasMany(Hub::class, 'created_by');
    }

    // Relazione con gli hub a cui l'utente appartiene
    public function memberOfHubs()
    {
        return $this->belongsToMany(Hub::class, 'hub_members', 'user_id', 'hub_id')
            ->withPivot('role'); // Se vuoi includere il ruolo dell'utente nell'hub
    }

    // Relazione con le richieste di token create dall'utente
    public function tokenRequests()
    {
        return $this->hasMany(TokenRequest::class, 'created_by');
    }

    // Relazione con i token accettati dall'utente
    public function acceptedTokens()
    {
        return $this->hasMany(AcceptedToken::class, 'user_id');
    }

    // Altri metodi, relazioni o accessori se necessario
}
