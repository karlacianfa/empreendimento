<?php 
include_once '../head.php';
include '../menu.php'; 
?>

<!-- links includes -->
<link rel="stylesheet" href="../assets/css/login.css">
<link rel="stylesheet" href="../assets/css/login.css">
<!-- fim links includes -->

<div class="container text-center container-fluid">
    <form class="form-signin">

        <h1 class="h3 mb-1 mt-5 text-light">Cadastro</h1>
    <div class="row">
        <label for="inputEmail" class="text-white">Nome</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Digite seu nome" required autofocus>
    </div>
    <br>
    <div class="row">
        <label for="inputEmail" class="text-white">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Digite seu e-mail" required autofocus>
    </div>
    <br>
    <div class="row">
        <label for="inputPassword" class="text-white">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Digite uma senha." required>
    </div>
    
    <br>
    <div class="row">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
    </div>
    </form>
    <p class="mt-5 mb-3 text-light">&copy; 2023</p>
</div>

<?php 
include_once '../rodape.php';
?>

