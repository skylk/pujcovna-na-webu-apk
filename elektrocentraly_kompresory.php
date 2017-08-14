<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Půjčovna nářadí Tachov - elektrocentrály a kompresory</title>
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
    	$skupina = 6;
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
							  <h2>ELEKTROCENTRÁLy, KOMPRESORY</h2>
							  <p>Veškeré ceny pujčovného viz. aktuální <a href="download/cenik.pdf">ceník.</a></p>
							</header>
								<ul class="features features33" >
									<li>
										<span class="image fit image-container"><img src="images/tools/wacker_gv_7000.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Wacker GV 7000</h3>
										<h5>Elektrocentrála</h5>
										<p><span>Trvalý výkon:</span> 5 kW<br>
							               <span>Počet fází:</span> 1 F<br>
								           <span>Napětí:</span> 230 V<br>
									       <span>Hmotnost:</span> 79 kg<br>
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
										<span class="image fit image-container"><img src="images/tools/st-g3000.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3> German LB 2600</h3>
										<h5>Elektrocentrála</h5>
										<p><span>Trvalý výkon:</span> 2,5 kW<br>
							               <span>Počet fází:</span> 1 F<br>
								           <span>Napětí:</span> 230 V<br>
									       <span>Hmotnost:</span> 38 kg<br>
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
										<span class="image fit image-container"><img src="images/tools/aircraft_356l.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Aircraft 361/20 E</h3>
										<h5>Kompresor</h5>
										<p><span>Výkon:</span> 2,2 kW / 230 V<br>
											<span>Max. průtok:</span> 356 L<br>
											<span>Plnící výkon:</span> 215 L<br>
											<span>Max. tlak:</span> 10 bar<br>
											<span>Hmotnost:</span> 37 kg</p>
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
										<span class="image fit image-container"><img src="images/tools/prodluzovak_vzduch.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Prodlužovák</h3>
										<h5>na vzduch</h5>
										<p><span>Délka:</span> 20 m<br>
											<span>Max. tlak.:</span> 10 bar</p>
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
										<span class="image fit image-container"><img src="images/tools/prodluzovak_kabel.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Prodlužovací kabely</h3>
										<h5>230V, 400V</h5>
										<p><span>Délka 230V:</span> 50 m<br>
											<span>Délka 400V:</span> dle potřeby<br>
											Různé kabelové redukce.</p>
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
										<span class="image fit image-container"><img src="images/tools/reflektory.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Reflektory</h3>
										<h5>se stojanem</h5>
										<p><span>Výkon:</span> 2 x 500 W<br>
											<span>Hmotnost:</span> 5 kg</p>
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