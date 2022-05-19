<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RentAdvisor | Registrazione</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/home_house.png') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <body style="background-image:url({{URL::asset('images/slider/Pescara.jpeg') }}); background-size:cover">
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <h1>Registrazione</h1>
                <h3>Crea il tuo account e accedi ai servizi <br><br></h3>
              </div>
              <form class="contactform" action="{{ route('login') }}" name="visualizza_profilo" method="get" enctype="multipart/form-data">
                <div class="aa-properties-content-body">
                    <ul class="aa-properties-nav">
                        <li>
                            <div class="col-xs-6"> <!-- stile bootstrap -->
                                <div class="aa-single-field">
                                    <label for="username">Username <span class="required">*</span></label>
                                    <input type="text" size="30" required="required" aria-required="true" value="" name="username">
                                </div>
                                <div class="aa-single-field">
                                    <label for="nome">Nome <span class="required">*</span></label>
                                    <input type="text" required="required" aria-required="true" value="" name="nome">
                                </div>
                                <div class="aa-single-field">
                                    <label for="cognome">Cognome <span class="required">*</span></label>
                                    <input type="text" size="30" required="required" aria-required="true" value="" name="cognome">
                                </div>
                                <div class="aa-single-field">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input type="email" size="30" required="required" aria-required="true" value="" name="email">
                                </div>
                                <div class="aa-single-field">
                                    <label for="password">Password <span class="required">*</span></label>
                                    <input type="text" size="30" name="password">
                                </div>
                                <div class="aa-single-field">
                                    <label for="conferma-password">Conferma Password <span class="required">*</span></label>
                                    <input type="text" size="30" name="conferma-password">
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="col-xs-6">
                                <div class="aa-single-field">
                                    <label for="data_nascita">Data nascita <span class="required">*</span></label>
                                    <input type="text" required="required" aria-required="true" value="" name="data_nascita">
                                </div>
                                <div class="aa-single-field">
                                    <label for="citta">Città<span class="required">*</span></label>
                                    <input type="text" name="citta" id="citta" value="" size="30" maxlength="50" required="required">
                                </div>
                                <div class="aa-single-field">
                                    <label for="indirizzo">Indirizzo<span class="required">*</span></label>
                                    <input type="text" name="indirizzo" id="indirizzo" value="" size="30" maxlength="100" required="required">
                                </div>
                                <div class="aa-single-field">
                                    <label for="cap">CAP<span class="required">*</span></label>
                                    <input type="text" name="cap" id="cap" value="" size="30" maxlength="5" required="required">
                                </div>
                                <div class="aa-single-field">
                                    <label for="tel">Telefono<span class="required">*</span></label>
                                    <input type="text" name="tel" id="tel" value="" size="30" maxlength="10" required="required">
                                </div>
                                <div class="aa-single-field">
                                    <label for="gen">Genere<span class="required">*</span></label>
                                    <input type="text" name="gen" id="gen" value="M/F/ND" size="30" maxlength="1" required="required">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="aa-single-submit">
                  <input type="submit" value="Registra" name="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap_layout.js') }}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>