<?php
 
define('login', 'login');
define('haslo', '123456');
 
 
// powyzej badz ponizej przed tym kodem moze byc umieszczony formularz ;)
// najpierw sprawdzamy, czy wysyłane zmienne w formularzu nie są puste.
if ( ! empty( $_POST['login'] ) && ! empty( $_POST['password'] ) )
{
	// jezeli nie dokonujemy sprawdzenia poprawnosci loginu i hasla
	if ( $_POST['login'] == login && $_POST['password'] == haslo )
	{
		// tworzymy zmienna sesyjna
		$_SESSION['zalogowany'] = '1';
	echo 'Zalogowany';
	print "<script>setTimeout('document.location = \"data_kursu.php\"', 3000);</script>";//Java script odpowiedzialny za przekierowanie po 3 sekundach
	}
	else
	{
		echo 'Podales zly login badz haslo!';
		print "<script>setTimeout('document.location = \"index.php\"', 5000);</script>";
	}
}
else
{
	echo 'Wprowadz dane do formularza :)';
	print "<script>setTimeout('document.location = \"index.php\"', 5000);</script>";
}
 
 
?>