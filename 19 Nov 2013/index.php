<?php
	/* if( isset($_GET['categoria']) )
		die('Categoria enviada:' . $_GET['categoria']);
	*/
?>
<html>
	<head>
		<title>Layout Home divage</title>
		<style>
			div {
	
				border : 1px solid black;
			}
			#cabec {
				background-color:yellow;
				height:80px;
			}
			#lateral {
				background-color:lightblue;
				height : 400px;
				width : 150px;
				float : left;
			}
			
			#conteudo {
				height: 400px;
				background-color:lightgreen;
				width : 870px;
				float : right;
			}
			#rodape {
				clear:both;
			}
			#geral {
				width:1024px;
			}
			.fotos {
				width:165px;
				margin-right:5px;
				height:130px;
				border:1px dotted red;
				background-color:orange;
				text-align:center;
				float:left;
				margin-top:5px;
				font-size:12px;
			}
		</style>
	</head>
	<body>
		<div id='geral'>
			<div id='cabec'>Cabecalho</div>
			<div id='lateral'>
				<a href='index.php'> Todas </a>  <br>
				<?php
					mysql_connect("localhost","root","");
					mysql_select_db("projeto") or 
						die("ERRO MYSQL:" . mysql_error());
					$sql="SELECT * FROM categorias ORDER BY categoria";
					
					$rs=mysql_query($sql)  or 
						die("ERRO MYSQL:" . mysql_error());
					$totLinhas = mysql_num_rows($rs);
					
					for($n=0 ; $n<$totLinhas ; $n++)
					{
						$codCategoria=mysql_result($rs , $n, 'codigo');
						
						echo "<a href='index.php?categoria=$codCategoria'>";
						echo mysql_result($rs , $n, 'categoria');
						echo "</a>";
						
						echo '<br>';
					}
				?>

			</div>
			<div id='conteudo'>
				<?php
					$sql='SELECT * FROM produtos';
					
					if( isset($_GET['categoria']) )
					{
						$cat = $_GET['categoria'];
						$sql = $sql . " WHERE categoria='$cat' "; 
						//die($sql);
					}
					$rsProdutos = mysql_query($sql) or
						die("ERRO MYSQL" . mysql_error() );
						
					$totLinhas = mysql_num_rows($rsProdutos) or
						die("ERRO MYSQL" . mysql_error() );
					
					for($n=0 ; $n<$totLinhas ; $n++)
					{
						$imagem = mysql_result($rsProdutos, $n, 'fotoSite');
						$nome =  mysql_result($rsProdutos, $n, 'nome');
						$preco=  mysql_result($rsProdutos, $n, 'precoVenda');
						echo "<div class='fotos'>";
						echo "<img src='imgs/$imagem'> <br>";
						echo $nome . '<br>';
						echo 'R$ ' . $preco;
						echo '</div>';
					}
				?>
			</div>
			<div id='rodape'>Rodape</div>
		</div>
	</body>
</html>




