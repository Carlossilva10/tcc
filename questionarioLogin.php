<?php

session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);

	if (isset($_POST['submit'])) {

		// print_r('cidade: ' . $_POST['cidade']);

		include_once('config.php');

		$totalscore = $_POST['totalscore'];
		$scoreinfo = $_POST['scoreinfo'];

		$result = mysqli_query(
			$conexao,
			"INSERT INTO questionario(totalscore,scoreinfo) 
		 VALUES ('$totalscore','$scoreinfo') "
		);
	}


	?>

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
	<link rel="stylesheet" href="./css/styleQ.css">

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/scriptQ.js"></script>

	<style>
		body {
			color: black
		}

		body {
			background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));

			text-align: center;
		}

		.table-bg {
			background: rgba(0, 0, 0, 0.3);
			border-radius: 15px 15px 0 0;
		}
	</style>
</head>

<body>

<header>
	

	<div id="header Left">
		<img src="Imagens\bomhumor.png"  width="210" height="140" align= "left"> <br/>
		<h1><a href= "http://localhost/TCC/login.php">
			<div height="100" style="background-color: blue;line-height: 50px;text-align: right;">
				<p style="color: white">Login</p>
			</div>
			</a> </h1
	</div


		<div id="headerRight">
			<nav>  
				<ul>
					 
					<li><a href="http://localhost/TCC/index.php">Home</a></li>
					<li><a href="http://localhost/TCC/Homem.html">Homem</a></li>
					<li><a href="http://localhost/TCC/Mulher.html">Mulher</a></li>
					<li><a href="http://localhost/TCC/Adolecente.html">Adolecente</a></li>
					<li><a href="http://localhost/TCC/cadastro.php">Cadastro</a></li>
					<li><a href="http://localhost/TCC/Depoimentos.html">Depoimentos</a></li>
					<li><a href="http://localhost/TCC/Especialista.html">Especialista</a></li>
                	<li><a href="http://localhost/TCC/Perguntas.html">Perguntas Frequentes</a></li>
                	<li><a href="http://localhost/TCC/Atividades.html">Atividades</a></li>
					<li><a href="http://localhost/TCC/Livros.html">Livros</a></li>
					<li><a href="http://localhost/TCC/Frases.html">Frases Motivadoras</a></li>
					<li><a href="http://localhost/TCC/Imagens.html">Imagens divertidas</a></li>
					<li><a href="http://localhost/TCC/Alimentos.html">Alimentos</a></li>
					<li><a href="http://localhost/TCC/Atendimento.html">Atendimento</a></li>
					<li><a href="http://localhost/TCC/Links.html">Links Úteis</a></li>
					
					
				</ul>
	</div>

