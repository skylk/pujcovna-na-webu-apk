<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Půjčovna nářadí - Tachov</title>
		<meta name="description" content="GradeD - půjčovna nářadí v Tachově a okolí.">
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
    	$skupina = 5;
		include "sql.php";  //připojení k MySQL 
		$_id = 0;		
		?>
		<!-- Page Wrapper -->
			<div id="page-wrapper">				
				<!-- Header -->
					<header id="header">
						<?php
						include "include/header.php";
						?> </header>

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
							  <h2>ZAHRADNÍ TECHNIKA</h2>
							  <p>Veškeré ceny pujčovného viz. aktuální <a href="download/cenik.pdf">ceník.</a></p>
							</header>
								<ul class="features features33" >
									<li>
										<span class="image fit image-container"><img src="images/tools/husqvarna_r147s.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Husqvarna R147s</h3>
										<h5>Motorová sekačka</h5>
										<p><span>Výkon:</span> 2,9 kW<br>
										   <span>Šířka sekání:</span> 46 cm<br>
										   <span>Výška sekání:</span> 30-75 mm<br>
										   <span>Hmotnost:</span> 40 kg<br>
										   S pohonem</p>
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
										<span class="image fit image-container"><img src="images/tools/stihl_fs240.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Stihl FS 240</h3>
										<h5>Křovinořez</h5>
										<p><span>Výkon:</span> 1,7kW<br>
										   <span>Zdvihový objem:</span> 37,7  cm³<br>
										   <span>Hmotnost:</span> 7 kg<br>
										   <span>Celková délka:</span> 180 cm
										</p>
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
										<span class="image fit image-container"><img src="images/tools/stihl_fs55.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Stihl FS 55</h3>
										<h5>Vyžínač</h5>
										<p><span>Výkon:</span> 0,75kW<br>
										   <span>Zdvihový objem:</span> 27,2  cm³<br>
										   <span>Hmotnost:</span> 5 kg<br>
											<span>Celková délka:</span> 170 cm
										</p>
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
										<span class="image fit image-container"><img src="images/tools/black_decker_gw2838.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Black&amp;Decker gw2838</h3>
										<h5>Foukač a vysavač listí</h5>
										<p></p>
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
										<span class="image fit image-container"><img src="images/tools/plotostrich.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>AEG HES 65</h3>
										<h5>Plotostřich</h5>
										<p><span>Výkon:</span> 350 W<br>
										<span>Délka lišty:</span> 65 cm<br>
										<span>Hmotnost:</span> 3,5 kg</p>
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
										<span class="image fit image-container"><img src="images/tools/lumag_vrtak.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>LumaG EB 490G</h3>
										<h5>Půdní vrták (jamkovač)</h5>
										<p><span>Výkon:</span> 1,65 kW<br>
										   <span>Hmotnost s vrtákem:</span> 15 kg<br>
										   <span>Vrtáky:</span> Ø 100, 150 mm</p>
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
										<span class="image fit image-container"><img src="images/tools/vega_ag55_pro.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>VeGA AG55 PRO</h3>
										<h5>Půdní vrták</h5>
										<p><span>Výkon:</span> 2,2 kW<br>
										   <span>Hmotnost bez vrtáku:</span> 9 kg<br>
										   <span>Vrtáky:</span> Ø 100, 150, 200 mm</p>
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
										<span class="image fit image-container"><img src="images/tools/rucni_pudni_vrtak.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Vrták do půdy</h3>
										<h5>Ruční</h5>
										<p><span>Hmotnost:</span> 5 kg<br>
										   <span>Vrtáky:</span> Ø 70, 150 mm</p>
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
										<span class="image fit image-container"><img src="images/tools/gardena_8188_prutokomer.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Gardena 8188-29</h3>
										<h5>Průtokoměr</h5>
										<p><span>Max. tlak:</span> 12 bar<br>
											<span>Průtok:</span> 2-30 l/min<br>
											Ukazuje spotřebu vody za den/sezonu/zalévání, průtok v l/min.</p>
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
										<span class="image fit image-container"><img src="images/tools/vozik_hadice.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Vozík</h3>
										<h5>s hadicí</h5>
										<p><span>Délka:</span> 20 m</p>
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
										<span class="image fit image-container"><img src="images/tools/postrikovac_8l.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Postřikovač</h3>
										<h5>tlakový 8 litrů</h5>
										<p></p>
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
									<li></li>
																										
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
	</body>
</html>