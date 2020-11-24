<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/theme.css') }}" type="text/css">
</head>

<body >
<div class="py-5 text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-6 col-10">
                <h1 class="mb-4">Cadastro de Usuário</h1>
                <form method="post" action="{{ route('userSave') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6"> <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"> </div>
                        <div class="form-group col-md-6"> <input type="text" class="form-control" id="CPF" name="CPF" placeholder="CPF"> </div>
                        <div class="form-group col-md-6"> <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço"> </div>
                        <div class="form-group col-md-6"> <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone"> </div>
                        <div class="form-group col-md-6"> <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"> </div>
                        <div class="form-group col-md-6"> <input type="password" class="form-control" id="password" name="password" placeholder="Senha"> </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
