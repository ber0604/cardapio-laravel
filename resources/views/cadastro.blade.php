<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>
    <div class="col-sm-5 container pt-5">
        <h1 class="mb-3">Crie seu Cadastro</h1>
        <form name="cadastro" action="{{ route('cadastro') }}" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Nome</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Username </label>
                <input type="text" class="form-control" id="username" name="username" placeholder="" required>
            </div>

            <div class="mb-3 mt-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="*********" required>
            </div>
            <div class="mb-3 mt-3">
                <button type="submit" class="btn btn-success" >Criar meu Cadastro</button>
            </div>

        </form>
    </div>
</body>

</html>
