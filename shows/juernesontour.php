<!DOCTYPE html>
<html lang="es">
	<head>
	  	<meta charset="utf-8">
	  	<title>Hola Mundo Radio</title>

	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta name="description" content="">
	  	<meta name="author" content="">
		
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="../css/bootstrap_based.css" rel="stylesheet">
		<link href="../css/banners.css" rel="stylesheet">

	  	<link rel="shortcut icon" href="../favicon.ico">
	  
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/showsManager.js"></script>

		<script type="text/javascript">

			function updatedDate(){

				var updateDate = new Date(document.lastModified);
				document.getElementById('updated').innerHTML="Última actualización: " + updateDate.toLocaleString();
			}

			window.addEventListener('load', updatedDate, false);
			
		</script>

		<style type="text/css">
			#footer {
    			padding-bottom: 2%;
    			padding-top: 5px;
    			color: #888;
    			text-align: center;
    			clear: both;
    			font-size: 10px;
    			border-top: 1px solid #bbb;
    			background: rgba(90, 114, 125, .1);
			}
		</style>

	</head>

	<body onload="retrieveAndLoadShowList(2)">
		<div class="container-fluid">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="../index.html" class="brand"><img src="../imgs/hmrlogo_40.png" alt="logo hola mundo radio" width="20%" style="padding-right:1%;"/>Hola Mundo Radio</a>
						
						<div class="nav-collapse collapse navbar-responsive-collapse">
									
							<ul class="nav pull-right">
								<li>
									<a href="../directo.html">Directo</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li>
									<li class="dropdown">
	    								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
	        								Programas
	        								<b class="caret"></b>
	      								</a>
	  									<ul class="dropdown-menu">
	   									 	<li>
	   									 		<a href="holamundo.html">Hola Mundo</a>
	   									 	</li>
	   									 	<li>
	   									 		<a href="irenetonight.html">Irene Tonight</a>
	   									 	</li>
	   									 	<li class="active">
	   									 		<a href="juernesontour.html">Juernes On Tour</a>
	   									 	</li>
	   									 	<li>
	   									 		<a href="lacosafluye.html">La Cosa Fluye</a>
	   									 	</li>
	   									 	<li>
	   									 		<a href="latenight.html">Late Night</a>
	   									 	</li>
	  									</ul>
									</li>
								</li>
								<li class="divider-vertical">
								</li>
								<li>
									<a href="../locutores.html">Locutores</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li>
									<a href="../laradio.html">La Radio</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<div class="mediumSizeBanner">
						<!--<img class="img-rounded" alt="hola mundo" src="http://lorempixel.com/650/150/cats/">-->
						
						<img class="img-rounded mediumSizeImage" alt="juernes on tour" src="../imgs/banners/jot.png"/>
						<p>
							<a href="https://twitter.com/djstrikespain" target="_blank"><img class="socialLogo" src="../imgs/social/twitter.png" alt="Dj Strike Twitter"/>@djstrikespain</a>
							<a href="https://twitter.com/search?q=%23JuernesOnTour&src=typd&mode=realtime" target="_blank"> #JuernesOnTour</a>
							<a href="http://www.youtube.com/djstrikespain" target="_blank"><img class="socialLogo" src="../imgs/social/youtube.png" alt="Dj Strike YouTube"/>youtube.com/djstrikespain</a>
							<a href="http://www.mixcloud.com/djstrikespain/" target="_blank"><img class="socialLogo" src="../imgs/social/mixcloud.png" alt="Dj Strike Mixcloud" />mixcloud.com/djstrikespain</a>
						</p>
							
					</div>

					<div class="hero-unit-white-mini">
						<p>
							¡El programa con más Fuerza y Energía está en Hola Mundo Radio! Dj Strike nos hace un tour por la música que se escucha y
							baila a nivel mundial. La música electrónica en casi todas sus vertientes tiene cabida en su programa y últimamente nos
							ha sorprendido con temas diferentes. En medio de ese mar, cuenta con la colaboración de Edu quien nos trae la sección
							El Vuelo Underground: ritmos y sonidos tranquilos para elevarse, dejarse llevar y soñar. Y para acabar, Dj Strike nos ofrece
							una sesión con el mejor EDM y Trance. Todo esto para que encares el fin de semana lleno de ¡Fuerza y Energía! 
						</p>

						<p>
							<i class="icon-play-circle" style="padding-right:2px;"></i>Emisión en directo: tercer jueves de cada mes de 20:00 a 22:00 GMT+1
						</p>
					</div>

					<div style="padding:6px">
						<p><strong>Locutores Juernes On Tour</strong></p>

						<a href="../locutores.html#tabStrike"><img alt="strike" width="25%" src="../imgs/locutores/strike.png"></a>

						<!--<br/><br/>

						<p><strong>Colaboradores Juernes On Tour</strong></p>

						<img alt="edu" src="http://lorempixel.com/80/80/cats/"> -->

					</div>
					<br/>

					<div style="padding:6px">
						<a class="twitter-timeline" data-chrome="noscrollbar" href="https://twitter.com/djstrikespain" data-widget-id="369881566857527297">Tweets por @djstrikespain</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>

				</div>
				<div class="span6">

					<!-- Mixcloud widget player -->
					<iframe id="mixcloudPlayer" height="260" width="100%" 
						src="" 
						frameborder="0">
					</iframe>

					<!--<?php
						include("statsConnector.php");
					?> -->

					<!-- document.write para que en el onclik del enlace se llame a la función php
					que anota la descarga. se le pasará por parámetro el show.

					en la base de datos el show estará dado de alta, hay que hacerlo, y se le sumará 1 al campo downloads

				-->

					<form action="statsConnector.php" method="POST" type="form-data">
						<input type="text" name="showName"/>
						<input type="submit" name="submit"/>
					</form>

					<ul id="showList" class="nav nav-tabs">
					    <!--<li class="active"><a href="#tab1">Tab 1</a></li> -->
					</ul>
					    
					<div id="showListContent" class="tab-content">
					    <!--<div class="tab-pane active" id="tab1">Hello tab #1 content...</div> -->
					</div>

				</div>
			</div>

			<div class="row-fluid">
				<ul class="thumbnails">
						<li class="span3">
							<div class="thumbnail">
								<a href="holamundo.html"><img alt="hola mundo" src="../imgs/banners/hm.png"></a>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="irenetonight.html"><img alt="irene tonight" src="../imgs/banners/it.png"></a>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="lacosafluye.html"><img alt="la cosa fluye" src="../imgs/banners/lcf.png"></a>
								<!-- http://lorempixel.com/600/200/sports/ -->
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="latenight.html"><img alt="late night" src="../imgs/banners/ln.png"></a>
								<!-- http://lorempixel.com/600/200/sports/ -->
							</div>
						</li>
						
					</ul>
			</div>

		</div>

		<div id="footer">
  		<p>
		El <a href="http://gul.es/">Grupo de Usuarios de Linux de la Universidad Carlos III de Madrid</a> es una asociación declarada de beneficio social por el Ministerio de Hacienda.
		<br/>

		Domicilio social: despacho 2.3C05 del edificio Sabatini, Avenida de la Universidad, 30 28911 Leganés Madrid, España.
		<p>C.I.F.:G83296988</p>
		
		<p>
  			Número de registro de la comunidad de Madrid: 23500
  		<br/>
  			Número de registro del ayuntamiento de Leganés: 795
		</p>
			<p id="updated">
				Última actualización: 
			</p>
		</p>
		</div>
	</body>
</html>
