<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'user_id',
        'comment_text',
        // Altri campi se necessario
    ];

    // Relazione con il task a cui si riferisce il commento
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Relazione con l'utente che ha scritto il commento
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Altri metodi, relazioni o accessori se necessario
}
