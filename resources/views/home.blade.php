@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bem vindo(a)') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <form>
                            <table class="table" style="">
                                <thead>
                                <tr>
                                    <th>Saldo Disponível:</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">{{$registros}}</th>
                                    <td> <a class="nav-link" href="{{ route('/Transfer') }}"> Transferir </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
