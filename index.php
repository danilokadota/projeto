<html>
	<head>
	<title>Galeria de Produtos</title>
	<style>
		#container{
			width: 100%;
		}
		#cabecelho{
			width: 100%;
			height: 80px;
			background-color: red;
		}
		#logotipo{
			width: 80px;
			height: 80px;
		}
		#lateral{
			width: 25%;
			height: 605px;
			float: left;
			background-color: green;
		}
		#conteudo{
			width: 75%;
			height: 605px;
			float: right;
			background-color: yellow;
		}
		#cont_1{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_2{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_3{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_4{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_5{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_6{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_7{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_8{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
		}
		#cont_9{
			width: 33%;
			height: 200px;
			float: left;	
			border:1px solid black;
		}
		#rodape{
			width: 100%;
			height: 80px;
			clear: both;
			background-color: blue;
		}
		#img{
			margin-left:70px;
		}
	</style>
	</head>
	<body>
		<div id="container">
			<div id="cabecalho">
				<img src="imgs/logotipo.png" alt="logotipo" id="logotipo">
			</div>
			<div id="lateral">
				<h3>Categorias</h3>
				<table>
					<tr>
						<td><a href="index.php">Todas</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=1">Bonecas</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=2">Caminhões</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=3">Cozinhas</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=4">Helicópteros</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=5">Jogos</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=6">Motos</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=7">Praia</a></td>
					</tr>
					<tr>
						<td><a href="index.php?categoria=8">Tratores</a></td>
					</tr>
				</table>
			</div>
			<div id="conteudo">
				<div id="cont_1">
					<img src="imgs/img01.jpg" id="img"alt="">
				</div>
				<div id="cont_2">
					<img src="imgs/img02.jpg" id="img"alt="">
				</div>
				<div id="cont_3">
					<img src="imgs/img03.jpg" id="img"alt="">
				</div>
				<div id="cont_4">
					<img src="imgs/img04.jpg" id="img"alt="">
				</div>
				<div id="cont_5">
					<img src="imgs/img05.jpg" id="img"alt="">
				</div>
				<div id="cont_6">
					<img src="imgs/img06.jpg" id="img"alt="">
				</div>
				<div id="cont_7">
					<img src="imgs/img07.jpg" id="img"alt="">
				</div>
				<div id="cont_8">
					<img src="imgs/img08.jpg" id="img"alt="">
				</div>
				<div id="cont_9">
					<img src="imgs/img09.jpg" id="img"alt="">
				</div>
			</div>
			<div id="rodape"></div>
		</div>
	</body>
</html>