<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/stilo.css">
</head>
<body>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="?c=u&a=cl" method="post">
                <h1 class="text-center">Login</h1>

                <div class="form-group">
                    <label class="sr-only" for="login">Usuário</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <input type="mail" name="login" class="form-control" placeholder="Seu e-mail" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="senha">Senha</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </div>
                        <input type="password" name="pass" class="form-control" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Entrar" class="btn btn-success form-control">
                </div>

                <div class="form-group">
                    <a href="http://localhost/App">Página Incial do Sistema</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
