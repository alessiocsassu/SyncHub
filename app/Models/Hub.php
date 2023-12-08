<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'created_by',
        // Aggiungi altri campi se necessario
    ];

    // Relazione con l'utente che ha creato l'hub
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relazione con gli utenti membri dell'hub
    public function members()
    {
        return $this->belongsToMany(User::class, 'hub_members', 'hub_id', 'user_id')
            ->withPivot('role'); // Se vuoi includere il ruolo degli utenti nell'hub
    }

    // Relazione con le richieste di token relative all'hub
    public function tokenRequests()
    {
        return $this->hasMany(TokenRequest::class, 'hub_id');
    }

    // Relazione con i task presenti nell'hub
    public function tasks()
    {
        return $this->hasMany(Task::class, 'hub_id');
    }

    // Altri metodi, relazioni o accessori se necessario
}
