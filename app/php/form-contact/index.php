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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Logic Indicators</title>
    <link rel="stylesheet" href="../../scss/style.css" />
    <link rel="stylesheet" href="../../scss/form.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap"
      rel="stylesheet"
      
    />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="icon" href="../../../images/icono.ico">

  </head>


<body>

    <!-- ====================== navbar =========================== -->
    <header class="header">
      <div class="overlay has-fade"></div>

      <nav class="container--navbar flex flex-jc-sb flex-ai-c">
        <a class="header__image" href="../../en/index.html">
          <img src="../../../images/logo_logic04.svg" alt="" />
        </a>
        <div class="header__links hide-for-mobile">
          <a href="../../en/index.html">Logic</a>
          <a href="../../en/indicators.html">Indicators</a>
          <a href="../../en/buy.html">Buy</a>
          <a href="#">Contact</a>
        </div>

        <a href="../form-contact-es/index.php" class="header__lang header__lang--en hide-for-desktop"></a>
        

        <a id="btnLang-buy" href="../form-contact-es/index.php" class="header__lang-desktop-en hide-for-mobile">
          <span></span>
        </a>

        <a id="btnMenu" href="#" class="header__toggle hide-for-desktop">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </nav>

      <div class="header__menu has-fade">
        <a href="../../en/index.html">Logic</a>
        <a href="../../en/indicators.html">Indicators</a>
        <a href="../../en/buy.html">Buy</a>
        <a href="#">Contact</a>
     </div>
    </header>

    <!-- ====================== form =========================== -->

    <section class="contact">
      <div class="container container--contact">

      <?php
            if (!empty($success)) 
            {
                    ?>
                <div class="sucess">
                    <a class="sucess-element">your message has been sent! <br> We will contact you soon.</a>
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
                    <a class="error-element">Your message could not be sent <br> If the error persists, please contact contact@logic.com. </a>
                </div>                        
                <?php
            }
        ?>




        <div class="contact__card">
            <div class="contact__title">Contact us</div>
            <form method="post" action="submit.php" class="contact-form">

                  <div class="contact__label-form">Name<span>*</span></div>
                  <input type="text" name="name" id="name" class="contact__input-form" placeholder="John Doe">

                  <div class="contact__label-form">Email<span>*</span></div>
                  <input type="email" name="email" id="email" class="contact__input-form" placeholder="contact@mail.com">

                  <div class="contact__label-form">Message<span>*</span></div>
                  <textarea type="text" name="message" id="message" class="contact__input-form-text" placeholder=""></textarea>

                  <div class="form-group text-center contact__captcha">
                    <div class="g-recaptcha contact__captcha--box" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
                  </div>



              <button class="btn btn-primary btn-block btn button-contact">Send Message</button>
            </form>
        </div>
      </div>
    </section>


    <footer class="footer">
      <div class="container">
        <a class="footer__logo" href="#">
          <img src="../../../images/logo_logic05.svg" />
        </a>

        <div class="footer__social">

<a href="https://www.youtube.com/c/3CTradingCompany" target="_blank">
  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20">
    <title>YouTube</title>
    <path fill="#FFF"
      d="M10.333 0c-5.522 0-10 4.478-10 10 0 5.523 4.478 10 10 10 5.523 0 10-4.477 10-10 0-5.522-4.477-10-10-10zm3.701 14.077c-1.752.12-5.653.12-7.402 0C4.735 13.947 4.514 13.018 4.5 10c.014-3.024.237-3.947 2.132-4.077 1.749-.12 5.651-.12 7.402 0 1.898.13 2.118 1.059 2.133 4.077-.015 3.024-.238 3.947-2.133 4.077zM8.667 8.048l4.097 1.949-4.097 1.955V8.048z" />
  </svg>
</a>

<a href="https://www.instagram.com/3ctrading/"target="_blank">
  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20">
    <title>Instagram</title>
    <path fill="#FFF"
      d="M10.333 1.802c2.67 0 2.987.01 4.042.059 2.71.123 3.976 1.409 4.1 4.099.048 1.054.057 1.37.057 4.04 0 2.672-.01 2.988-.058 4.042-.124 2.687-1.386 3.975-4.099 4.099-1.055.048-1.37.058-4.042.058-2.67 0-2.986-.01-4.04-.058-2.717-.124-3.976-1.416-4.1-4.1-.048-1.054-.058-1.37-.058-4.041 0-2.67.01-2.986.058-4.04.124-2.69 1.387-3.977 4.1-4.1 1.054-.048 1.37-.058 4.04-.058zm0-1.802C7.618 0 7.278.012 6.211.06 2.579.227.56 2.242.394 5.877.345 6.944.334 7.284.334 10s.011 3.057.06 4.123c.166 3.632 2.181 5.65 5.816 5.817 1.068.048 1.408.06 4.123.06 2.716 0 3.057-.012 4.124-.06 3.628-.167 5.651-2.182 5.816-5.817.049-1.066.06-1.407.06-4.123s-.011-3.056-.06-4.122C20.11 2.249 18.093.228 14.458.06 13.39.01 13.049 0 10.333 0zm0 4.865a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27zm0 8.468a3.333 3.333 0 110-6.666 3.333 3.333 0 010 6.666zm5.339-9.87a1.2 1.2 0 10-.001 2.4 1.2 1.2 0 000-2.4z" />
  </svg>
</a>

<a href="https://t.me/comunidad3c"target="_blank">
  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 16 16">
    <title>Telegram</title>
    <path fill="#FFF" 
      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
  </svg>
</a>        
</div>


        <div class="footer__links col1">
          <a href="../../en/index.html">Logic</a>
          <a href="../../en/indicators.html">Indicators</a>
          <a href="../../en/buy.html">Buy</a>
        </div>

        <div class="footer__cta">
          <a href="#" class="button ">Contact</a>
        </div>

        <div class="footer__copyright">
          &copy; Logic Indicators. All Rights Reserved. 2022
        </div>
      </div>
    </footer>



    <script src="../../js/script.js"></script>
</body>
</html>
