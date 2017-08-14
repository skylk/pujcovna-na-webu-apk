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
    	$skupina = 10;
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
							  <h2>OSTATNÍ NÁŘADÍ A PŘÍSLUŠENSTVÍ</h2>
							  <p>Veškeré ceny pujčovného viz. aktuální <a href="download/cenik.pdf">ceník.</a></p>
							</header>
								<ul class="features features33" >
									<li>
										<span class="image fit image-container"><img src="images/tools/deca_nabijecka.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Deca FL 2213D</h3>
										<h5>Nabíječka baterií</h5>
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
										<span class="image fit image-container"><img src="images/tools/pakove_stipacky.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Pákové kleště</h3>
										<h5>na drát</h5>
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
										<span class="image fit image-container"><img src="images/tools/rudl_15kg.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Rudl</h3>
										<h5>150 kg</h5>
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
										<span class="image fit image-container"><img src="images/tools/koleko_atd.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Kolečko</h3>
										<h5>lopata,krumpáč,hrábě,palice</h5>
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
										<span class="image fit image-container"><img src="images/tools/tazna_tyc.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Tažná tyč</h3>
										<h5>max 3200 kg</h5>
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
										<span class="image fit image-container"><img src="images/tools/instalaterske_ero.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Instalatérské pero</h3>
										<h5>Délka 3 m</h5>
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
										<span class="image fit image-container"><img src="images/tools/katrovacka.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Katrovačka</h3>
										<h5>Prohazovací síto 80x120 cm</h5>
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
										<span class="image fit image-container"><img src="images/tools/vozik_kempik.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Přívěsný vozík</h3>
										<h5>130 x 100, do 750 kg</h5>
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
										<span class="image fit image-container"><img src="images/tools/agados_stojan.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Přívěsný vozík</h3>
										<h5>150 x 115, do 750 kg</h5>
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
										<span class="image fit image-container"><img src="images/tools/plastova_konev_50l.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Plastový barel</h3>
										<h5>50 litrů</h5>
										<p>Možnost na pitnou nebo užitkovou vodu.</p>										
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
										<span id="box-hakr" class="image fit image-container"><img src="images/tools/HAKR-stresni-box.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>HAKR Magic 400</h3>
										<h5>Střešní box</h5>
										<p><span>Objem:</span> 400 litrů<br>
										   <span>Hmotnost:</span> 15 kg<br>
										   <span>Max. zátěž:</span> 50 kg<br>
										   <span>Rozměry:</span> 1990 x 740 x 420 mm<br>
                                           Centrální zámek</p>
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
										<span id="nosic-hakr" class="image fit image-container"><img src="images/tools/stresni_nosic.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Střešní nosič</h3>
										<h5>Posuvný - 2ks</h5>
										<p><span>Délka:</span> 1300 mm<br>
										   <span>Min. rozpětí:</span> 940 mm<br>
										   <span>Max. rozpětí:</span> 1205 mm<br>
										   <span>Max. hmotnost:</span> 70 kg<br>                                          
                                           Uzamykatelný</p>										
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
										<span class="image fit image-container"><img src="images/tools/snehove_retezy.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Sněhové řetězy</h3>
										<h5>na osobní auto</h5>
										<p><span>Rozměry:</span> různé<br>
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
										<span class="image fit image-container"><img src="images/tools/lednice_auto.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Mini Fridge</h3>
										<h5>Přenosná lednička do auta</h5>
										<p><span>Objem:</span> cca 4 litry<br>								   
										   <span>Hmotnost:</span> 2 kg<br>
										   <span>Napájení:</span> 12/230 V<br>
										   <span>Rozměry:</span> 28 x 20 cm<br>
                                           Chlazení + ohřívání</p>
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