</header>

	<div id="wrapall">

		<div align="left">
			<div class="d-flex">
				<a href="sair.php" class="btn btn-danger me-5">
					<h3>Sair</h3>
				</a>
			</div>
			<div>
				</nav>
				<br>
				<?php
				echo "<h3>Bem vindo <u>$logado</u></h3>";
				?>

				<br>

				<div id="sidebar">

					<div id="stickThis">

						<div id="sidebarContent">

							<aside>

								<div>
									
					

									<div height="100" textSize="150px text-align: left;">

									<nav>
										<ul>
											<li><a href="" class="btn btn-light mt-2"><h4>Faça sua consulta:</h4></a></li>
										</ul>
									</nav>
									<br/>

										<ul class="nav justify-content-center">
											<li class="nav-item mb-2">
												<a href="./ResultadoAnterior.html" class="btn btn-outline-light">
													Resultado Anterior
												</a>
											</li>
											<br>
											<li class="nav-item mb-2">
												<a href="./TodosResultados.html" class="btn btn-outline-light">
													Todos Resultados
												</a>
											</li>
											<br>
											<li class="nav-item mb-2">
												<a href="./ResultadosGrafico.html" class="btn btn-outline-light">
													Resultados em grafico
												</a>
											</li>
											<br>
											<li class="nav-item">
												<a href="./DownloadsResultados.html" class="btn btn-outline-light">
													Downloads dos Resultados
												</a>
											</li>
										</ul>
									</div>

									
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
<br>

				<div id="main">
					<section id="page">
						<main>

							<article>
								<center>
									<h2 class="h4">QUESTIONÁRIO DASS-21</h2>
								</center>

								
									<p>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Trata-se de um questionário com 21 perguntas, que medem a intensidade de
										comportamentos e sensações experimentados nos últimos sete dias. Cada pergunta é classificada em uma escala Likert
										de quatro pontos de frequência ou gravidade das experiências dos participantes durante a última semana com a
										intenção de enfatizar os estados emocionais sobre os traços.
									</p>

								
							</article>

							<article>
								<h2>VOCÊ ACHA QUE ESTÁ ESTRESSADO?</h2>
								<h4>Por favor, leia cada afirmação e clique na opção que indica o quanto a afirmação
									aplicado a você na semana passada.<br>
									Não há respostas certas ou erradas. Não gaste muito tempo
									em qualquer declaração.<br><br>
									A escolha de classificação é a seguinte:<br>
									- Não se aplica a mim de forma alguma<br>
									- Aplicado a mim até certo ponto, ou por algum tempo<br>
									- Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
									- Aplicado a mim muito, ou na maioria das vezes</h4>

							</article>
							<br/><br/>

							<div class="container">
								<div class="row">
									<div class="two-thirds column">
										<h2 class="h4">Questionário Dass-21</h2>
										<br/><br/>

										<div id="progress_bar"></div>
										<form class="questions_box">

											<div id="question-1" class="mt-3">
												<h2 class="h4">Questão 1</h2>
												<h3>Achei difícil desacelerar</h3>
												<input id="question-1-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-1-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-1-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-1-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit1" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-2" class="mt-3">
												<h2 class="h4">Questão 2</h2>
												<h3>Eu estava ciente da secura da minha boca</h3>
												<input id="question-2-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-2-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-2-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-2-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit2" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-3" class="mt-3">
												<h2 class="h4">Questão 3</h2>
												<h3>Eu não conseguia sentir nenhum sentimento positivo</h3>
												<input id="question-3-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-3-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-3-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-3-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit3" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-4" class="mt-3">
												<h2 class="h4">Questão 4</h2>
												<h3>Tive dificuldade para respirar (por exemplo, respiração excessivamente rápida, falta de ar na ausência de esforço físico)</h3>
												<input id="question-4-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-4-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-4-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-4-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit4" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-5" class="mt-3">
												<h2 class="h4">Questão 5</h2>
												<h3>Achei difícil desenvolver a iniciativa de fazer as coisas</h3>
												<input id="question-5-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-5-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-5-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-5-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit5" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-6" class="mt-3">
												<h2 class="h4">Questão 6</h2>
												<h3>Eu tendia a reagir de forma exagerada às situações</h3>
												<input id="question-6-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-6-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-6-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-6-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit6" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-7" class="mt-3">
												<h2 class="h4">Questão 7</h2>
												<h3>Senti tremores (por exemplo, nas mãos)</h3>
												<input id="question-7-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-7-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-7-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-7-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit7" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-8" class="mt-3">
												<h2 class="h4">Questão 8</h2>
												<h3>Eu senti que estava usando muita energia nervosa</h3>
												<input id="question-8-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-8-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-8-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-8-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit8" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-9" class="mt-3">
												<h2 class="h4">Questão 9</h2>
												<h3>Eu estava preocupado com situações em que poderia entrar em pânico e fazer papel de bobo</h3>
												<input id="question-9-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-9-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-9-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-9-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit9" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-10" class="mt-3">
												<h2 class="h4">Questão 10</h2>
												<h3>Senti que não tinha nada a desejar</h3> 
												<input id="question-10-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-10-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-10-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-10-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit10" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-11" class="mt-3">
												<h2 class="h4">Questão 11</h2>
												<h3>Eu comecei a ficar agitado</h3>
												<input id="question-11-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-11-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-11-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-11-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit11" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-12" class="mt-3">
												<h2 class="h4">Questão 12</h2>
												<h3>Eu achei difícil relaxar</h3>
												<input id="question-12-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-12-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-12-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-12-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit12" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-13" class="mt-3">
												<h2 class="h4">Questão 13</h2>
												<h3>Eu me senti desanimado e triste</h3>
												<input id="question-13-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-13-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-13-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-13-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit13" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-14" class="mt-3">
												<h2 class="h4">Questão 14</h2>
												<h3>Eu era intolerante com qualquer coisa que me impedisse de continuar o que estava fazendo</h3>
												<input id="question-14-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-14-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-14-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-14-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit14" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-15" class="mt-3">
												<h2 class="h4">Questão 15</h2>
												<h3>Eu senti que estava perto do pânico</h3>
												<input id="question-15-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-15-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-15-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-15-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit15" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-16" class="mt-3">
												<h2 class="h4">Questão 16</h2>
												<h3>Não conseguia ficar entusiasmado com nada</h3>
												<input id="question-16-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-16-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-16-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-16-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit16" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-17" class="mt-3">
												<h2 class="h4">Questão 17</h2>
												<h3>Eu senti que não valia muito como pessoa</h3>
												<input id="question-17-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-17-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-17-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-17-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit17" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-18" class="mt-3">
												<h2 class="h4">Questão 18</h2>
												<h3>eu senti que estava bastante sensível</h3>
												<input id="question-18-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-18-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-18-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-18-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit18" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-19" class="mt-3">
												<h2 class="h4">Questão 19</h2>
												<h3>Eu estava ciente da ação do meu coração na ausência de esforço físico (por exemplo, sensação de aumento da frequência cardíaca, coração falhando)</h3>
												<input id="question-19-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-19-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-19-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-19-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit19" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-20" class="mt-3">
												<h2 class="h4">Questão 20</h2>
												<h3>Eu me senti assustado sem um bom motivo</h3>
												<input id="question-20-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-20-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-20-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-20-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit20" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-21" class="mt-3">
												<h2 class="h4">Questão 21</h2>
												<h3>Eu senti que a vida não tinha sentido</h3>
												<input id="question-21-answer-a" type="radio" class="form-check-input" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
												<input id="question-21-answer-b" type="radio" class="form-check-input" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
												<input id="question-21-answer-c" type="radio" class="form-check-input" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
												<input id="question-21-answer-d" type="radio" class="form-check-input" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit21" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-22" class="mt-3">
												<h2>Obrigado por preencher o questionário!</h2>
												<h3>Sua pontuação é: </h3>
												<h1 id=printtotalscore></h1>
												<p id=printscoreinfo></p>
												<h3>Para refazer o questionário atualize a pagina.</h3>
											</div>
										</form>

									</div>
								</div>
							</div>
							<script src="js/scriptsQ.js"></script>
						</main>

						<br/><br/><br/><br/><br/><br/><br/><br/>
						<footer class="mt-3">
							<p>&copy; Carlos Silva 2021 - Todos os direitos reservados.
						</footer>
					</section>
				</div>
			</div>

</body>

</html>