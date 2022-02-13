<?php 

include "modulos/login/control-sesion.php";
require 'clases/clases_db.php';
require 'funciones/funciones_comunes.php';
require 'clases/formularios.php';

//ini_set('display_errors', 1);

//ini_set('display_startup_errors', 1);

//error_reporting(E_ALL);

$modulo="modulos/".var_url($_GET['modulo'],0).".php";



?>

<!doctype html>

<html lang="zxx">

	<head>

		<!-- Required meta tags -->

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

        <!-- Font Awesome Min CSS -->

        <link rel="stylesheet" href="../assets/css/fontawesome.min.css">

		<!-- Classy Nav CSS -->

		<link rel="stylesheet" href="../assets/css/classy-nav.min.css">

		<!-- Nice Select Min CSS -->

		<link rel="stylesheet" href="../assets/css/nice-select.css">

		<!-- Animate CSS -->

		<link rel="stylesheet" href="../assets/css/animate.css">

		<!-- Owl Carousel CSS -->

		<link rel="stylesheet" href="../assets/css/owl.carousel.css">

		<!-- Owl Theme Default CSS -->

		<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

		<!-- Style CSS -->

        <link rel="stylesheet" href="../assets/css/style.css?ver=<?php echo pass(10);?>">

        <!-- Responsive CSS -->

        <link rel="stylesheet" href="../assets/css/responsive.css?ver=<?php echo pass(10);?>">

        <!-- Default Color CSS -->

        <link rel="stylesheet" href="../assets/css/color/color-default.css?ver=<?php echo pass(10);?>">

		<!-- DataTables -->

		<script src="../assets/js/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/boton_fileee.css?ver=<?php echo pass(10);?>"> 

		<link rel="stylesheet" type="text/css" href="../plug-in/datatables/datatables.min.css?ver=<?php echo pass(10);?>"> 

		<link rel="stylesheet" type="text/css" href="../plug-in/datatables/ctn.css?ver=<?php echo pass(10);?>"> 

		<script type="text/javascript" src="../plug-in/datatables/datatables.min.js?ver=<?php echo pass(10);?>" ></script> 



		<style type="text/css">

		#dataTables_filter

		{

		align:right;

		}

		</style>

		<!-- Select2 -->

		<link href="../plug-in/select2/select2.min.css?ver=<?php echo pass(10);?>" rel="stylesheet"/>
		<script src="../plug-in/select2/select2.min.js?ver=<?php echo pass(10);?>"></script>
		<script>
		jQuery(document).ready(function($){
			$(document).ready(function() {
				$('.search').select2();
			});
		});
		</script>

        <title>Gestión Administrativa</title>

		

		<link rel="icon" type="../image/png" href="../img/favicon.png">

    </head>

    <body>

        <!-- Start Preloader Area -->

       

        <!-- End Preloader Area -->



        <!-- Start Main Menu Area -->

       <?php  include "include/opciones_A.php"; ?> 


        <section class="dashboard-area ptb-100">

            <div class="container">

                <div class="row">

								<?php include 'modulos/usuarios/perfil.phpNO';?> 

                    <div class="col-lg-12 col-md-12">

                        <div class="dashboard">

								<?php 

								//echo $modulo;

								include $modulo;?>

						</div>	

					</div>

				</div>

			</div>

        </section>



        <?php include "include/foot.php"; ?>



        <div class="go-top"><i class="fas fa-angle-up"></i></div>

<script type="text/javascript">

  $(document).ready(function(){

    $(".datatable").DataTable();

  })

</script>

        <?php include "include/js_alpie.php"; ?>

    </body>

</html>