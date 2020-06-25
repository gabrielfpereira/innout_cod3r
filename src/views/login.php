<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comun.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>IN N OUT</title>
</head>

<body>

    <form class="form-login" action="#" method="post">
        <div class="card login-card">
            <div class="card-header">
                <i class="icofont-travelling"></i>
                <span class="font-weight-light ml-2">In</span>
                <span class="font-weight-bold mx-2">N'</span>
                <span class="font-weight-ligth mr-2">Out</span>
                <i class="icofont-runner-alt-1"></i>
            </div>
            <div class="card-body">
                <?= include_once(TEMPLATE_PATH . '/message.php') ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= $email ?>" placeholder="Informe o email" autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Informe sua senha" autofocus>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>

</html>