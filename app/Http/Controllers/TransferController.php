<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function index(){



        return view('UserTransfer');
    }

    public function salvar(Request $req){
        dd();

        try {

            $saldo = User::where('idUsuario', 1)->first();

            $valor = $saldo->saldo;

            $conta = Account::where('conta', $req->input('conta'))->first();

            $user = $conta->usuarioId;

            $saldo2 = User::where('idUsuario', 2);

            $saldoa = $saldo2->saldo;


            if ($req->input('valor') <= $valor) {

                $deposito = array(
                    'saldo' => ($valor - $req->input('valor'))
                );
                Account::where('usuarioId', 1)->update($deposito);

                $insere = array(
                    'saldo' => ($saldoa + $req->input('valor'))
                );

                Account::where('usuarioId', 2)->update($insere);


                return redirect()->back()->with('alert-success', 'Transação realizada com sucesso!');
            } else
                return redirect()->back()->with('alert-danger', 'Não é possivel retirar um valor maior que o disponível.');

        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }
    }


}
