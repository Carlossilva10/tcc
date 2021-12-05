<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Website Template with Sticky Sidebar</title>
	<meta name="description" content="Free responsive website HTML theme with sticky sidebar for both desktop and mobile. ">
	<!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</head>

<body>
	<?php
	include './Navbar.php';
	?>
	<div id="wrapall">
		<div id="sidebar">
			<div id="stickThis">
				<div id="sidebarContent">
					<aside>
						<div>
							<img src="Imagens\cadastro.jfif" width="260" class="text-end rounded-3">
							<nav>
								<ul>
									<li>
										<a href="./cadastro.php" class="btn btn-light mt-2">Faça aqui seu Cadastro</a>
									</li>
								</ul>
							</nav>
						</div>

						<div>
							<img src="Imagens\Medico1.jfif" width="260" class="text-end rounded-3">
							<nav>
								<ul>
									<li><a href="./Especialista.html" class="btn btn-light mt-2">Procure um especialista</a></li>
								</ul>
							</nav>
						</div>

						<div>
							<img src="Imagens\Depoimento2.jfif" width="260" class="text-end rounded-3">
							<nav>
								<ul>
									<li><a href="./Depoimentos.html" class="btn btn-light mt-2">Depoimentos</a></li>
								</ul>
							</nav>
						</div>

						<div>
							<img src="Imagens\Livro1.jfif" width="260" class="text-end rounded-3">
							<nav>
								<ul>
									<li><a href="./Livros.html" class="btn btn-light mt-2">Encontre um livro</a></li>
								</ul>
							</nav>
						</div>
						<div>
							<a href="./Atendimento.html">
								<img src="Imagens\informação188.jpg" width="260" class="text-end rounded-3"></a>
						</div>

						<p class="mb-2">
							<a class="back2Top" href="#">
								⮝&nbsp;Back to&nbsp;top&nbsp;⮝
							</a>
						</p>
					</aside>
				</div>
			</div>
			<div id="stick-here"></div>
		</div>

		<div id="main">
			<section id="page">
				<main>
					<article>
						<h1 class="h1">O site que te leva ao BOM HUMOR</h1>

						<p>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; O site Bom humor é composto de páginas que trazem conteúdos de leitura e audio através de poemas, frases motivadoras, músicas e imagens com leveza visual.
						</p>
						<p>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; O intuito do site é ajudar a atender todas as expectativas dos usuários e patrocinadores referente a Depressão, a Anciedade e Transtorno depresivo.
						</p>
						<p>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; As pessoas que se sentirem angustiadas, solitárias, depresivas e com raivas poderão atráves deste site encontrar mecanismos para a tranquilidade,
							serenidade, e bem estar. &nbsp Tudo isso atráves de imagens, frases motivacionais, musicas, com indicações de livros e profissionais especializados.
						</p>
					</article>

					<article>
						<h2 class="h2">VOCÊ ACHA QUE ESTÁ ESTRESSADO?</h2>
						<iframe src="https://www.youtube.com/embed/_Tlk6e61E6w?autoplay=1&loop=1&autopause=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
						</iframe>
					</article>

					<article>
						<h2 class="h2">Depressão e Transtorno no mercado de trabalho</h2>
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Depressão ou transtorno depressivo é uma doença comum e séria, normalmente é causada por
							alguma situação perturbadora ou estressante que ocorre na vida, como morte de um familiar, problemas financeiros ou divórcio,
							pensamentos descontrolados e obsessivos sobre determinada situação ou problema.
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; A depressão é responsável por retirar do mercado de trabalho milhares de profissionais todos os anos. Em 2016, 75,3 mil trabalhadores
							foram afastados em razão do mal, com direito a recebimento de auxílio-doença em casos episódicos ou recorrentes.</p>
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Eles representaram 37,8% de todas as licenças em 2016.</p>
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dessa forma, pode-se observar facilmente como essa doença impacta no desempenho do profissional. Os profissionais com depressão
							costumam ter as seguintes características:
						</p>

						<ul>
							<li>Atrasos frequentes,</li>
							<li>Dificuldade em reter e compreender informações,</li>
							<li>Memória falha,</li>
							<li>Percalços para executar tarefas,</li>
							<li>Desânimo para agir em sua função rotineira,</li>
							<li>Falta de iniciativa,</li>
							<li>Faltas frequentes, entre outros problemas.</li>
						</ul>
					</article>

					<article>
						<div>
							<h2 class="text-center h2">Que tal um PET!</h2>
							<img src="Imagens\animal sorrindo19.jfif" align="left" style="width: 300px; height: 200px" class="me-3 rounded-3">

							<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pesquisas e estudos em todo o mundo demonstram que a convivência com os animais traz
								tranquilidade e bem-estar às pessoas. Alexandre Rossi, especialista em comportamento animal
								e atualmente com o programa “Missão Pet” no canal a cabo Nat Geo, vivencia de perto essa
								interação benéfica....</p>
							<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; O contato com os animais aumenta a produção de endorfina no organismo, o hormônio que causa
								prazer e sensação de bem-estar. Além disso, o convívio com um cão ou gato diminui a pressão
								sanguínea, os níveis de colesterol e do estresse e também reduz o risco de problemas
								cardiovasculares....
							</p>

						</div>
					</article>
				</main>
				<footer>
					<p>&copy; Carlos Silva 2021 - Todos os direitos reservados.
				</footer>
			</section>
		</div>
	</div>

</body>

</html>