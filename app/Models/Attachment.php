<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'file_path',
        'description',
        // Altri campi se necessario
    ];

    // Relazione con il task associato all'allegato
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Altri metodi, relazioni o accessori se necessario
}
