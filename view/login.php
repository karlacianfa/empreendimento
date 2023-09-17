<?php 
include_once '../head.php';  
include_once '../menu.php';
?>
<!doctype html>
<html lang="pt-br">

<?php  ?>

<!-- links includes -->
<link rel="stylesheet" href="../assets/css/login.css">
<link rel="stylesheet" href="../assets/css/animated.css">
<!-- fim links includes -->

<body class="text-center">
    <div>
    </div>
    <div class="container text-center container-fluid">
        <form class="form-signin">

            <h1 class="h3 mb-3 text-light">Login</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Insira seu email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control mt-4" placeholder="Senha" required>
            <div class="checkbox mb-3">
                <label>

                    <span class=""> <a class="nav-link text-light" href="./cadastrar.php">Cadastre-se</a></span>
                </label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-light">&copy; 2023</p>
        </form>
    </div>

</body>

</html>
<?php include_once '../rodape.php'; ?>