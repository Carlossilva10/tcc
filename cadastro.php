<?php

if(isset($_POST['submit']))
{

   // print_r('cidade: ' . $_POST['cidade']);

include_once('config.php');	

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];



$result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha,sexo,data_nasc,cidade,estado) 
VALUES ('$nome','$email','$senha','$sexo','$data_nasc','$cidade','$estado') ");


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
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

<!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
  		        
  		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

    <style>
        
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 80%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        
    </style>
</head>
<body>

<header>
	

	<div id="header Left">
		<img src="Imagens\bomhumor.png"  width="210" height="150" align= "left"> <br/> <br/>
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
					<li><a href="http://localhost/TCC/login.php">Questionário DASS-21</a></li>
					
					
				</ul>
	</div>

</header>
<div id="wrapall">
	<div id="sidebar">
		<div id="stickThis">
			<div id="sidebarContent">
				<a id="logo" >CADASTRO</a>
				<aside>
					<div>
					<img src="Imagens\Medico1.jfif"  width="280" height="200" align="left">
					<nav>  
						<ul>
							<li><a href="file:///C:/Users/carlossilva/Desktop/new/Especialista.html">Procure um especialista</a></li>
						</ul>
					</nav					
					</div>

					<div>
					<img src="Imagens\Depoimento2.jfif"  width="280" height="200" align="left">
					<nav>  
						<ul>
							<li><a href="Depoimentos.html">Depoimentos</a></li>
						</ul>
					</nav					
					</div>

					<div>
					<img src="Imagens\Livro1.jfif"  width="280" height="200" align="left">
					<nav>  
						<ul>
							<li><a href="Livros.html">Encontre um livro</a></li>
						</ul>
					</nav					
					</div>

					

					<div>
					<a href="Atendimento.html"><img src="Imagens\informação188.jpg"  width="280" height="90" align="left"></a>
										
					</div>
					
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
				
					<p><a class="back2Top" href="#">⮝&nbsp;Back to&nbsp;top&nbsp;⮝</a></p>
				
					
				</aside>
			</div>
		</div>
		<div id="stick-here"></div>
	</div>

	<div id="main">
		<section id="page">
			<main>

				<article>
					<center><h2>O site que te leva ao BOM HUMOR</h2></center>

					<strong>
					
						
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; O site Bom humor é composto de páginas que trazem conteúdos de leitura e audio através de poemas, frases motivadoras, músicas e imagens com leveza visual.</p> 
						 <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; O intuito do site é ajudar a atender todas as expectativas dos usuários e patrocinadores referente a Depressão, a Anciedade e Transtorno depresivo.</p>
						 <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; As pessoas que se sentirem angustiadas, solitárias, depresivas e com raivas poderão atráves deste site encontrar mecanismos para a tranquilidade, 
						serenidade, e bem estar. &nbsp Tudo isso atráves de imagens, frases motivacionais, musicas, com indicações de livros e profissionais especializados.</p>
						
					</strong>
				</article>
				<br/><br>

    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome completo</label>
                    <br><br>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">Email</label>
                    <br><br>
                    <input type="text" name="email" id="email" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label>
                    <br><br>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade</label>
                    <br><br>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="estado" class="labelInput">Estado</label>
                    <br><br>
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    
                </div>
                <br><br>
                
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    </main>		

    <br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
			<footer>
				<p>&copy; Carlos Silva 2021 - Todos os direitos reservados. 
			</footer>
		</section>
	</div>
</div>
</body>
</html>
