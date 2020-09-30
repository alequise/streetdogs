<!DOCTYPE html>
<html lang="pt_PT">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="animal protection">
      <meta name="author" content="Juliana Fortes">

      <title>StreetDogs | Associação de Protecção Animal</title>
      <link rel="shortcut icon" href="img/icon.png" />

      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/3f2fb249a0.js" crossorigin="anonymous"></script>

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

      <!-- Theme CSS - Includes Bootstrap -->
      <link href="css/creative.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/w3.css">
  </head>

  <body id="page_top">

<!-- NAVBAR  ========================================================= -->

    <?php include("header.php");?>

<main class="main">
    <div class="jumbo">
        </br>
        <div class="container">
            <p class="breadcrumbs"><a href="index.html">Home</a> > Contacto</p>
            <h1 class="jumbotron_tit">Contacto</h1>
        </div>
    </div>
    <section class="association-section" id="help">
        <div class="container">
            <p class="text-contact-section wrap-association-text">Dúvidas, sugestões ou quer adotar um animal? Não hesite em enviar mensagem. <br>Se preferir, entre em contacto diretamente por email: <a class="click-link" href="geral@streetdogs.pt" target="_blank">geral@streetdogs.pt</a></p>
        </div>
    </section>
    <section class="form-section">
        <div class="contact-left">
            <div class="form-contact-wrap">
                <form id="form-contacto" method="POST" action="mail/mail_contacto.php">
                  <div class="row-contact">
                    <p class="text-contact-section">Por favor, preencha os campos abaixo:</p>
                    <div>
                      <input class="contact-input" type="text" placeholder="Nome*" required name="name">
                    </div>
                    <div>
                      <input class="contact-input" type="text" placeholder="Email*" required name="email">
                    </div>
                    <textarea class="contact-input" type="text" placeholder="Menssagem*" rows="5" required name="message"></textarea>
                    <p class="camp_obrigatorios text-muted ">* Campos obrigatórios</p>
                    <button class="btn-contact btn" type="submit" name="btn_enviar">
                      <i class="fa fa-paper-plane"></i>ENVIAR
                    </button>
                  </div>
                </form>
              </div>
        </div>
        <div class="contact-right">
            <div class="ilustra-right">
                <img class="ilustra-contact-web" src="./img/contact/ilustra-right-web.jpg" alt="ilustração com um cão e uma pessoa">
                <img class="ilustra-contact-mobile" src="./img/contact/ilustra-right-mobile.jpg" alt="ilustração com um cão e uma pessoa">
            </div>
        </div>
    </section>
</main>

<!-- Contact Section -->
<?php include("footer.php"); ?>
    
<!-- Custom scripts for this template -->
<script src="js/script.js"></script>

</body>
</html>