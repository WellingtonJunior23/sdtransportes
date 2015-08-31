<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SD Transportes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<div class="container">
<h2>Obrigado por entrar em contato</h2>

<?php 

$nome = filter_var($_POST['nome'],FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST['assunto'], FILTER_SANITIZE_STRING);
$telefone = filter_var($_POST['telefone'],FILTER_SANITIZE_STRING);

$mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_STRING);


/*$email = filter_var_array($_POST,array('email' => FILTER_SANITIZE_EMAIL,
									   'email' => FILTER_VALIDATE_EMAIL));*/
$to = 'sdtransportes@bol.com.br';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers  = 'Content-type: text/html; charset=utf-8' . "\r\n"; 

$EmailMessage = 'Mensagem: ' . $mensagem .
	   '<br>' . ' De: '. $nome . 
       '<br>' . 'Telefone: ' . $telefone . 
       '<br>' . 'E-mail: ' . $email;

if (mail($to, $subject, $EmailMessage, $headers)){
	echo 'Olá ', $nome , ' Obrigado pelo seu contato <br>
		  Sua mensagem foi enviada com sucesso <br><br>';
}else {
	echo 'Desculpe, sua mensagem não foi enviada, tente novamente mais tarde! <br><br>';
}	
?>

<a class="btn btn-primary" href="index.php" role="button">Voltar</a>

</div>
</body>
</html>