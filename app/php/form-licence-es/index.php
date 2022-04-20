<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/config.php';

session_start();

if (!empty($_SESSION['_form_form_error'])) {
    $error = $_SESSION['_form_form_error'];
    unset($_SESSION['_form_form_error']);
}

if (!empty($_SESSION['_form_form_success'])) {
    $success = true;
    unset($_SESSION['_form_form_success']);
}

?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../scss/style.css" />
    <link rel="stylesheet" href="../../scss/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
  </head>


<body>


    <!-- ====================== form =========================== -->

    <section class="form">
      <div class="container container--contact">

      <?php
            if (!empty($success)) 
            {
                    ?>
                <div class="sucess">
                    <a class="sucess-element">Tu mensaje ha sido entregado! <br> pronto enviaremos a tu correo tu software Logic</a>
                </div>
                <?php
            }
        ?>

        <?php
            if (!empty($error))
             {
                    ?>
                <div class="error">
                    <div class="error-element"><?= $error ?></div>
                    <a class="error-element">Tu mensaje no ha podido ser entragado <br> Si el error persiste contacta a contact@logic.com </a>
                </div>                        
                <?php
            }
        ?>



      <div class="form__logo">
            <img src="../../../images/logo_logic04.svg" alt="">
        </div>







        <div class="form__card">

            <div class="form__header">
                <p>¡No cierres esta ventana hasta completar tu proceso!</p>
            </div>



            <div class="form__title">Gracias por comprar <br> Logic Indicators</div>

            <div class="form__subtitle">
                <p>Sigue atentamente los siguientes pasos para obtener tu software</p>
            </div>



            <div class="form__numeral">
                <p>1. Obten el Machine ID de tu ninjatrader</p>
            </div>

            <div class="form__image">
                <img src="../../../images/id.jpg" alt="" srcset="">
            </div>

            <div class="form__image--text">
                <p>El código Machine ID es generado por NinjaTrader basado en el hardware y software principal de sistema</p>
            </div>




            <div class="form__numeral2">
                <p>2. Después de enviar este formulario, crearemos la licencia para tu equipo.</p>
            </div>


            <form method="post" action="submit.php" class="contact-form">


                <div class="form__label-form">Nombre <span>*</span> </div>
                <input type="text" name="name" id="name" class="form__input-form" placeholder="John Doe">

                <div class="form__label-form">Email <span>*</span> </div>
                <input type="email" name="email" id="email" class="form__input-form" placeholder="form@mail.com">

                <div class="form__label-form">Machine ID <span>*</span> </div>
                <input type="text" name="idmachine" id="idmachine" class="form__input-form" placeholder="1234123412341234">


                <div class="form__label-form">Message</div>
                <textarea type="text" name="message" id="message" class="form__input-form-text" placeholder=""></textarea>
            
                <!-- <a href="#" class="button-contact">Send</a> -->

                <button class="btn btn-primary btn-block btn button-contact">Send</button>
        
           
            </form>



            <div class="form__note">
                <p>• Recibirás en tu correo tu software en un plazo de 1 día hábil (8 a 5 PM GMT- 4).</p>
            </div>

        </div>
      </div>
    </section>




    <script src="../../js/script.js"></script>
</body>
</html>
