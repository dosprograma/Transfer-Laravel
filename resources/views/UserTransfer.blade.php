<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
<div class="py-3 text-center">
    <div class="container">
        <div class="row" >
            <div class="mx-auto p-4 col-lg-7">
                <h1 class="mb-4">Realizar Transferência</h1>
                <form method="post" action="/TransferSave">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6"> <input type="text" class="form-control" id="agencia" placeholder="Agência"> </div>
                        <div class="form-group col-md-6"> <input type="text" class="form-control" id="conta" placeholder="Conta"> </div>
                        <div class="form-group col-md-6"> <input type="number" step="0.01" class="form-control" id="valor" placeholder="Valor"> </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" style=""></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>

</body>

</html>
