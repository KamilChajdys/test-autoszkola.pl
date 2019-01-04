<!DOCTYPE html>
<html>
<head>
<meta name=viewport content="width=device-width">
<meta name=google-site-verification
	content="yPEv4YnB5fJfX0xQGJ46U6sRwBRAz7dmC4dPN_yk1eA">
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta http-equiv=Content-Language content=pl>
<meta name=Author content="Chajdys Kamil">
<meta name=Robots content=index,follow>
<meta name=Description
	content="Cena kursu prawa jazdy kat. B oraz cennik pozostały usług dostępnych w naszej autoszkole. Cena badań lekarskich oraz jadzd dodatkowych">
<meta name=Keywords content="cena kursu kat. b, cena godziny jazdy, cena badania lekarskiego, auto szkoła">
<link rel=stylesheet href=style/style.css type=text/css media="screen">
<!--[if IE]><link rel="stylesheet" media="all" href="style/style.css" /><![endif]-->
<link rel=stylesheet href="style/menu.css">

<link rel=stylesheet href=style/komentarz_wazne_style.css type=text/css
	media="screen">
	
	
	
	<!-- Analiza google - Load....  --> 
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28171016-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
<!-- Analiza google kod - end... -->

<title>TEST Autoszkoła Jerzy Chajdys, Kurs prawa jazdy kat. B Zgierz -
	Oferta</title>





</head>

<body onload="popup_massage()">

<?php include_once ("header.php");?>



	<div id="peag_body">
		<div class="middle">
				<h2
				style="border-bottom: 2px solid #dc2d4d; max-width: 200px; font-size: 18px;">Cennik:</h2>
			<br />



			<h1>Cały kurs prawa jazdy:</h1>

			<table class="responsive-table">
				<thead>
					<tr>
						<th style="width: 180px;" data-table="*"></th>
						<th style="width: 130px;">Cena:</th>
						<th>Liczba godzin teoretycznych</th>
						<th>Liczba godzin praktycznych</th>
					</tr>
				</thead>

				<tbody>
					<tr style="font-weight: bold; font-style: italic;">
						<td><h1 style="font-size: 14px;">Kurs prawa jazdy kat. B</h1></td>
						<td>1200zł / osoba</td>
						<td>30godz. <i style="font-weight: normal; font-style: italic;">(45min)</i></td>
						<td>30godz. <i style="font-weight: normal; font-style: italic;">(60min)</i></td>
					</tr>
				</tbody>
			</table>

			<br /> <br />
			<h1>Inne:</h1>
			<table>
				<tr>
					<td width="200px"></td>
					<td>Cena:</td>
				</tr>
				<tr style="font-weight: bold; font-style: italic;">
					<td><h1 style="font-size: 14px; margin-bottom: 0px;">Dodatkowe
							jazdy</h1></td>
					<td>40zł / godzina <i
						style="font-weight: normal; font-style: italic;">(60min.)</i></td>
				</tr>
				<tr style="font-weight: bold; font-style: italic;">
					<td><h1 style="font-size: 14px; margin-bottom: 0px;">Badania
							lekarskie</h1></td>
					<td>100zł / osoba</td>
				</tr>
				<tr style="font-weight: bold; font-style: italic;">
					<td><h1 style="font-size: 14px; margin-bottom: 0px;">Materiały
							szkoleniowe</h1></td>
					<td>GRATIS *</td>
				</tr>
				<tr style="font-weight: bold; font-style: italic;">
					<td><h1 style="font-size: 14px; margin-bottom: 0px;">Egzamin
							wewnętrzny</h1></td>
					<td>GRATIS *</td>
				
				
				<tr style="font-weight: bold; font-style: italic;">
					<td><h1 style="font-size: 14px; margin-bottom: 0px;">Jazda po placu
							Egzaminacyjnym WORD</h1></td>
					<td>GRATIS * <i style="font-weight: normal; font-style: italic;">(30min.)</i></td>
				</tr>

			</table>

			<p
				style="background-color: #dff0d8; padding: 10px; border: 2px solid #94D479; font-weight: bold; font-style: italic;">
				Z każdym naszym kursantem na ostatnich jazdach przed Egzaminem
				Państwowym jedziemy na plac Egzaminacyjny WORD w Łodzi <br /> <br />
				* <i style="font-weight: normal; font-style: italic;">Gratis jedynie
					dla naszych kursantów</i>
			</p>


			<!-- Skryp do Responsive TABLE -->
			<script>
$(function() {
  $.fn.lazyResponsiveTable = function( options ) {
    var settings = $.extend({
      thead: 'thead',
      tbody: 'tbody',
    }, options);
    
    var $table = $(this);
    var $thead = $table.find(settings.thead);
    var $tbody = $table.find(settings.tbody);
        
    $thead.find('th').each( function() {
      var data = $(this).text();
      if( ! $(this).attr('data-table')) {
        $(this).attr('data-table',data);
      }
    });
    
    $tbody.find('td').each(function() {
      var index = $(this).index();
      var data = $thead.find('th:eq('+index+')').attr('data-table');
      $(this).attr('data-table',data);
    });
  };
  
  $('.responsive-table').lazyResponsiveTable();
});		
</script>



			<br style="clear: both;" />



			<br style="clear: both;" />
		</div>

		<!-- Data rozpoczęcie kursu po prawej stronie -->
		<?php include_once ("data_rozpoczecia_kursu.php");?>
	
	

		<br style="clear: both;" />
	</div>

	<?php include_once ("footer.php");?>

</body>
</html>