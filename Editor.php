<!DOCTYPE HTML>

<html>
	<head>
		<title>Editor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/ckeditor.js"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">


				<!-- Main -->
			
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="lobby.html" class="logo"><strong>Liceo Nueva Estancia</strong></a>
									<ul class="icons">
										
										<li><a href="https://www.facebook.com/prom.lines" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Editor</h1>
									</header>

<body>
    <h1>Classic editor</h1>
    <form action="Comunicados.php" method="post">
        <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
        <p><input type="submit" value="Submit"></p>
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										
									    <li>
											<span class="opener">Nosotros</span>
											<ul>
												<li><a href="Horizonte institucional.html">Horizonte institucional</a></li>
												<li><a href="Politicas.html">Politica y objetivos de calidad</a></li>
												<li><a href="#">Simbolos institucionales</a></li>
												<li><a href="Sedes.html">Sedes</a></li>
												<li><a href="Horario.html">Horario
											</a></li>
											</ul>
										</li>
									
										<li>
											<span class="opener">Gestion</span>
											<ul>
												<li><a href="#">Mapa de procesos</a></li>
												<li><a href="#">Direccionamiento Estrategico</a></li>
												<li><a href="#">Proceso Academico</a></li>
												<li><a href="#">Proceso de Convivencia</a></li>
												<li><a href="#">Proceso de Bienestar</a></li>
												<li><a href="#">Proceso Gestion Pedagogica</a></li>
												<li><a href="#">Proceso de Talento Humano</a></li>
												<li><a href="#">Proceso Administrativo Y financiero</a></li
												>

											</ul>
										</li>

									
										
								
										
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Comunicados</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contactanos</h2>
							
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">https://www.facebook.com/prom.lines</a></li>
										<li class="fa-phone">Secretaria: 6909107-6905456 Coordinacion: 6934954</li>
										<li class="fa-home">Localidad 11 de Suba<br />
										Carrera. 132 No.132-63 Nogales de Suba</li>
									</ul>
								</section>

	
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>