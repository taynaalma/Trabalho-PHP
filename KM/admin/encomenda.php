<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAB0lEQVR42mP8/wcAAwAB/7ur2/AAAAABJRU5ErkJggg==">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Home</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color: #E3D2FF;">

    <header>
        <nav class="navbar navbar-expand-md fixed-top" style="background-color: #6A44A5; height: 65px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <img src="../img/logo.png" style="margin-left: 5px; height: 70px;">
                <ul class="navbar-nav mr-auto">
                    <li>
                       <a class="nav-item-principal" href="../admin/home.php">Página inicial</a>
                    </li>
                    <li>
                       <a class="nav-item" href="../admin/contato.php">Contato</a>
                    </li>
                    <li>
                        <a class="nav-item" href="../admin/encomenda.php">Encomenda</a>
                    </li>
                    <li>
                        <a class="nav-item" href="../admin/menu.php">Menu</a>
                    </li>
                    <li>
                        <a class="nav-item" href="../admin/mais.php">Mais</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" style="margin-right: 60px;">
                    <button class="btn btn-outline my-2 my-sm-0" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input class="form-control mr-sm-2" type="text" aria-label="Search" style="color: #FAF8FF;">
                </form>

            </div>
        </nav>
    </header>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/carrousel.png" alt="First slide">
                    <div class="gradient-overlay"></div>
                    <div class="container" style="width: 30px; height: 0px; margin-top: 0px;">
                        <div class="carousel-caption text-right" style="padding-bottom: 100px;">
                            <h3>O que são os famosos<br><span> Bento Cake?</span><br>descubra em nosso<br>artigo e peça já o seu!</h3>
                            <p><a class="btnvermore" href="#" role="button">Ver mais</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/carrousel2.png" alt="Second slide">
                    <div class="gradient-overlay"></div>
                    <div class="container" style="width: 30px; height: 0px; margin-top: 0px;">
                        <div class="carousel-caption text-right" style="margin-bottom: 100px;">
                            <h3>Bolinhos práticos?<br><span>Cake Pops</span><br> entenda a nova sensação<br> que ganhou espaço</h3>
                            <p><a class="btnvermore" href="#" role="button">Ver mais</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/carrousel3.png" alt="Third slide">
                    <div class="gradient-overlay"></div>
                    <div class="container" style="width: 30px; height: 0px; margin-top: 0px;">
                        <div class="carousel-caption text-right" style="margin-bottom: 100px;">
                            <h3>Tão gostosos quanto bonitos<br><span>Macarrons</span><br>confira as tão<br>famosas doçuras</h3>
                            <p><a class="btnvermore" href="#" role="button">Ver mais</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Voltar</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Avançar</span>
            </a>
        </div>

        <div class="container-fluid" style="background-color: #9169D3; margin-top: 100px;">
            <div class="row">
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="../img/p1home.jpg" alt="Generic placeholder image" style="max-width: 300px; padding-top: 100px; padding-bottom: 100px;">
                </div>
                <div class="col-md-7 text-white">
                    <h2 class="titlequem">Quem é Kacau Moon?</h2>
                    <p class="pquem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque quam sed<br> lectus semper, vitae tristique ligula vestibulum. Quisque euismod leo nec tincidunt blandit.<br> Cras condimentum ex eget ipsum elementum, quis porta mi mollis. Nulla volutpat rutrum<br> nulla in sodales. Donec nec risus semper, ornare mauris vitae, rutrum felis. Sed ac<br> pellentesque tortor. Nam non tortor in augue pellentesque pharetra. Curabitur consequat<br> efficitur enim eu rhoncus.
                        Nullam dolor ex, iaculis sed nulla in, efficitur efficitur elit. Mauris<br> iaculis sollicitudin sapien vel efficitur. </p>
                    <p class=predes>Nos siga também em nossas redes sociais:</p>
                    <a href="https://www.instagram.com/kacaumoon?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                        <img src="../img/redes.png" style="max-width: 100px;">
                    </a>
                </div>
            </div>
        </div>

        <div class="container marketing">

            <h2 class="titlecat">Explore nossas possibilidades!</h2>

            <div class="row" style="text-align:center; justify-content:center;">

                <div class="col-lg-4">
                    <img class="categoria" src="../img/bolin.jpg" alt="Generic placeholder image" width="170" height="170">
                    <h4>BOLOS</h4>
                    <p style="padding-bottom: 20px;" class="textinho">(Bento, Cupcakes e etc.)</p>
                    <p><a class="btnlevar" href="#" role="button">SAIBA MAIS</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="categoria" src="../img/copukeiko.jpg" alt="Generic placeholder image" width="170" height="170">
                    <h4>DOCES</h4>
                    <p style="padding-bottom: 20px;" class="textinho">(Macarrons, Cakepops e etc.)</p>
                    <p><a class="btnlevar" href="#" role="button">SAIBA MAIS</a></p>
                </div>
            </div>

            <div style="background-color: #9169D3; text-align: center; margin-top: 100px;">
                <a href="https://play.google.com/store/games?hl=pt_BR&pli=1" target="_blank">
                    <img src="../img/rodape.png" style="max-width: 100%; display: inline-block;">
                </a>
            </div>


            <footer class="container" style="background-color:#6A44A5; width: 100%; text-align:center; color:#F8DA70;">
                <div style="padding-top: 70px;">
                    <a href="#" class="finalzin">
                        Voltar ao topo
                    </a>
                    | 
                    <a href="#" class="finalzin">
                        Diretrizes 
                    </a>
                    | 
                    <a href="#" class="finalzin">
                        Política de Privacidade
                    </a>
                </div>
            </footer>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<style>
    .form-control {
        border-radius: 0px 45px 45px 0px;
        width: 10cm;
        background-color: #6A44A5;
        border-color: #F8DA70;
    }

    .form-control:focus {
        border-radius: 0px 45px 45px 0px;
        width: 10cm;
        background-color: #6A44A5;
        border-color: #F8DA70;
        box-shadow: none;
    }

    .btn-outline {
        color: #FAF8FF;
        border-color: #F8DA70;
        border-radius: 45px 0px 0px 45px;
    }

    .btn-outline:hover {
        color: #6A44A5;
        border-color: #F8DA70;
        background-color: #F8DA70;
    }

    .navbar {
        font-family: "Poppins", sans-serif;
    }

    .nav-item{
        color: #FAF8FF;
        font-size: 15px;
        font-weight: 600;
        margin-left: 40px;
        margin-top: 100px;
        text-align: center;
        height: 0px;
    }

    .nav-item-principal {
        color: #FAF8FF;
        font-size: 15px;
        font-weight: 600;
        margin-left: 20px;
        margin-top: 18px;
        border: 2px solid;
        border-color: #F8DA70;
        border-radius: 20px;
        padding: 7px 15px 7px 15px;
        height: 40px;
    }

    .nav-item-principal:hover {
        color: #F8DA70;
        text-decoration: none;
    }

    .nav-item:hover {
        color: #F8DA70;
        text-decoration: none;
    }

    .carousel-inner img {
        width: 100%;
        height: 500px;
    }

    h3 {
        font-family: "Poppins", sans-serif;
        color: #FAF8FF;
    }

    span {
        font-family: "Poppins", sans-serif;
        color: #F8DA70;
        font-size: 30px;
    }

    .titlequem {
        font-family: "Poppins", sans-serif;
        color: #F8DA70;
        font-weight: 600;
        font-style: italic;
        text-decoration: underline;
        padding-top: 70px;
    }

    .pquem {
        font-family: "Poppins", sans-serif;
        color: #FAF8FF;
        font-weight: 500;
        font-size: 15px;
        padding-top: 50px;
    }

    .predes {
        font-family: "Poppins", sans-serif;
        color: #F8DA70;
        font-weight: 500;
        font-size: 15px;
    }

    .categoria {
        border: solid 5px #6A44A5;
        border-radius: 100px;
    }

    .titlecat {
        font-family: "Poppins", sans-serif;
        color: #6A44A5;
        font-weight: 600;
        font-style: italic;
        text-decoration: underline;
        padding-top: 70px;
        padding-bottom: 50px;
        text-align: center;
    }

    .btnlevar {
        background-color: #F8DA70;
        border: solid 3px #6A44A5;
        font-family: "Poppins", sans-serif;
        color: #6A44A5;
        border-radius: 10px;
        padding: 10px 25px 10px 25px;
        font-weight: 600;
        font-style: italic;
    }

    .btnlevar:hover {
        color: #6A44A5;
        text-decoration: underline;
    }

    .carousel-item {
        position: relative;
    }

    .gradient-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgb(255, 255, 255);
        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(145, 105, 211, 1) 90%);
        pointer-events: none;
    }

    .btnvermore {
        color: #F8DA70;
        font-family: "Poppins", sans-serif;
    }

    .btnvermore:hover {
        color: #F8DA70;
    }

    h4 {
        font-family: "Poppins", sans-serif;
        color: #9169D3;
        font-weight: 600;
        font-style: italic;
        text-decoration: underline;
        padding-top: 10px;
    }

    .textinho {
        font-family: "Poppins", sans-serif;
        color: #9169D3;
        font-weight: 600;
        font-style: italic;
        font-size: 15px;
    }

    .container {
        max-width: 100%;
        margin-top: 50px;
        height: 150px;
    }

    .finalzin{
        font-family: "Poppins", sans-serif;
        color: #F8DA70;
        font-weight: 600;
        font-size: 15px;
        text-decoration: underline;
        padding: 0px 20px 0px 20px;
    }

    ul{
        height: 25px;
    }
</style>