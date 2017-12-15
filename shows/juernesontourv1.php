<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hola Mundo Radio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bootstrap/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="../bootstrap/css/style.css" rel="stylesheet">
	<link href="../css/bootstrap_based.css" rel="stylesheet">
	<link href="../css/banners.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../bootstrap/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../bootstrap/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../bootstrap/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../bootstrap/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../bootstrap/img/favicon.png">
  
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/scripts.js"></script>

	<script type="text/javascript">

		function loadPodcast(podcastsrc){
			document.getElementById('mixcloudPlayer').src=podcastsrc;
		}

	</script>

</head>

<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar">
			<!--<div class="navbar navbar-fixed-top">-->
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="../index.html" class="brand">Hola Mundo Radio</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							
							<ul class="nav pull-right">
								<li>
									<a href="directo">Directo</a>
								</li>
								<li class="divider-vertical">
								<li>
									<a href="programacion">Programaci&oacute;n</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li>
									<a href="locutores">Locutores</a>
								</li>
							</ul>
						</div>
						
					</div>
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

				<img alt="dj strike" src="http://lorempixel.com/80/80/cats/">

				<!--<br/><br/>

				<p><strong>Colaboradores Juernes On Tour</strong></p>

				<img alt="edu" src="http://lorempixel.com/80/80/cats/"> -->

			</div>

			<div style="padding:6px">
				<a class="twitter-timeline" data-chrome="noscrollbar" href="https://twitter.com/djstrikespain" data-widget-id="369881566857527297">Tweets por @djstrikespain</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>

		</div>
		<div class="span6">

			<!-- Mixcloud widget player -->
			<iframe id="mixcloudPlayer" height="260" width="100%" 
				src="//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fsesi%25C3%25B3n-recopilatoria-jot-trance-summer-2013-session%2F&embed_uuid=63dd9380-f6b1-43df-a58b-a50c8d1a582e&stylecolor=&embed_type=widget_standard&hide_cover=" 
				frameborder="0">
			</iframe>

			<div>
				<table class="table table-striped table-hover">
					<thead>
					</thead>

					<tbody>

						<tr>
							<td>Sesi&oacute;n Recopilatoria #JOT Trance Summer 2013 Session</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fsesi%25C3%25B3n-recopilatoria-jot-trance-summer-2013-session%2F&embed_uuid=63dd9380-f6b1-43df-a58b-a50c8d1a582e&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130718.ogg" download="juernesontour-20130718.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #8 - 18/07/2013</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour8%2F&embed_uuid=f5d73674-2a05-41f2-b53a-6b787d23675b&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130718.ogg" download="juernesontour-20130718.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #7 - 20/06/2013</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour7%2F&embed_uuid=d44104fc-cfb9-43d5-8dbe-291d184d57a9&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130620.ogg" download="juernesontour-20130620.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #6 - 16/05/2013</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour6%2F&embed_uuid=02a60d32-76eb-40a0-a5e0-f4c55491d7a3&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130516.ogg" download="juernesontour-20130516.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Sesi&oacute;n Recopilatoria #JOT 1 to 5</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fsesi%25C3%25B3n-recopilatoria-jot-1-to-5%2F&embed_uuid=da39787a-293b-400f-8a72-9ee994bf84eb&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130418.ogg" download="juernesontour-20130418.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #5 - 18/04/2013</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour5%2F&embed_uuid=c2adc10b-4eb9-4f44-85d0-96dcdb0c430f&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130418.ogg" download="juernesontour-20130418.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #4 - 21/03/2013</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour4%2F&embed_uuid=23a41104-df77-4d69-8c80-eea3d528af0e&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130321.ogg" download="juernesontour-20130321.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #3 - 21/02/2013</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour3%2F&embed_uuid=4a92fef9-62b7-44d3-9cd2-c2a5e9882623&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130221.ogg" download="juernesontour-20130221.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #2 - 24/01/2013</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour2%2F&embed_uuid=c4394ed9-2b7f-47b7-bec5-8861d242a2f6&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20130124.ogg" download="juernesontour-20130124.ogg">Descargar</a></button></td>
						</tr>

						<tr>
							<td>Juernes On Tour #1 - 14/12/2012</td>
							<td><button class="btn btn-mini btn-success" type="button" onclick="loadPodcast('//www.mixcloud.com/widget/iframe/?feed=http%3A%2F%2Fwww.mixcloud.com%2Fdjstrikespain%2Fjuernesontour1%2F&embed_uuid=5bcfab0a-8f3f-43c3-b07c-b65376d06171&stylecolor=&embed_type=widget_standard&hide_cover=')"><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>
							<td><button class="btn btn-mini btn-inverse" type="button"><i class="icon-download icon-white" style="padding-right:5px"></i><a href="http://jarama.gul.uc3m.es/programas/juernesontour-20120124.ogg" download="juernesontour-20121214.ogg">Descargar</a></button></td>
						</tr>

					</tbody>

				</table>
			</div>

		</div>
	</div>

	<div class="row-fluid">
		<ul class="thumbnails">
				<li class="span4">
					<div class="thumbnail">
						<a href="holamundo.php"><img alt="hola mundo" src="../imgs/banners/hm.png"></a>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<a href="irenetonight.php"><img alt="irene tonight" src="../imgs/banners/it.png"></a>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<a href="latenight.php"><img alt="late night" src="../imgs/banners/ln.png"></a>
						<!-- http://lorempixel.com/600/200/sports/ -->
					</div>
				</li>
				
			</ul>
	</div>

</div>
</body>
</html>
