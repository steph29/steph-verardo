
<?php

function send_mail()
{

	$send_to = 's.verardo29@gmail.com';

	// $subject_mail = $_POST['subject'];
	$message_mail = '<html>';
	$message_mail .= '<body>';

		if ($_POST['name'] == "")
		{
			$message_mail .= '<p>'."Bonjour, ".'<br/>'."Vous avez recu un message de ".$_POST['name'].'</p>';

		}
		else {
			$message_mail .= '<p>'."Bonjour, ".'<br/>'."Vous avez recu un message de ".$_POST['name'].'<p>';
	}

	$message_mail .= '<p>'.'<strong>'.'<br/>'."Message de  : ".'</strong>'.$_POST['email'].'</p>';
	$message_mail .= '<p>'.'<strong>'.'<br/>'."Contenu du message : ".'</strong>'.'</p>';
	$message_mail .= '<p>'.nl2br($_POST['message']).'</p>';
	$message_mail .= '</body>';
	$message_mail .= '</html>';

	$headers = 'MINE-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

	mail($send_to, $subject_mail, $message_mail, $headers);

}

if (isset($_POST['sendmail']))
{
	send_mail();
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="epica design">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
<p>Merci pour votre message, il a bien été envoyé </p>

</body>
