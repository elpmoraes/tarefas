<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    protected $casts = [
        'finalizado' => 'boolean',
    ];
    use HasFactory;
}
