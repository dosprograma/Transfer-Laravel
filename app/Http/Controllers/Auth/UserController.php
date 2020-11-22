<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view('FormUser');
    }


    public function salvar(Request $req){

        try {

            $dados = array(
                'idUsuario' => null,
                'nome' => $req->input('nome'),
                'CPF' => $req->input('CPF'),
                'email' => $req->input('email'),
                'password' => Hash::make($req->input('password')),
                'telefone' => $req->input('telefone'),

            );

            $usuario = new User($dados);
            $usuario->save();

            $iduser = User::where('CPF', $req->input('CPF')->select('idUsuario'));

            $dados2 = [
                'idConta' => null,
                'agencia' => '36954-6',
                'conta' => rand([3652],[4000]).'-9',
            ];

            $conta = new Account($dados2);
            $conta->save();

            return redirect()->back()->with('alert-success', 'Usuário cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Falha ao cadastrar Usuário!');
        }

    }

    public function atualizar(Request $req){

        try {
            $idu = $req->input('CPF');

            $dados = array(
                'nome' => $req->input('nome'),
                'email' => $req->input('email'),
                'password' => Hash::make($req->input('password')),
                'telefone' => $req->input('telefone')
            );

            $usuario = User::where('CPF', $idu)->update($dados);

            return redirect()->back()->with('alert-success', 'Usuário alterado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }

    }

}
