<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../css/formularz_emial.css" type="text/css" media="screen"/>
</head>
<body>

<?php 
if(!empty($_POST["mail"]))      // jeżeli pole mail nie jest puste
{
echo '<font color="red" size="4">','Wiadomość została wysłana pomyślnie','</font></br>';      // wyświetla komunikat o wysłaniu maila
echo '<font color="black" size="4">','<i>','Pozdrawiam Jerzy Chajdys','</i>','</font>';
$headers = 'From: biuro@test-autoszkola.pl'; // nadawca maila, z tego będzie wysłana wiadomość
$email = 'biuro@test-autoszkola.pl';             // na ten adres będą dostarczane wiadomości ze strony 
$subject = $_POST['temat'];                  // temat wiadomoci
$message = date('H:i, jS F, Y')."
Wiadomość od: ".$_POST['mail']."
Treść wiadkomości:
".$_POST['tresc'];// całość treści
//

mail("$email", "$subject", "$message", "$headers");         // funkcja wysyłająca wiadomość
}
?>
</body>
</html>