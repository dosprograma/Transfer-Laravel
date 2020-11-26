<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $dadosUsuarioLogado = Auth::user();
        $dadosDaConta = $saldoDoUsuarioLogado = Account::query()
            ->where('usuarioId', $dadosUsuarioLogado->idUsuario)
            ->first();

        $registros = $dadosDaConta->saldo;
        return view('home', compact('registros'));
    }
}
