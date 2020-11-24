<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    public function index()
    {
        $dadosUsuarioLogado = Auth::user();
        $dadosDaConta = $saldoDoUsuarioLogado = Account::query()
            ->where('idConta', $dadosUsuarioLogado->contaId)
            ->first();

        $registros = $dadosDaConta->saldo;

        return view('UserTransfer', compact('registros'));
    }

    public function salvar(Request $req)
    {

        return DB::transaction(function () use ($req) {
            $valorParaTransferir = $req->input('valor');
            $usuarioLogado = Auth::user();

            $contaDoUsuarioLogado = $usuarioLogado->contaId;

            $saldoDoUsuarioLogado = Account::query()
                ->where('idConta', $contaDoUsuarioLogado)
                ->first();

            $contaAlvo = Account::query()
                ->where('conta', $req->input('conta'))
                ->where('agencia', $req->input('agencia'))
                ->first();

            $saldoAlvo = $contaAlvo->saldo;

            if ($valorParaTransferir > $saldoDoUsuarioLogado->saldo) {
                return redirect()->back()->with('alert-danger', 'Não é possivel retirar um valor maior que o disponível.');
            }

            $saldoDoUsuarioLogado->update([
                'saldo' => $saldoDoUsuarioLogado->saldo - $valorParaTransferir
            ]);

            $contaAlvo->update([
                'saldo' => $saldoAlvo + $valorParaTransferir
            ]);

            return redirect()->back()->with('alert-success', 'Transação realizada com sucesso!');
        });
    }
}
