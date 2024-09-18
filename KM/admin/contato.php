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
                        <a class="nav-item" href="../admin/home.php">Página inicial</a>
                    </li>
                    <li>
                        <a class="nav-item-principal" href="../admin/contato.php">Contato</a>
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

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/carrou2.png" alt="First slide">
                <div class="gradient-overlay"></div>
                <div class="container" style="width: 30px; height: 0px; margin-top: 0px;">
                    <div class="carousel-caption text-right" style="padding-bottom: 100px;">
                        <h3><span>CONTATO</span><br>Fale conosco!</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid" style="background-color: #9169D3; margin-top: 50px;">
            <div class="row">
                <div class="col-md-7 text-white">
                    <h2 class="titlecont">Entre em contato imediato</h2>
                    <a href="https://www.instagram.com/kacaumoon?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                        <img src="../img/conts.png" style="max-width: 300px; padding: 25px 0px 25px 25px;">
                    </a>
                </div>
            </div>
        </div>

        <h2 class="titlecont2">Ou nos envie uma mensagem</h2>

        <div class="container mt-3">
            <form id="frmCadastro" action method="post">
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-6 mb-2">
                        <div class="form-group">
                            <input
                                placeholder="Nome"
                                type="text"
                                class="formcont"
                                id="txtNome"
                                required minlength="3"
                                maxlength="50"
                                name="txtNome" required
                                style="padding-left: 20px;" />
                        </div>
                        <div class="form-group">
                            <input
                                placeholder="Telefone"
                                type="text"
                                class="formcont"
                                id="txtelefone"
                                name="txtelefone" required
                                style="padding-left: 20px;" />
                        </div>
                        <div class="form-group">
                            <input
                                placeholder="Email"
                                type="email"
                                class="formcont"
                                id="txtEmail"
                                minlength="10"
                                maxlength="30"
                                name="txtEmail"
                                style="padding-left: 20px;" />
                        </div>
                        <div class="form-group">
                            <input
                                placeholder="Cidade"
                                type="text"
                                class="formcont"
                                id="txtCidade"
                                minlength="3"
                                name="txtCidade" required
                                style="padding-left: 20px;" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mb-2">
                        <div class="form-group">
                            <textarea
                                placeholder="Descrição"
                                type="text"
                                class="formcont"
                                id="txtDescrição"
                                minlength="3"
                                name="txtDescrição" required
                                style="padding-left: 20px; height: 208px; padding-top: 10px;"> </textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="checkbox" id="aceiton" required>
                    <label for="aceiton" class="pquem" style="padding: 0px;">Declaro que li e concordo com a Política de Privacidade de Kacau Moon</label>
                </div>

                <div class="form-group mt-3">
                    <input
                        type="submit"
                        id="btnSalvar"
                        class="btnlevar"
                        value="Enviar" />
                </div>
            </form>

            <div class="col-md-12 col-sm-12 mb-3 mt-3">
                <table id="tblListar" class="table table-sm">
                </table>
            </div>
        </div>


        <h2 class="titlecont2" style="padding-top: 250px;">Dúvidas frequentes</h2>
        <p class="pduvida">Selecione algum dos tópicos abaixo e confira se algum corresponde a sua dúvida</p>
        
        
        <div class="dropdown">
            <a class="btndrop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Entrega
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Alguma ação</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <a class="dropdown-item" href="#">Alguma coisa aqui</a>
            </div>
        </div>

        <div class="dropdown">
            <a class="btndrop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pagamento
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Alguma ação</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <a class="dropdown-item" href="#">Alguma coisa aqui</a>
            </div>
        </div>

        <div class="dropdown">
            <a class="btndrop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reembolso
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Alguma ação</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <a class="dropdown-item" href="#">Alguma coisa aqui</a>
            </div>
        </div>

        <div class="dropdown">
            <a class="btndrop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Encomenda
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Alguma ação</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <a class="dropdown-item" href="#">Alguma coisa aqui</a>
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

    .nav-item {
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

    .titlecont {
        font-family: "Poppins", sans-serif;
        color: #E3D2FF;
        font-weight: 600;
        text-decoration: underline;
        padding-top: 50px;
        padding-left: 25px;
    }

    .titlecont2 {
        font-family: "Poppins", sans-serif;
        color: #9169D3;
        font-weight: 600;
        text-decoration: underline;
        padding-top: 50px;
        padding-left: 25px;
        padding-bottom: 25px;
    }

    .pquem {
        font-family: "Poppins", sans-serif;
        color: #9169D3;
        font-weight: 500;
        font-size: 15px;
        padding: 10px 0px 15px 25px;
    }

    .pduvida {
        font-family: "Poppins", sans-serif;
        color: #6A44A5;
        font-weight: 600;
        font-size: 20px;
        padding: 0px 0px 15px 25px;
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

    .finalzin {
        font-family: "Poppins", sans-serif;
        color: #F8DA70;
        font-weight: 600;
        font-size: 15px;
        text-decoration: underline;
        padding: 0px 20px 0px 20px;
    }

    ul {
        height: 25px;
    }

    .formcont {
        border-radius: 45px;
        border: 2px solid #6A44A5;
        background-color: #E3D2FF;
        color: #6A44A5;
        font-size: 15px;
        width: 600px;
        height: 40px;
        font-weight: 600;
        font-family: "Poppins", sans-serif;
    }

    .formcont:focus {
        border: 2px solid #6A44A5;
        background-color: #E3D2FF;
        color: #6A44A5;
        outline: none;
        box-shadow: 0px 4px 10px rgba(145, 105, 211, 0.5);
    }

    placeholder {
        padding-left: 20px;
    }

    .formcont::placeholder {
        color: #6A44A5;
        opacity: 1;
    }

    .btndrop{
        background-color: #6A44A5;
        color: #FAF8FF;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        border-radius: 10px;
        padding: 10px 125px 10px 125px;
        margin-left: 25px;
        text-align: center;
    }

    .btndrop:hover{
        color: #E3D2FF;
    }

    .dropdown{
        margin-bottom: 40px;
    }
</style>