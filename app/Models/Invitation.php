<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'token',
        'hub_id',
        'invited_by',
        // Altri campi se necessario
    ];

    // Relazione con l'hub a cui fa riferimento l'invito
    public function hub()
    {
        return $this->belongsTo(Hub::class);
    }

    // Relazione con l'utente che ha inviato l'invito
    public function inviter()
    {
        return $this->belongsTo(User::class, 'invited_by');
    }

    // Altri metodi, relazioni o accessori se necessario
}
