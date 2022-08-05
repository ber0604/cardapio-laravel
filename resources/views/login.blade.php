<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="col-sm-5 container pt-5">
        <h1>Login</h1>
        @if (session('erro'))
            <div>
                {{ session('erro') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control"
                    placeholder="Entre com seu username" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
            <div class="mb-3">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Entre com sua senha" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
            <div class="mb-3">
                <a href="{{ route('cadastro') }}" style="color: #dc3545" target="_blank">Não possuo cadastro</a>
            </div>

            <div class="mb-3">
                <input name="submit" type="submit" value="Login" />
            </div>

        </form>
    </div>

</body>

</html>
