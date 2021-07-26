<?php
// auditado

require('funciones/conexion.php');

require('funciones/funciones.php');

session_start();

if(!isset($_SESSION)) {

  if(!isset($_SESSION["idunica"])){

	 $_SESSION["idunica"]  = GeneraId(15);}

}



//-INFO BASICA

$url				= "Contacto";

$pmenu				= "Contacto";

$pagina 			= title_web($url);



?>

<!DOCTYPE html>

<html lang="es">



		<head>
			<?php include_once("includes/head.inc.php"); ?>
		</head>



<body>

<?php include 'includes/body.inc.php'; ?>

		<!-- HEADER -->

		<?php include('includes/header.php'); ?>

		<!-- /HEADER -->



		<?php include('includes/social.php'); ?>



		<!-- BREADCRUMB -->

		<div id="breadcrumb" class="section">

			<!-- container -->

			<div class="container">

				<!-- row -->

				<div class="row">

					<div class="col-md-12">

						<ul class="breadcrumb-tree">

							<li><a href="<?echo _GetDomain; ?>">Portada</a></li>

							<li><a href="javascript:void(0);"><?php echo $url; ?></a></li>

						</ul>

					</div>

				</div>

				<!-- /row -->

			</div>

			<!-- /container -->

		</div>

		<!-- /BREADCRUMB -->



	<!-- SECTION -->

	<div class="section">

		<!-- container -->

		<div class="container">

			<!-- row -->

			<div class="row">



				<div class="col-md-7">

				<form action="contacto-envia.php" class="contact-form" enctype="application/x-www-form-urlencoded" method="post">



					<!-- Billing Details -->

					<div class="billing-details">

						<div class="section-title">

							<h3 class="title">Datos</h3>

						</div>



						<div class="form-group">

							<input class="input" type="text" name="name" placeholder="Nombre"required>

						</div>



						<div class="form-group">

							<input class="input" type="email" name="email" placeholder="Email" required>

						</div>



						<div class="form-group">

							<input class="input" type="text" name="subject" placeholder="Asunto" maxlength="100" required>

						</div>



						<div class="form-group">

							<textarea class="input" name="message" placeholder="Mensaje"></textarea>

							<input type="hidden" name="enviado" value="enviado">

						</div>



					</div>





					<button class="primary-btn order-submit" type="submit" >Enviar Consulta </button>

				</form>

				</div>



				<!-- Order Details -->

				<div class="col-md-5">

					<div class="section-title text-center">

						<img src="img/img_contacto.jpg" class="img-responsive">

					</div>

				</div>

				<!-- /Order Details -->

			</div>

			<!-- /row -->

		</div>

		<!-- /container -->

	</div>

	<!-- /SECTION -->



	<?php include('includes/footer.php'); ?>



</body>



</html>

