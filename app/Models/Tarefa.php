<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'prazo_final',
        'status',
        'usuario_id'
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
