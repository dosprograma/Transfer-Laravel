<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User([
            'contaId' => 1,
            'nome' => 'Lopez',
            'CPF' => '000.000.000/00',
            'endereco' => 'Rua azul, 208 Guarapuava',
            'telefone' => '(46) 99905-1076',
            'email' => 'usuario1@gmail.com',
            'password' => Hash::make('lopez321'),
            'remember_token' => 'KjF6hUIZ2d'
        ]);
        $usuario->save();

        $usuario2 = new User([
            'contaId' => 2,
            'nome' => 'Paulo',
            'CPF' => '063.040.080/00',
            'endereco' => 'Rua rosa, 218 Guarapuava',
            'telefone' => '(43) 99908-1076',
            'email' => 'usuario2@gmail.com',
            'password' => Hash::make('paulo321'),
            'remember_token' => 'KjF6hUIZ3d'
        ]);
        $usuario2->save();


    }
}
