<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conta = new Account([
            'usuarioId' => 1,
            'agencia' => '36954-6',
            'conta' =>'3254-9',
            'saldo' => 5000.36
        ]);
        $conta->save();

        $conta2 = new Account([
            'usuarioId' => 2,
            'agencia' => '36954-6',
            'conta' =>'3563-9',
            'saldo' => 5000.36
        ]);
        $conta2->save();
    }
}
