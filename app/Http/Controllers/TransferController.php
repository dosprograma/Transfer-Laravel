<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index(){

        return view('UserTransfer');
    }

    public function salvar(Request $req){


        try {

            $saldo = User::where('idUsuario', Auth::user()->idUsuario)->first();

            $valor = $saldo->saldo;

            $saldo2 = User::where('idUsuario', $req->input('usuarioId'))->first();

            $saldoa = $saldo2->saldo;

            if ($req->input('saldo') <= $valor) {

                $deposito = array(
                    'saldo' => ($valor - $req->input('valor'))
                );
                Account::where('usuarioId', Auth::user()->idUsuario)->update($deposito);

                $insere = array(
                    'saldo' => ($saldoa + $req->input('valor'))
                );

                Account::where('usuarioId', $req->input('idUsuario'))->update($insere);


                return redirect()->back()->with('alert-success', 'Transação realizada com sucesso!');
            } else
                return redirect()->back()->with('alert-danger', 'Não é possivel retirar um valor maior que o disponível.');

        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }
    }


}
