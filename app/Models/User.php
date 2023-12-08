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
        'password',
        // Altri campi se necessario
    ];

    protected $hidden = [
        'password',
        'remember_token',
        // Altri campi nascosti se necessario
    ];

    // Relazione con i task assegnati all'utente
    public function assignedTasks()
    {
        return $this->hasMany(Task::class, 'assigned_to');
    }

    // Relazione con i task creati dall'utente
    public function createdTasks()
    {
        return $this->hasMany(Task::class, 'created_by');
    }

    // Altri metodi, relazioni o accessori se necessario
}
