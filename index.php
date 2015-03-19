<?php require_once('_include/Language.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promotions, contests, style guides and more...</title>

    <link rel="stylesheet" href="dist/css/main.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="dist/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="dist/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="dist/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="dist/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="dist/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="dist/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="dist/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="dist/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="dist/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="dist/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="dist/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">

    <script src="//use.typekit.net/mhq2wiy.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>

<?php $lang = new Language(); ?>

<div class="container">
    <section class="app" role="main">
        <div class="row header">
            <div class="col-md-8 col-md-offset-2">

                <div class="main">
                    <header class="logo">
                        <img src="dist/images/logo.png" class="center-block" alt="Aldo Logo" width="200" height="59">
                    </header>

                    <section class="email-icon">
                        <img src="dist/images/pattern.png" class="center-block spin" alt="Email pattern icon" width="63" height="63">
                        <img src="dist/images/email.png" class="center-block still" alt="Email icon" width="63" height="63">
                    </section>

	                <?php if($lang->getLanguage() == 'ar'):?>
	                Insert some arabic content here...
	                <?php endif; ?>

                    <section class="intro text-center">
                        <h1 class="text-uppercase">Hey You</h1>

                        <p class="lead">We've been waiting!</p>

                        <p class="description">
                            Don't miss out for a single second longer.<br class="hidden-xs"> Promotions, contests, style guides and more, coming your way...
                        </p>
                    </section>

                    <section class="form">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                                <form action="https://smswmedia.createsend.com/t/d/s/iljdlk/" method="post">
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-md-6">
                                            <input id="fieldjyurdy" name="cm-f-jyurdy" type="text" class="form-control" placeholder="first name" autofocus>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6">
                                            <input id="fieldjyurdj" name="cm-f-jyurdj" type="text" class="form-control" placeholder="last name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input type="email" id="fieldEmail" name="cm-iljdlk-iljdlk" class="form-control" placeholder="email" required/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 col-md-offset-3 text-center">
                                            <button class="btn btn-default btn-block btn-lg btn-primary text-uppercase" type="submit">I'm In</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </section>

                    <footer class="footer text-center">
                        <p>
                            <a href="#" title="">Terms and conditions</a>,
                            <a href="#" role="button" data-toggle="modal" data-target="#privacyPolicy">Privacy Policy</a>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>