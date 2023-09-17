<?php 
include '../head.php';
?>

<link rel="stylesheet" href="../assets/css/index.css">
<link rel="stylesheet" href="../assets/css/animated.css">
<body>
    <div class="mt-0 fundoBg">
        <?php include('../menu.php'); ?>

        <div class="container">
            <div class="cover-container h-100 p-2 mx-auto flex-column centralizar">
                <main role="main" class="inner cover wow fadeInDown">
                    <h1 class="text-center"></h1>
                    <h1 class="cover-heading  font2">Bem Vindo ao empreendimento!</h1>
                    <p class=" lead animated fadeInUp delay-1s font1 ">
                        Aqui você encontra qualificação em mão de obra para atender da melhor forma a sua necessidade.
                    </p>
                    <p class="font1 "> Eficiência e qualidade você só encontra aqui!</p>
                    <p class="lead ">
                        <a href="login.php" class="btn btn-md btn-primary animated fadeInUp delay-1s ">Agende seu horário!</a>
                    </p>
                </main>

            </div>
        </div>
    </div>


    <section class="section2 mb-5 ">

        <div class="container ">
            <h1 class="text-center mt text-warning font3"> ~ O espaço </h1>
        </div>

        <div class="container mt-5 wow fadeIn">
            <div class="row ">
                <div class="col-md-7">
                    <h2 class="font1 ">First featurette heading.
                        <span class="text-muted ">It’ll blow yourmind.</span>
                    </h2>
                    <p class="lead font1 ">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                    </p>
                </div>
                <div class="col-md-5 ">

                    <img src="../assets/img/em-breve.png" class="rounded shadow-lg img-fluid" alt="21w ">

                </div>
            </div>
        </div>
        <hr class="featurette-divider">

    </section>


    <section class="section3">
        <div class="margem"> </div>
        <div class="container">

            <h1 class="text-center text-warning font3"> ~ Profissional </h1>

        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 justify-content-center mt-5" style="margin-top:10%; ">
                <div class="col mt-2">
                    <div class="card shadow rounded wow fadeIn">
                        <img class="card-img-top" src="../img/foto-sem-image.png" alt="Imagem de capa do card " width="200 " height="200 ">
                        <div class="card-body">
                            <h5 class="card-title"><strong class="text-danger"> Nome: </strong>Nome</h5>
                            <p class="card-text text-preto ">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                            </p>
                            <span class="col" style="margin-left:-15px; ">
                                <a href="https://www.instagram.com/ " target="_blank ">
                                    <img src="https://img.icons8.com/color/48/000000/instagram-new.png " height="30 " alt="Instagram Funcionário ">
                                </a>

                            </span>
                        </div>
                    </div>
                </div>

                <!-- <div class="col mt-2">
                    <div class="card shadow rounded">
                        <img class="card-img-top" src="img/barber2.jpg " alt="Imagem de capa do card " width="200 " height="200 ">
                        <div class="card-body">
                            <h5 class="card-title"><strong class="text-primary"> 02.</strong> Ricardo Brito</h5>
                            <p class="card-text text-preto">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                            </p>
                            <span class="col" style="margin-left:-15px; ">
                                <a href="https://www.instagram.com/Imantel " target="_blank ">
                                    <img src="https://img.icons8.com/color/48/000000/instagram-new.png " height="30 " alt="Instagram Funcionário ">
                                </a>

                            </span>
                        </div>
                    </div>
                </div>
                <div class="col  mt-2 mb-4">
                    <div class="card shadow rounded wow fadeIn">
                        <img class="card-img-top" src="img/barber3.jpg " alt="Imagem de capa do card " width="200 " height="200 ">
                        <div class="card-body">
                            <h5 class="card-title "><strong class="text-success "> 03.</strong> Victor Cardoso</h5>
                            <p class="card-text text-preto ">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>

                            <span class="col" style="margin-left:-15px; ">
                                <a href="https://www.instagram.com/Imantel " target="_blank ">
                                    <img src="https://img.icons8.com/color/48/000000/instagram-new.png " height="30 " alt="Instagram Funcionário ">
                                </a>

                            </span>

                        </div>
                    </div>
                </div> -->


            </div>

        </div>
    </section>

    <section class="section4 dark" id="servico">
        <div class="margem"></div>
        <div class="container">
            <h1 class="text-center text-warning font3">- Todos serviços ... </h1>

            <div class="container">
                <div class="container">
                    <div class="row justify-content-center" id="escuro_cor">

                        <div class="col-md-3 card-deck mb-3 text-center wow fadeIn">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Combo Simples</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title ">R$30 </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <!-- <li>Barba e Cabelo</li> -->
                                    </ul>
                                    <a href="./login.php" class="btn btn-sm btn-block btn-outline-primary" target="_blank">Agendar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 card-deck mb-3 text-center">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal text-primary">Combo Moderno</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">R$40 </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <!-- <li>Barba e Cabelo</li>
                                        <li>Sobrancelhas</li> -->
                                    </ul>
                                    <a href="./login.php" class="btn btn-sm btn-block btn-outline-primary" target="_blank">Agendar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 card-deck mb-3 text-center wow fadeIn">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal text-success">Combo Full</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">R$50 </h1>
                                    <ul class="list-unstyled mt-3 mb-4 ">
                                        <!-- <li>Barba e Cabelo</li>
                                        <li>Sobrancelhas</li>
                                        <li>Hidratação capilar</li> -->
                                    </ul>
                                    <a href="./login.php" class="btn btn-sm btn-block btn-outline-primary" target="_blank">Agendar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 card-deck mb-3 text-center">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal text-warning">GOLD</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">R$70 </h1>
                                    <ul class="list-unstyled mt-3 mb-4 ">
                                        <!-- <li>Barba e Cabelo</li>
                                        <li>Sobrancelhas</li>
                                        <li>Hidratação capilar</li>
                                        <li>Tintura barba e cabelo</li> -->
                                    </ul>
                                    <a href="./login.php" class="btn btn-sm btn-block btn-outline-primary" target="_blank">Agendar</a>
                                </div>
                            </div>
                        </div>
                        <p class=" float-right text-warning font3">Preços unitários e muuuito mais <a href="./login.php " class=" btn btn-outline-primary text-light" target="_blank">Agendar</a> </p>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <section class="section-galeria  dark" id="galeria">
        <div class="margem"></div>
        <div class="container">
            <h1 class="text-center text-warning font3">- Galeria ... </h1>
        </div>
    </section>



    <section class=" section5" id="contato">

        <div style="height: 40px;"></div>
        <div class="container">
            <h2 class=" text-warning text-center font3"> Fale conosco...</h2>
            <form action=" " method="GET" class="offset-md-3 wow slideInLeft">

                <div class="form-group text-light">
                    <label for="InputNome">Seu nome:</label>
                    <input type="name" required class="form-control shadow rounded col-md-7 col-form-label-lg " id="InputNome " aria-describedby="nameHelp ">

                </div>
                <div class="form-group text-light ">
                    <label for="InputEmail">E-mail:</label>
                    <input type="email" required class="form-control shadow rounded col-md-7 col-form-label-lg " aria-describedby="emailHelp " id="InputEmail ">
                </div>
                <div class="form-group text-light ">
                    <label for="InputFone">Telefone:</label>
                    <input type="phone" required class="form-control shadow rounded col-md-7 col-form-label-lg " id="InputFone ">

                </div>
                <div class="form-group text-light">
                    <label for="InputCity ">Cidade:</label>
                    <input type="city" class="form-control shadow rounded col-md-7 col-form-label-lg " id="InputCity ">

                </div>
                <div class="form-group text-light">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control col-md-7 shadow rounded " required id="mensagem " rows="3 "></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-3 ">Enviar</button>
            </form>
        </div>

    </section>

    <section class="section6">
        <div style="height: 30px;"> </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 dark">
                    <div class="ml-5 row row-cols-4">
                        <span class="col">
                            <a href="https://www.facebook.com/ " target="_blank ">
                                <img src="../assets/img/icons/icons8-facebook-novo-48.png " alt="Facebook Barber ">
                            </a>

                        </span>
                        <span class="col" style="margin-left:20px; ">
                            <a href="https://www.instagram.com/ " target="_blank ">
                                <img src="../assets/img/icons/icons8-instagram-48 (1).png " alt="Instagram Barber " title="Instagran Barber ">
                            </a>

                        </span>
                        <span class="col" style="margin-left:20px; ">
                            <a href="https://api.whatsapp.com/send?phone=5533999304442&text=Ol%C3%A1%2C%20Quero%20saber%20mais%20sobre%20a%20Paulo%20Barber. " target="_blank ">
                                <img src="../assets/img/icons/icons8-whatsapp-48.png " alt="WhatsApp Barber " title="WhatsApp Barber ">
                            </a>

                        </span>

                    </div>
                    <p class="col font1"><br> Empreendimento, ©Copyright 2023.
                        <i class="text-secondary"> Desenvolvido por Karla Cianfa</i>
                    </p>
                </div>
                <div class="col-md-7">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118429.36180287605!2d-51.47963623848591!3d-21.937720665655576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493fed3189757eb%3A0xa81beafef1962aec!2sAlfredo%20Marcondes%20-%20SP%2C%2019180-000!5e0!3m2!1spt-BR!2sbr!4v1694957139709!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>                </div>

            </div>
        </div>
        <div class="margem"></div>
        <div style="height: 30px;"> </div>

    </section>

<?php 
include '../rodape.php';
?>










<!--  IMAGENS OU ICONES
# <a href="https://icons8.com/icon/118991/cardápio ">Cardápio icon by Icons8</a>
# Imagem de <a href="https://pixabay.com/pt/users/amsartemis-6732917/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3071690 ">alvaro moretti AmS</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3071690 ">Pixabay</a>
#  Imagem de <a href="https://pixabay.com/pt/users/Pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1867788 ">Pexels</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1867788 ">Pixabay</a>
#Imagem de <a href="https://pixabay.com/pt/users/Pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1867788 ">Pexels</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1867788 ">Pixabay</a>
#
#
#
#








-->