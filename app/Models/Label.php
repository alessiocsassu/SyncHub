<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = [
        'label_name',
        'task_id',
        // Altri campi se necessario
    ];

    // Relazione con il task associato all'etichetta
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Altri metodi, relazioni o accessori se necessario
}
