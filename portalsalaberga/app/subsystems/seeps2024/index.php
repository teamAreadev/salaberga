
<?php
require_once('modals/modalLogin.php');
if(isset($_SESSION['email'])){
    header('location:inicio.php');
}






?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/icone_salaberga.png" type="image">
  <meta name="description" content="">
  <title>Index</title>
  
  <style type="text/css">
  
  #menu-9{
    height: 12%;
    background-color: rgb(239, 239, 239);;
  }

  #features6-a{
    background-color: rgb(139, 139, 139);
    height: 58%;
  }

  #contacts1-b{
    background-color: rgb(46, 46, 46);
    padding-top: 40px;
    padding-bottom: 60px;
    height: 30%;
  }

  
  
  #menu-9{
    height: 12%;
    background-color: rgb(239, 239, 239);;
  }

  #features6-a{
    background-color: rgb(139, 139, 139);
    height: 58%;
  }

  #contacts1-b{
    background-color: rgb(46, 46, 46);
    padding-top: 40px;
    padding-bottom: 60px;
    height: 30%;
  }

  #btn_cad{
    font-family: raleway;
    font-weight:bold;
    padding-right: 95px;
    padding-left: 95px;
  }

  #text_cad{
    color: white;
    font-family: raleway;
    font-size: 18px;
    font-weight:bold;
    letter-spacing: 3px;
    }


  #optModal{
    font-size: 20px;
    width: 100%;
    height: 30px;
    padding-left: 10px;
    font-weight: bold;
  }


  #inputModal3{
    width: 100%;
    height: 30px;
    padding-left: 10px;
    font-size: 14px;
    font-weight: bold;
   
  }

  #separador1{
    width: 100%;
    height: 50px;
    margin-top: 50px;
    margin-bottom: -3px;
  }
  #separador2{
    width: 100%;
    height: 50px;
    margin-top: 5px;
    margin-bottom: 3px;
  }
  #separador3esquerda{
    width: 206px;
    height: 50px;
    float: left;
    margin-right: 5.3px;
  }
  #separador3direita{
    width: 206px;
    height: 50px;
    float: left;
  }
  #separador4esquerda{
    width: 101px;
    height: 50px;
    float: left;
    margin-right: 4.5px;  
  }
  #separador4direita{
    width: 101px;
    height: 50px;
    float: left;
  }

  #separadorBtn{
    width: 100%;
    height: 50px;
    margin-top: 20px;
  }


#btn1{
  width: 100%;  
  opacity:1.2px;
}

#btnTexto{
  font-size:16px;  
  font-family:raleway;  
  letter-spacing:3px;
      font-weight:bold;

}

#separador{
  height: 5px;
  width: 100%;
}


  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

  

  
</head>
<body>
<section id="menu-9">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="#" class="navbar-logo"><img src="assets/images/ImagemX.png" alt=""></a>
                        
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">

                        <li class="nav-item nav-btn">
                          <a id="modal-743975" href="#modal-container-743975" role="button" class="nav-link btn btn-secondary-outline btn-secondary" data-toggle="modal">        
                              ENTRAR
                          </a>
                        </li>
                        </ul>
                          <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon">
                          
                        </div>
                    </button>
                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="#"></a></section>
<section class="mbr-cards mbr-section mbr-section-nopadding mbr-after-navbar" id="features6-a">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><a  class="etl-icon icon-genius mbr-iconfont mbr-iconfont-features3"></a></div>
                  <div class="card-block">
                    <h4 class="card-title">ENFERMAGEM</h4>
                  </div>
              </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><a  class="mbri-laptop mbr-iconfont mbr-iconfont-features3"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">INFORMÁTICA</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><a class="mbri-globe-2 mbr-iconfont mbr-iconfont-features3"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">MEIO AMBIENTE</h4>    
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><a  class="mbri-home mbr-iconfont mbr-iconfont-features3"></a></div>
                    <div class="card-block">
                        <h3 class="card-title">EDIFICAÇÕES</h3> 
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-b" >
    
    <div class="container" >
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><span class="mbri-setting mbr-iconfont mbr-iconfont-contacts1"></span></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>SISTEMA</strong><br>Objetiva o cadastro de candidatos pretendentes aos cursos da EEEP Salaberga Torquato Gomes de Matos de acordo com a portaria 1143/2014 datada de 17/11/2014.<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>REQUISITO</strong><br>Mangtenha o Java Script de seu navegador ativo, pois sua autenticação é feita na referida linguagem, o que o torna mais leve e rápido.<br></p>
            </div>


            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p>
                <font color="#7c7c7c" face="Montserrat, sans-serif" size="3">
                  <span style="letter-spacing: -1px; line-height: 20px;">
                    <strong>
                      SUPORTE
                    </strong>
                    <br>
                  </span>
                </font>
                
                <img src="assets/images/fone-icon.png" style="width:20px;height:20px; margin:0px;" >
                <img src="assets/images/whats-icon.png" style="width:20px;height:20px; margin:0px;">
                          &nbsp;&nbsp;&nbsp;&nbsp;
                <span style="color:white;font-family: Raleway; font-size:18px">
                          (85) 98631 7549
                </span><br>
                <img src="assets/images/email-invert.png" style="width:40px;height:40px; margin-left: -6px;">
                <span style="color:white;font-family: Raleway; font-size:15px">
                otavio.filho@aluno.uece.br
                </span>            
            </p>
            </div>
</footer>
        </div>
    </div>
</section>



  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>