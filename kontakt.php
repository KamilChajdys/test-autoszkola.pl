<!DOCTYPE html>
<html>


<head>

<!--  Elementy head w zewnetrznym pliku PHP -->
<?php include_once ("meta_in_head.php");?>


<meta name="Description"
	content="Dane kontaktowe do naszej szkoły nauki jazdy w Zgierzu. Kurs prawa jazdy kat. B w TEST autoszkoła Jerzy Chajdys">
	
<meta name="Keywords"
	content="kontakt, adres, godziny otwarcia, test, auto, szkoła, jerzy chajdys">
<!--prawo jazdy, auto szkoła, nauka jazdy, szkoła jazdy, autoszkoła, prawo jazdy b, kat b, jerzy, chajdys, test autoszkoła, dobra, solidna, polecana, adres, zgierz, łódź, w zgierzu-->



<?php include_once ("google_analytic_coud_115433.php");?>



</head>
<title>TEST Autoszkoła Jerzy Chajdys - Kontakt</title>


<body onload="popup_massage()">

	<!-- Heder: Logo, Menu, Slider - w zewnetrznym pliku -->
<?php include_once ("header.php");?>



	<div id="peag_body">
		<div class="middle">

			<div style="float: left; max-width: 320px;">
				<h1>KONTAKT :</h1> 
					
					<p><b>Siedziba:</b><br /> "TEST" AUTOSZKOŁA
					Jerzy Chajdys<br /> 95- 100 Zgierz<br /> ul. Boya-Żeleńskiego
					43a/12<br /> Jerzy Chajdys - tel. +48 601 935 011
				</p>

				<p>
					<b>Biuro / sala wykładowa:</b><br /> 95-100 Zgierz<br /> ul. Łódzka
					4/8, pok. 23<br />
					<br /> <b>Terminy zajęć:</b> wtorek i czwartek - godz. 17:30 -
					19:00<br /> <b>e-mail:</b>
					<script language="JavaScript">eval(unescape('%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%27%3C%61%20%68%72%65%66%3D%22%6D%61%69%6C%74%6F%3A%62%69%75%72%6F%40%74%65%73%74%2D%61%75%74%6F%73%7A%6B%6F%6C%61%2E%70%6C%22%3E%62%69%75%72%6F%40%74%65%73%74%2D%61%75%74%6F%73%7A%6B%6F%6C%61%2E%70%6C%3C%2F%61%3E%27%29'))</script>
					
					<br /> <b>Plac
						manewrowy:<br></b> 95-100 Zgierz, ul. Wiosny Ludów 26a<br />
				</p>
			</div>

			<div style="float: left; padding: 10px">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2464.260662894849!2d19.406762315782792!3d51.856196979694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bb5da6ec14739%3A0x5d8ff6b38c1ef2b8!2s%22TEST%22+Autoszko%C5%82a+Jerzy+Chajdys!5e0!3m2!1spl!2spl!4v1490725171642" width="260" height="280" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			</div>

			<br style="clear: both;" />
			<h2>
				<b><i>Napisz do nas:</i></b>
			</h2>
			<div class="container">
				<div class="row body">
					<form action="php/skrypt_email.php" method="post">
						<ul>

							<li>
								<p class="left">
									<label for="first_name">Imie: </label> <input type="text"
										name="first_name" placeholder="  Imie" />
								</p>
								<p class="pull-right">
									<label for="last_name">Nazwisko: </label> <input type="text"
										name="last_name" placeholder="  Nazwisko" />
								</p>
							</li>

							<li>
								<p>
									<label for="email">email <span class="req">*</span></label> <input
										type="email" name="mail" placeholder="  email@gmail.com" />
								</p>
							</li>
							<li><div class="divider"></div></li>
							<li><label for="comments">Treść wiadomości: </label> <textarea
									cols="20" rows="3" name="tresc"></textarea></li>

							<li><input class="btn btn-submit" type="submit" value="Wyślij" />
							</li>

						</ul>
					</form>
				</div>
			</div>



			<!-- 
<iframe frameborder="0" width="600" height="600" scrolling="no" src="kontakt_formularz.html">
Tu napis lub odwołanie w przypadku gdy przeglądarka nie obsługuje pływających ramek
</iframe>
 -->

			<br />
			<br /> <br style="clear: both;" />
		</div>

		<!-- Data rozpoczęcie kursu po prawej stronie -->
		<!-- Data rozpoczęcia kursu + reklamy -->
	<?php include_once ("data_rozpoczecia_kursu.php");?>
	
	
		<br style="clear: both;" />
	</div>


	<?php include_once ("footer.php");?>



</body>
</html>