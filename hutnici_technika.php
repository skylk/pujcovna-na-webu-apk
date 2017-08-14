<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Půjčovna nářadí Tachov - vibrační a hutnící technika</title>
		<meta name="description" content="GradeD s.r.o - půjčovna nářadí pro Tachov a okolí.">
		<meta name="keywords" content="Graded,půjčování nářadí, půjčovna, Plzeňský kraj, Tachov, servis, opravy, údržba nářadí">
		<meta name="robots" content="index, follow">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
	   <?php
    	$skupina = 2;
		include "sql.php";  //připojení k MySQL 
		$_id = 0;		
		?>
		<!-- Page Wrapper -->
			<div id="page-wrapper">				
				<!-- Header -->
					<header id="header">
						<?php
						include "include/header.php";
						?> 
					</header>

				<!-- Main -->
					<article id="main">
			<!--			<header>
							<h2>Půjčovna nářadí - Tachov</h2>
							<p>Zabýváme se půjčováním nářadí.<br />
							Stavíte, rekonstruujete nebo zrovna nemáte stroj, který potřebujete?<br />
							Nebojte se zeptat, rádi poradíme.</p>
						</header> -->
						<section class="wrapper style3 special">
							<div class="inner" >
							<header class="major">
							  <h2>VIBRAČNÍ A HUTNÍCÍ TECHNIKA</h2>
                              <p>Veškeré ceny pujčovného viz. aktuální <a href="download/cenik.pdf">ceník.</a></p>
							</header>
								<ul class="features features33" >
									<li>
										<span class="image fit image-container"><img src="images/tools/wacker_bpu_2540.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Wacker BPU 2540</h3>
										<h5>Vibrační deska</h5>
										<p><span>Výkon:</span> 4 kW<br>
										   <span>Odstředivá síla:</span> 25 kN<br>
										   <span>Hmotnost:</span> 150 kg<br>
										   <span>Velikost desky:</span> 700 x 400 mm<br>
                                           Obousměrná</p>
                                           <div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >1 hodina</td>
                                                <td ><?=$stroje[$_id]['hodina'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >2 - 5 hodin</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč </td>
                                              </tr>
                                            <tr>
                                                <td >1 den/24h</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč </td>
                                              </tr>
                                               <tr>
                                                <td >víkend</td>
                                                <td ><?=$stroje[$_id]['vikend'] ?> Kč </td>
                                              </tr>
                                              <tr>
                                                <td >kauce</td>
                                                <td ><?=$stroje[$_id]['kauce'] ?> Kč </td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/wacker_vp2050.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Wacker VP2050</h3>
										<h5>Vibrační deska</h5>
										<p><span>Výkon:</span> 4,1 kW<br>
										   <span>Odstředivá síla:</span> 20 kN<br>
										   <span>Hmotnost:</span> 103 kg<br>
										   <span>Velikost desky:</span> 580 x 500 mm<br>
                                           Jednosměrná</p>
                                           <div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >1 hodina</td>
                                                <td ><?=$stroje[$_id]['hodina'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >2 - 5 hodin</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč </td>
                                              </tr>
                                            <tr>
                                                <td >1 den/24h</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč </td>
                                              </tr>
                                               <tr>
                                                <td >víkend</td>
                                                <td ><?=$stroje[$_id]['vikend'] ?> Kč </td>
                                              </tr>
                                              <tr>
                                                <td >kauce</td>
                                                <td ><?=$stroje[$_id]['kauce'] ?> Kč </td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/lumag_vp60.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Lumag VP60</h3>
										<h5>Vibrační deska</h5>
										<p><span>Výkon:</span> 2 kW<br>
										   <span>Odstředivá síla:</span> 8,1 kN<br>
										   <span>Hmotnost:</span> 58 kg<br>
										   <span>Velikost desky:</span> 430 x 300 mm<br>
                                           Jednosměrná</p>
                                           <div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >1 hodina</td>
                                                <td ><?=$stroje[$_id]['hodina'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >2 - 5 hodin</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč </td>
                                              </tr>
                                            <tr>
                                                <td >1 den/24h</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč </td>
                                              </tr>
                                               <tr>
                                                <td >víkend</td>
                                                <td ><?=$stroje[$_id]['vikend'] ?> Kč </td>
                                              </tr>
                                              <tr>
                                                <td >kauce</td>
                                                <td ><?=$stroje[$_id]['kauce'] ?> Kč </td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/lumag_rp_1100.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Lumag RP 1100PRO</h3>
										<h5>Vibrační deska</h5>
										<p><span>Výkon:</span> 4,8 kW<br>
										   <span>Odstředivá síla:</span> 15 kN<br>
										   <span>Hmotnost:</span> 95 kg<br>
										   <span>Velikost desky:</span> 570 x 440 mm<br>
                                           Jednosměrná</p>
                                           <div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >1 hodina</td>
                                                <td ><?=$stroje[$_id]['hodina'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >2 - 5 hodin</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč </td>
                                              </tr>
                                            <tr>
                                                <td >1 den/24h</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč </td>
                                              </tr>
                                               <tr>
                                                <td >víkend</td>
                                                <td ><?=$stroje[$_id]['vikend'] ?> Kč </td>
                                              </tr>
                                              <tr>
                                                <td >kauce</td>
                                                <td ><?=$stroje[$_id]['kauce'] ?> Kč </td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/wacker_hms.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Wacker HMS M1500</h3>
										<h5>Ponorný vibrátor</h5>
										<p><span>Výkon:</span> 1,5 kW<br>
										   <span>Napětí:</span> 230V/50Hz<br>
										   <span>Ponor:</span> 3 - 4 m<br>
                                           <span>Délka:</span> 70 cm</p>
                                           <div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >1 hodina</td>
                                                <td ><?=$stroje[$_id]['hodina'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >2 - 5 hodin</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč </td>
                                              </tr>
                                            <tr>
                                                <td >1 den/24h</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč </td>
                                              </tr>
                                               <tr>
                                                <td >víkend</td>
                                                <td ><?=$stroje[$_id]['vikend'] ?> Kč </td>
                                              </tr>
                                              <tr>
                                                <td >kauce</td>
                                                <td ><?=$stroje[$_id]['kauce'] ?> Kč </td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
							
									<li>
										<span class="image fit image-container"><img src="images/tools/tornado_h.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Tornado H</h3>
										<h5>Vibrační lišta</h5>
										<p><span>Výkon:</span> 0,81 kW<br>
                                           <span>Odstředivá síla:</span> 150 kN<br>
                                           <span>Hmotnost:</span> 13,5 kg<br>
										   <span>Délka:</span> 3 m</p>
										   <div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >1 hodina</td>
                                                <td ><?=$stroje[$_id]['hodina'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >2 - 5 hodin</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč </td>
                                              </tr>
                                            <tr>
                                                <td >1 den/24h</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč </td>
                                              </tr>
                                               <tr>
                                                <td >víkend</td>
                                                <td ><?=$stroje[$_id]['vikend'] ?> Kč </td>
                                              </tr>
                                              <tr>
                                                <td >kauce</td>
                                                <td ><?=$stroje[$_id]['kauce'] ?> Kč </td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/wacker_bs_60-2i.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Wacker BS 60-2i</h3>
										<h5>Vibrační pěch (žába)</h5>
										<p><span>Výkon:</span> 1,7 kW<br>
                                           <span>Počet rázů:</span> 700 /min<br>
                                           <span>Hmotnost:</span> 66 kg<br>
										   <span>Velikost patky:</span> 336 x 280 mm</p>
										   <div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >1 hodina</td>
                                                <td ><?=$stroje[$_id]['hodina'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >2 - 5 hodin</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč </td>
                                              </tr>
                                            <tr>
                                                <td >1 den/24h</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč </td>
                                              </tr>
                                               <tr>
                                                <td >víkend</td>
                                                <td ><?=$stroje[$_id]['vikend'] ?> Kč </td>
                                              </tr>
                                              <tr>
                                                <td >kauce</td>
                                                <td ><?=$stroje[$_id]['kauce'] ?> Kč </td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/guma.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Podložky pro vibrační desky</h3>
										<p>Gumové a plastové podložky pro vibrační desky.<br>
                                        	<span>Použití:</span> zámková dlažba</p>
                                        	<div class="table-wrapper ceny_pujcovneho" >
                                          <table class="alt">                                           
                                            <thead>
                                            <tr>
                                                <th>Cena pujčovného</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                            <tr>
                                                <td >velká</td>
                                                <td ><?=$stroje[$_id]['_5hodin'] ?> Kč</td>
                                              </tr>
                                            <tr>
                                                <td >malá</td>
                                                <td ><?=$stroje[$_id]['den'] ?> Kč</td>
                                              </tr>
                                          </tbody>
                                          </table>
                                      </div>
									</li>
									<li>
									</li>
								</ul>     
							</div>
                          	<ul class="actions">
                                <li><a href="index.html#tools" class="button icon fa-angle-left" onclick="history.back()">Zpět na výběr nářadí</a></li>                                
							</ul>
						</section>
					</article>

				<!-- Footer -->
	   			<?php
					include "include/footer.php";
				?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86977916-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
	function zobrazID() {
		$('.idStroje').css('display','none');
	}
</script>												
	</body>
</html>