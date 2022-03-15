<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Trading System for Delta and Volume Analysis - OTM trading System </title>
    <link rel="shortcut icon" href="../../img/favicon_a.ico" type="image/x-icon">


    <link rel="stylesheet" href="../../css/style-cont.css">
    <link rel="stylesheet" href="../../css/style-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- reCAPTCHA Javascript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>



    <!-- ====================== navbar =========================== -->
    <nav class="nav">
        <div class="cont">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa fa-bars"></i>
                </label>


                <div class="logo">
                <a href="../../../index.html"><img src="../../../img/logo.svg" alt=""></a>
                </div>



                <ul>
                    <li><a href="../../es/index.html">OTM</a> </li>
                    <li><a href="../../es/features.html">Características</a> </li>
                    <li><a href="../../es/licence.html">Comprar</a> </li>
                    <li><a href="../../es/analisys.html">Ejemplos</a> </li>
                    <li><a class="active" href="#">Contacto</a> </li>
                </ul>
            </nav>
        </div>
    </nav>



    <!-- ====================== form =========================== -->
    <div class="container">
    <div class="general">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <div class="card-body">

                    <?php
                    if (!empty($success)) {
                            ?>
                        <!-- <div class="alert alert-success">Your message was sent successfully!</div> -->
                        <div class="sucess">
                            <a class="sucess-element">Your message was sent successfully!</a>
                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if (!empty($error)) {
                        ?>
                        <div class="error">
                            <div><?= $error ?></div>
                            <a class="error-element">Your message could not be sent.</a>
                        </div>                        
                        <?php
                    }
                    ?>

                    <form method="post" action="submit.php" class="contact-form">
                    
                    <h1 class="card-title"> Contáctanos </h1>

                        <div class="form-group txtb">
                        <h2> <span>*</span> Nombre</h2>
                            <input type="text" name="name" id="name" class="form-control" placeholder="John Doe">
                       
                        
                        </div>

                        <div class="form-group txtb">
                        <h2> <span>*</span> Email</h2>
                            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                        </div>

                        <div class="form-group txtb">
                        <h2> <span>*</span> Asunto</h2>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="subject">
                        </div>

                        <div class="form-group txtb">
                        <h2>Message / Question</h2>
                            <textarea name="message" id="message" class="form-control" rows="12" placeholder="" ></textarea>
                        </div>

                        <div class="form-group text-center cap">
                            <div class="g-recaptcha cap2" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
                        </div>

                        <button class="btn btn-primary btn-block btn">Send Message</button>


                        


                        <!-- <button class="btn btn-primary btn-bloc">
                        <a href="" >Send</a>
                        </button> -->

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>






    
    <!-- ====================== footer1 =========================== -->
    <div class="footer">
        <div class="footer-cont">

            <div class="cont-foot1">
            <p class="text">El comercio de futuros, divisas y opciones contiene un riesgo considerable y no es para todos los inversores. Un inversor puede perder potencialmente toda o más de la inversión inicial. El capital de riesgo es el dinero que se puede perder sin poner en peligro la seguridad financiera o el estilo de vida. Sólo el capital de riesgo debe utilizarse para operar y sólo aquellos con suficiente capital de riesgo deben considerar la posibilidad de operar. Los resultados pasados no son necesariamente indicativos de los resultados futuros.</p>
            </div>

            <div class="cont-foot2">
                <h3 class="text">OTM Objective Method</h3>
                <h3 class="text2">info@otmtrading.com</h3>
                <hr class="linea">
                <div class="iconos">

                <a target="_blank" href="https://www.instagram.com/otm_indicadores/"><i
                            class="ico fa fa-instagram"></i></a>
                    <a target="_blank" href="https://t.me/comunidad3c"><i class="ico fa fa-telegram"></i></a>
                    <a target="_blank" href="https://bit.ly/COMUNIDAD3C"><i class="ico fa fa-youtube"></i></a>


                </div>
                <p class="copy">&copy; OTM Trading 2021</p>
            </div>

        </div>
    </div>





</body>
</html>
