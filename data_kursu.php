<!DOCTYPE html>
<html>


<head>

<!--  Elementy head w zewnetrznym pliku PHP -->
<?php include_once ("meta_in_head.php");?>


<meta name="Description"
	content="TEST Autoszkoła Jerzy Chajdys, Kurs prawa jazdy kat. B">
<meta name="Keywords" content="słowa kluczowe!!!! ">
<!--prawo jazdy, auto szkoła, nauka jazdy, szkoła jazdy, autoszkoła, prawo jazdy b, kat b, jerzy, chajdys, test autoszkoła, dobra, solidna, polecana, adres, zgierz, łódź, w zgierzu-->


<?php include_once ("google_analytic_coud_115433.php");?>


<title>TEST Autoszkoła Jerzy Chajdys - Kurs prawa jazdy kat.B ZGIERZ -</title>


<body>

	<!-- Heder: Logo, Menu, Slider - w zewnetrznym pliku -->
<?php include_once ("header.php");?>

		<div
		style="max-width: 950px; min-height: 200px; font-family: Open Sans, sans-serif; font-size: 13px; font-weight: normal; text-align: left; margin-top: 20px; margin-bottom: 10px; margin-left: auto; margin-right: auto; padding: 0px 0px 0px 0px;">


			<!-- Lewa strona (podgląd daty) -->
			<div style="float: left; width: 300px">
				<h1>Panel Administracyjny - zmiana daty kursu</h1>

<?php
/**
 * *******************************************
* plik formularz.php
* ********************************************
*/
$data_1 = $_POST ['data_1'];
$data_2 = $_POST ['data_2'];
$miesiac = $_POST ['miesiac'];
$dzien_1 = $_POST ['dzien_1'];

$dzien_1 = $_POST ['dzien_1'];
if ($dzien_1 == 'Wtorek')
	echo 'Wtorek';
	elseif ($dzien_1 == 'Czwartek')
	echo 'Czwartek';

	$dzien_2 = $_POST ['dzien_2'];
	if ($dzien_2 == 'Wtorek')
		echo 'Wtorek';
		elseif ($dzien_2 == 'Czwartek')
		echo 'Czwartek';

		if (empty ( $data_1 ) and empty ( $data_2 )) {

			// prosty formularz zawierający dwa pola
			echo '
<form action="" method="post">
<table border="0">

<tr>
<td>Dzień tgodnia: </td>
<td align="left">
<select name="dzien_1">
<option value="wtorek">Wtorek
<option value="czwartek">Czwartek
</select>
</td>
</tr>

<tr>
<td>Data: </td>
<td align="left"><input style="width: 150px" type="text" name="data_1" size="25" maxlength="25" /></td>
</tr>

<tr>
<td>Miesiąc: </td>
<td align="left">
<select name="miesiac">
<option value="styczen">Styczeń
<option value="luty">Luty
<option value="marzec">Merzec
<option value="kwiecien">Kwiecień
<option value="maj">Maj
<option value="czerwiec">Czerwiec
<option value="lipiec">Lipiec
<option value="sierpien">Sirpień
<option value="wrzesien">Wrzesień
<option value="pazdziernik">Październik
<option value="listopad">Listopad
<option value="grudzien">Grudzień


		</select>
</td>
</tr>

<tr>
<td colspan="2" align="left"><input style=" width: 150px;
    margin: 13px;
    padding: 0px;
    color: white;
    background: #ce1414;" type="submit" value="ZAPISZ DATE"></td>
</tr>
		
</table>
</form>';
		}
else {
	
	$dane_do_zapisu = $_POST ['dane_do_zapisu'];
	
	// zmienna $dane, która będzie zapisana
	// może także pochodzić z formularza np. $dane = $_POST['dane'];
	$dane_do_zapisu = '
	<div class="right_side">
	<h1 style="color: #000000;">Najbliższa data rozpoczęcia kursu:</h1>

	<div id="data_kursu_box">
		<div id="dzien_tygodnia">'.$dzien_1.'</div>
		<div id="data">'.$data_1.'</div>

		<div id="miesiac">'.$miesiac.'</div>
	</div>
	<div id="adres">
		ul. Dąbrowskiego 1 <br /> 95-100, Zgiersz<br /> godz. 17:00 - 19:15
	</div>
    <a href="#login-box" class="login-window">Login / Sign In</a>
		

</div>

<div id="login-box" class="login-popup">
	<a href="#" class="close"><img src="images/close_pop.png"
		class="btn_close" title="Close Window" alt="Close" /></a>
	<div id="login">
		 <form method="post" class="signin" action="sprawdz.php">
			<span class="fontawesome-user"></span> 
			<input id="username" name="login" value="" type="text" autocomplete="on" placeholder="Login"> <span class="fontawesome-lock"></span> 
			<input id="password" name="password" value="" type="password" placeholder="Hasło"> 
			<button class="submit button" type="submit">Zaloguj się</button>
				
		</form>
	</div>
</div>

		'."\t";
	
	// przypisanie zmniennej $file nazwy pliku
	$file = "data_rozpoczecia_kursu.php";
	
	// uchwyt pliku, otwarcie do odczytu i dopisania
	$fp = fopen ( "$file", "w+" );
	
	// dodanie do zmiennej dane poprzedniej zawartości pliku
	// $dane_do_zapisu=$dane_do_zapisu.fread($fp, filesize($file));
	
	// ustawienie kursora na początku pliku
	rewind ( $fp );
	
	// blokada pliku do zapisu
	flock ( $fp, 2 );
	
	// zapisanie danych do pliku
	fwrite ( $fp, $dane_do_zapisu );
	
	// odblokowanie pliku
	flock ( $fp, 3 );
	
	// zamknięcie pliku
	fclose ( $fp );
	
	echo "<font color=red>Dane zostały zapisane!</font><br />";
	echo "<a href=\"data_kursu.php\"><button>Zmień date</button></a>";
}

?>


</div>





			<div
				style="margin-left: 30px; width: 340px; float: left; padding: 0px 20px 20px 20px;">
				<h1>Podgląd daty:</h1>
				<center>
				<?php
$plik = fopen ( "data_rozpoczecia_kursu.php", "r" );
if ($plik === false) {
	echo "Error"; // Wyświetla "Error" kiedy nie odnajdzie pliku
} else {
	while ( ! feof ( $plik ) ) {
		$bufor = fgets ( $plik );
		echo "$bufor";
	}
	fclose ( $plik );
}
?>
</center>
					</div>

			<br style="clear: both;" />
		</div>



	<?php include_once ("footer.php");?>



</body>
</html>
