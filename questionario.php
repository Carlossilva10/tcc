<?php
session_start();
include_once('config.php');
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('Location: login.php');
}
$logado = $_SESSION['email'];
$sql = "SELECT * FROM cadastro ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Website Template with Sticky Sidebar</title>
	<meta name="description" content="Free responsive website HTML theme with sticky sidebar for both desktop and mobile. ">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styleQ.css">
	<script src="js/script.js"></script>

	<!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<link rel="stylesheet" href="css/bootstrap.css">


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
	<br><br><br>
	<header>
		<div id="header Left">
			<img src="Imagens\bomhumor.png" width="210" height="150" align="left"> <br /> <br />
			<h1>
				<a href="login.html">
					<div height="100" style="background-color: blue;line-height: 50px;text-align: right;">
						<p style="color: white">Login</p>
					</div>
				</a>
			</h1 </div <div id="headerRight">
			<nav>
				<ul>
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
					<li><a href="http://localhost/TCC/Links.html">Links ??teis</a></li>
					<li><a href="http://localhost/TCC/login.html">Question??rio DASS-21</a></li>


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
									<img src="Imagens\cadastro.jfif" width="280" height="200" align="left">
									<nav>
										<ul>
											<li><a href="http://localhost/TCC/cadastro.php">Fa??a aqui seu Cadastro</a></li>
										</ul>
									</nav </div>

									<div>
										<img src="Imagens\Medico1.jfif" width="280" height="200" align="left">
										<nav>
											<ul>
												<li><a href="http://localhost/TCC/Especialista.html">Procure um especialista</a></li>
											</ul>
										</nav </div>

										<div>
											<img src="Imagens\Depoimento2.jfif" width="280" height="200" align="left">
											<nav>
												<ul>
													<li><a href="http://localhost/TCC/Depoimentos.html">Depoimentos</a></li>
												</ul>
											</nav </div>

											<div>
												<img src="Imagens\Livro1.jfif" width="280" height="200" align="left">
												<nav>
													<ul>
														<li><a href="http://localhost/TCC/Livros.html">Encontre um livro</a></li>
													</ul>
												</nav </div>



												<div>
													<a href="http://localhost/TCC/Atendimento.html"><img src="Imagens\informa????o188.jpg" width="280" height="90" align="left"></a>

												</div>

												<br />
												<br />
												<br />
												<br />
												<br />
												<br />
												<br />


												<p><a class="back2Top" href="#">???&nbsp;Back to&nbsp;top&nbsp;???</a></p>


							</aside>
						</div>
					</div>
					<div id="stick-here"></div>
				</div>

				<div id="main">
					<section id="page">
						<main>

							<article>
								<center>
									<h2>QUESTION??RIO DASS-21</h2>
								</center>

								<strong>


									<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Trata-se de um question??rio com 21 perguntas, que medem a intensidade de
										comportamentos e sensa????es experimentados nos ??ltimos sete dias. Cada pergunta ?? classificada em uma escala Likert
										de quatro pontos de frequ??ncia ou gravidade das experi??ncias dos participantes durante a ??ltima semana com a
										inten????o de enfatizar os estados emocionais sobre os tra??os.</p>

								</strong>
							</article>


							<article>

								<h2>VOC?? ACHA QUE EST?? ESTRESSADO?</h2>
								<h4>Por favor, leia cada afirma????o e clique na op????o que indica o quanto a afirma????o
									aplicado a voc?? na semana passada.<br>
									N??o h?? respostas certas ou erradas. N??o gaste muito tempo
									em qualquer declara????o.<br><br>
									A escolha de classifica????o ?? a seguinte:<br>
									- N??o se aplica a mim de forma alguma<br>
									- Aplicado a mim at?? certo ponto, ou por algum tempo<br>
									- Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
									- Aplicado a mim muito, ou na maioria das vezes</h4>

							</article>

							<div class="container">
								<div class="row">
									<div class="two-thirds column">
										<h2>Question??rio Dass-21</h2>

										<div id="progress_bar"></div>
										<form class="questions_box">

											<div id="question-1">
												<h2>Quest??o 1</h2>
												<h3>Achei dif??cil desacelerar</h3>
												<input id="question-1-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-1-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-1-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-1-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit1" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-2">
												<h2>Quest??o 2</h2>
												<h3>Eu estava ciente da secura da minha boca</h3>
												<input id="question-2-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-2-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-2-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-2-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit2" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-3">
												<h2>Quest??o 3</h2>
												<h3>Eu n??o conseguia sentir nenhum sentimento positivo</h3>
												<input id="question-3-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-3-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-3-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-3-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit3" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-4">
												<h2>Quest??o 4</h2>
												<h3>Tive dificuldade para respirar (por exemplo, respira????o excessivamente r??pida, falta de ar na aus??ncia de esfor??o f??sico)</h3>
												<input id="question-4-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-4-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-4-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-4-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit4" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-5">
												<h2>Quest??o 5</h2>
												<h3>Achei dif??cil desenvolver a iniciativa de fazer as coisas</h3>
												<input id="question-5-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-5-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-5-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-5-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit5" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-6">
												<h2>Quest??o 6</h2>
												<h3>Eu tendia a reagir de forma exagerada ??s situa????es</h3>
												<input id="question-6-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-6-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-6-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-6-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit6" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-7">
												<h2>Quest??o 7</h2>
												<h3>Senti tremores (por exemplo, nas m??os)</h3>
												<input id="question-7-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-7-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-7-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-7-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit7" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-7">
												<h2>Quest??o 7</h2>
												<h3>Senti tremores (por exemplo, nas m??os)</h3>
												<input id="question-7-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-7-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-7-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-7-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit7" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-8">
												<h2>Quest??o 8</h2>
												<h3>Eu senti que estava usando muita energia nervosa</h3>
												<input id="question-8-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-8-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-8-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-8-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit8" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-9">
												<h2>Quest??o 9</h2>
												<h3>Eu estava preocupado com situa????es em que poderia entrar em p??nico e fazer papel de bobo</h3>
												<input id="question-9-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-9-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-9-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-9-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit9" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-10">
												<h2>Quest??o 10</h2>
												<input id="question-10-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-10-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-10-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-10-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit10" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-11">
												<h2>Quest??o 11</h2>
												<h3>Eu comecei a ficar agitado</h3>
												<input id="question-11-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-11-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-11-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-11-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit11" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-12">
												<h2>Quest??o 12</h2>
												<h3>Eu achei dif??cil relaxar</h3>
												<input id="question-12-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-12-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-12-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-12-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit12" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-13">
												<h2>Quest??o 13</h2>
												<h3>Eu me senti desanimado e triste</h3>
												<input id="question-13-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-13-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-13-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-13-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit13" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-14">
												<h2>Quest??o 14</h2>
												<h3>Eu era intolerante com qualquer coisa que me impedisse de continuar o que estava fazendo</h3>
												<input id="question-14-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-14-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-14-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-14-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit14" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-15">
												<h2>Quest??o 15</h2>
												<h3>Eu senti que estava perto do p??nico</h3>
												<input id="question-15-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-15-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-15-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-15-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit15" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-16">
												<h2>Quest??o 16</h2>
												<h3>N??o conseguia ficar entusiasmado com nada</h3>
												<input id="question-16-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-16-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-16-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-16-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit16" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-17">
												<h2>Quest??o 17</h2>
												<h3>Eu senti que n??o valia muito como pessoa</h3>
												<input id="question-17-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-17-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-17-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-17-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit17" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-18">
												<h2>Quest??o 18</h2>
												<h3>eu senti que estava bastante sens??vel</h3>
												<input id="question-18-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-18-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-18-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-18-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit18" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-19">
												<h2>Quest??o 19</h2>
												<h3>Eu estava ciente da a????o do meu cora????o na aus??ncia de esfor??o f??sico (por exemplo, sensa????o de aumento da frequ??ncia card??aca, cora????o falhando)</h3>
												<input id="question-19-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-19-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-19-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-19-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit19" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-20">
												<h2>Quest??o 20</h2>
												<h3>Eu me senti assustado sem um bom motivo</h3>
												<input id="question-20-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-20-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-20-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-20-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit20" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>

											<div id="question-21">
												<h2>Quest??o 21</h2>
												<h3>Eu senti que a vida n??o tinha sentido</h3>
												<input id="question-21-answer-a" type="radio" name="favelang" value=1> N??o se aplica a mim de forma alguma<br>
												<input id="question-21-answer-b" type="radio" name="favelang" value=2> Aplicado a mim at?? certo ponto, ou por algum tempo<br>
												<input id="question-21-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau consider??vel, ou uma boa parte do tempo<br>
												<input id="question-21-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
												<div id="submit21" class="button">Enviar Resposta</div>
												<div class="clearfix"></div>
											</div>



											<div id="question-22">
												<h2>Obrigado por preencher o question??rio!</h2>
												<h3>Sua pontua????o ??: </h3>
												<h1 id=printtotalscore></h1>
												<p id=printscoreinfo></p>
												<h3>Para refazer o question??rio atualize a pagina.</h3>

											</div>



										</form>

									</div>
								</div>
							</div>

							<script src="js/scriptsQ.js"></script>





						</main>



						<footer>
							<p>&copy; Carlos Silva 2021 - Todos os direitos reservados.
						</footer>
					</section>
				</div>
			</div>

</body>

</html>