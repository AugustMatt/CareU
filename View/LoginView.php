<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareU - Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery 3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- CSS da pagina -->
    <link rel="stylesheet" href="../css/LoginView.css">

</head>

<body class="nighty vh-100">

    <!-- Conteudo principal da pagina -->
    <main class="h-100">

        <!-- Sessão relacionada ao login -->
        <section class="d-flex justify-content-center align-items-center h-100">

            <!-- Container que regula o tamanho do formulario de login -->
            <div class="container col-4">

                <!-- Login Card -->
                <div class="card text-center">

                    <div class="card-header">
                        <b>CareU</b> - Faça login para iniciar a sessão
                    </div>

                    <div class="card-body">

                        <!-- Login Form -->
                        <form>
                            <div class="input-group mb-3">
                                <span id="username-title" class="input-group-text">Usuario</span>
                                <input name="username-input" class="form-control" type="text" placeholder="Nome de usuario" aria-label="Nome de usuario" aria-describedby="username-title">
                            </div>
                            <div class="input-group mb-3">
                                <span id="password-title" class="input-group-text">Senha</span>
                                <input name="password-input" class="form-control" type="password" placeholder="Senha" aria-label="Senha" aria-describedby="password-title">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </form>
                        <!-- Login Form -->

                    </div>

                    <div class="card-footer">
                        <div class="form-check form-switch d-flex justify-content-end">
                            <input class="form-check-input mx-1 " type="checkbox" role="switch" id="bg-animation-check" checked>
                            <label class="form-check-label" for="bg-animation-check">Animação de fundo</label>
                        </div>
                    </div>



                </div>
                <!-- Login Card-->

            </div>
            <!-- Container que regula o tamanho do formulario de login -->

        </section>
        <!-- Sessão relacionada ao login -->

    </main>
    <!-- Corpo da pagina -->

</body>

</html>