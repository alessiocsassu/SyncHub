<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'assigned_to',
        // Altri campi se necessario
    ];

    // Relazione con il task assegnato
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Relazione con l'utente a cui è stato assegnato il task
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Altri metodi, relazioni o accessori se necessario
}
