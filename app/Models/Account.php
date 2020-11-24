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
        return $this->hasOne('App\User', 'contaId');
    }

    protected $fillable = [
        'agencia',
        'conta',
        'saldo',
    ];
}
