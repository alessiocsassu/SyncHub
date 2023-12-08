<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HubMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'hub_id',
        'user_id',
        'role',
        // Altri campi se necessario
    ];

    // Relazione con l'hub a cui appartiene il membro
    public function hub()
    {
        return $this->belongsTo(Hub::class);
    }

    // Relazione con l'utente che è membro dell'hub
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Altri metodi, relazioni o accessori se necessario
}
