<?php
    session_start();
     include_once '../model/conta.class.php';
     
     $conta = new conta;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Kiwi code</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="../img/kiwi.ico">
		<link rel=" stylesheet" href="../css/conta.css">
	</head>
		
	<body>		
		<div class="container">
			<h1> Perfil </h1>
				<img class="avatar" src="../img/user_icon.png" alt="Avatar">	
			
			<div class="about"> 
				<h1>Sobre mim</h1>
				<form>
					<P>
						<label>
								<br>
								<textarea cols="40" rows="5" required placeholder="Descreva-se um pouco..."></textarea>
								<br>
								<input type="submit" value="confirmar">
						</label>
					</P>
				</form>
			</div>
			
			<div>
				<h2>Detalhes</h2>
				<?php
					$conta->ImprimeUsuario();
				?>
				<form>
					<label>
						<span class="negrito">Idade:</span>
							<input id="idade" type="number">

						<span class="negrito">Localização:</span>
							<select id="estados">
								<option value="Acre">AC</option>
								<option value="Alagoas">AL</option>
								<option value="Amapá">AP</option>
								<option value="Amazonas">AM</option>
								<option value="Bahia">BA</option>
								<option value="Ceará">CE</option>
								<option value="Distrito Federal">DF</option>
								<option value="Espírito Santo">ES</option>
								<option value="Goiás">GO</option>
								<option value="Maranhão">MA</option>
								<option value="Mato Grosso">MT</option>
								<option value="Mato Grosso do Sul">MS</option>
								<option value="Minas Gerais">MG</option>
								<option value="Pará">PA</option>
								<option value="Paraíba">PB</option>
								<option value="Paraná">PR</option>
								<option value="Pernambuco">PE</option>
								<option value="Piauí">PI</option>
								<option value="Rio de Janeiro">RJ</option>
								<option value="Rio Grande do Norte">RN</option>
								<option value="Rio Grande do Sul">RS</option>
								<option value="Rondônia">RO</option>
								<option value="Roraima">RR</option>
								<option value="Santa Catarina">SC</option>
								<option value="São Paulo">SP</option>
								<option value="Sergipe">SE</option>
								<option value="Tocantins">TO</option>
							</select>
					</label>
				</form>
				<a id="button-home" href="../view/home.php">Go to Home</a>
			</div>
		</div>
	</body>
</html>