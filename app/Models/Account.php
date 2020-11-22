<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $primaryKey = 'idConta';

    public function usuario()
    {
        return $this->belongsTo('App\User', 'usuarioId');
    }

    protected $fillable = [
        'usuarioId',
        'agencia',
        'conta',
    ];
}