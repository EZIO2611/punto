

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Punto de venta</title>
@include('layouts.bootstrap')

<link rel="stylesheet" type="text/css" href="{{asset('i/css/main.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<!--<link rel="stylesheet" href="public/css/main.css" />-->
<noscript><link rel="stylesheet" href="{{asset('i/css/noscript.css')}}"/></noscript>

</head>
<body>
	<audio src="{{asset('imagenes/relax.mp3')}}"></audio>
	
<EMBED SRC="{{asset('imagenes/relax.mp3')}}" AUTOSTART=true LOOP=true VOLUME="80" WIDTH="0" HEIGHT="0">

				<!-- Wrapper -->
				<div id="wrapper">
				<!-- Header -->
				<header id="header">
				<div class="logo">
				<span class="icon fa-fax"></span>
				</div>
				<div class="content">
				<div class="inner">
				<h1>PUNTO DE VENTA</h1>
				<img src="{{asset('imagenes/SSSS.png')}}"><br>
				<p> El mayor misterio del mundo es que resulta comprensible.<br />
				-Albert Einstein<br /></p>
				</div>
				</div>
				<nav>
				<ul>
		
				<li><a href="#work">SABER MAS</a></li>
				<li><a href="#about">DESCARGAR</a></li>
				<li><a href="#contact">QUIEN ERES</a></li>
				<!--<li><a href="#elements">Elements</a></li>-->
				</ul>
				</nav>
				</header>
				<!-- Main -->
					<div id="main">

						

						<!-- Work -->
							<article id="work">
								<h1 class="major">TODO SOBRE EL SOFTWARE</h1>
								<center><img src="{{asset('imagenes/herra.gif')}}" align="center" width="350" height="400" /></center>
							
								<h2>EN QUE SE BASA</h2><hr>
									<p>Hoy en día las microempresas se esfuerzan para tener una mayor
participación en el mercado, se sabe que los sistemas de ventas tienden la
capacidad de ser personalizados para cumplir con las necesidades específicas de
un negocio por ejemplo las organizaciones de sus productos que les ofrece a sus
clientes así como sus precios de venta.</p>
									
									<h4>JUSTIFICACIÓN</h4><hr>
										<p>
Uno de los métodos que se utilizan para facilitar a las personas en su
trabajo sobre cómo llevar una contabilidad en su empresa el programa a realizar
sirve para registrar las ventas de los bienes que se producen esto para saber
cuántos productos se producen para luego comercializarlos y también saber el
nivel de ventas que tiene la empresa cual producto vende más el programa es
creado para facilitar el uso a los usuarios que son las personas las cuales
necesitan llevar una contabilidad mayor a sus ventas y compras el informe de
registro de ventas nos ayuda a saber qué nivel de ventas tiene la empresa esto
para poder abastecer los recursos que se necesitan para seguir comercializando
los productos que la empresa ofrece.</p>

							</article>


							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">DESCARGAR</h2>
								<center><img src="{{asset('imagenes/DESC.png')}}"   height="200" width="200"/></center>
								

							<h3>REQUISITOS PARA EL PROGRAMA</h3><hr />			
								

							<ul>
							<li><h4>Procesador a 2 GHz</h4></li>
					<li><h4>1 GB de RAM (Se recomiendan 2 GB de RAM o más para Windows Vista y Windows 7.)</h4></li>
					<li><h4>8 GB de espacio libre en el disco duro</h4></li>
					<li><h4>Tarjeta gráfica compatible con Shader 2.0</h4></li>
					<li><h4>Resoluciones de pantalla hasta 1920x1200</h4></li>
					<li><h4>Compatible con DirectX v9.0c o superior</h4></li>
							</ul>
						
							<hr>
									<H3>SISTEMAS OPERATIVOS</H3><hr>
								<H4>Windows 7</H4><img height="100" width="100" src="{{asset('imagenes/7.jpg')}}"><hr>
								<h4>Windows 8</h4>
								<img height="100" width="100" src="{{asset('imagenes/8.jpg')}}"><hr>
								<h4>Windows 10</h4>
								<img height="100" width="100" src="{{asset('imagenes/10.png')}}">
							</article>

						<!-- Contact -->
							<article id="contact">
								<center><h2 class="major">ELIJE QUE ERES </h2></center>
								<form method="post" action="#">
								<center><a href="cliente.php">CLIENTE<img src="{{asset('imagenes/cli.png')}}" height="150" width="150"></a>

								<a href="{{url('inicio/angelitos/index.blade.php')}}">EMPRESA<img src="{{asset('imagenes/empre.png')}}" height="160" width="150"></a></center>
									
								
							</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								


								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					

			</div>

		<!-- BG -->
			<div id="bg"></div>
					


		<!-- Scripts -->

			<script src="{{asset('i/js/jquery.min.js')}}"></script>
			<script src="{{asset('i/js/skel.min.js')}}"></script>
			<script src="{{asset('i/js/util.js')}}"></script>
			<script src="{{asset('i/js/main.js')}}"></script>

</body>