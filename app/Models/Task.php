<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'created_by',
        'hub_id',
        // Altri campi se necessario
    ];

    // Relazione con l'utente che ha creato il task
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relazione con l'hub a cui il task appartiene
    public function hub()
    {
        return $this->belongsTo(Hub::class);
    }

    // Relazione con gli utenti a cui è stato assegnato il task
    public function assignedUsers()
    {
        return $this->belongsToMany(User::class, 'assignments', 'task_id', 'assigned_to');
    }

    // Relazione con i commenti relativi al task
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relazione con le etichette associate al task
    public function labels()
    {
        return $this->hasMany(Label::class);
    }

    // Relazione con gli allegati relativi al task
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    // Altri metodi, relazioni o accessori se nec
}
