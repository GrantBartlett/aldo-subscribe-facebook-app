<?php
require_once('_include/Language.php');
require_once('_include/Strings.php');
$locale = new Language();
$strings = new Strings();
$contentArr = $strings->getStrings();
$contentArr = $contentArr[$locale->getLanguage()];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body <?php if($locale->getLanguage() == 'ar_AR') echo 'class="rtl"';?>>

	<div class="container">
		<section class="app" role="main">
			<div class="row header">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">


					<?php foreach($contentArr as $string): ?>
						<section class="headline text-right">
							<h1>
								<?php echo $string['intro']['headline']; ?>
							</h1>
						</section>

						<div class="main">
							<section class="intro text-center">
								<h1>
									<?php echo $string['intro']['lead']; ?>
								</h1>

								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<p class="description">
											<?php echo $string['intro']['description']; ?>
										</p>
									</div>
								</div>
							</section>

							<section class="form">
								<div class="row">
									<div class="col-sm-12 col-md-8 col-md-offset-2">

										<form action="https://smswmedia.createsend.com/t/d/s/iljdlk/" method="post">
											<div class="row">
												<div class="form-group col-sm-6 col-md-6">
													<input id="fieldjyurdy" name="cm-f-jyurdy" type="text" class="form-control first-name" placeholder="<?php echo $string['form']['firstName']; ?>" required>
												</div>
												<div class="form-group col-sm-6 col-md-6">
													<input id="fieldjyurdj" name="cm-f-jyurdj" type="text" class="form-control last-name" placeholder="<?php echo $string['form']['lastName']; ?>">
												</div>
											</div>

											<div class="form-group row">
												<div class="col-md-12">
													<input type="email" id="fieldEmail" name="cm-iljdlk-iljdlk" class="form-control" placeholder="<?php echo $string['form']['email']; ?>" required/>
												</div>
											</div>

											<div class="form-group row">
												<div class="col-md-6 col-md-offset-3 text-center">
													<button class="btn btn-default btn-block btn-lg btn-primary text-uppercase" type="submit"><?php echo $string['form']['submit']; ?></button>
												</div>
											</div>
										</form>

										<div class="hidden ar_terms">
											<?php include_once('terms-ar.php'); ?>
										</div>

									</div>
								</div>
							</section>

							<footer class="footer text-center">
								<p>
									<a href="<?php echo $string['footer']['privacy']['url']; ?>" title="<?php echo $string['footer']['privacy']['text']; ?>" target="_blank" class="<?php echo $string['footer']['privacy']['class']; ?>">
										<?php echo $string['footer']['privacy']['text']; ?>
									</a>
								</p>
							</footer>
						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</section>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>
