<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Půjčovna nářadí Tachov - bourací a vrtací technika</title>
		<meta name="description" content="GradeD s.r.o - půjčovna nářadí pro Tachov a okolí.">
		<meta name="keywords" content="Graded,půjčování nářadí, půjčovna, Plzeňský kraj, Tachov, servis, opravy, údržba nářadí, Graif">
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
    	$skupina = 1;
		include "sql.php";  //připojení k MySQL 
		$_id = 0;		
		?>	
		<!-- Page Wrapper -->
			<div id="page-wrapper">				
				<!-- Header -->
					<header id="header" >
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
							  <h2>BOURACÍ A VRTACÍ TECHNIKA</h2>
							  <p>Veškeré ceny pujčovného viz. aktuální <a href="download/cenik.pdf">ceník.</a></p>
							</header>
								<ul class="features features33" >
									<li>
										<span class="image fit image-container"><img src="images/tools/hilti_te_1.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 1</h3>
										<h5>Vrtací kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 650 W<br>
										  <span>Energie příklepu:</span> 1,5 J<br>
										  <span>Upínání:</span> SDS+<br>
										  <span>Hmotnost přístroje:</span> 2,4 kg<br>
										  <span>Použití:</span> vrtání do betonu, zdiva a přírodního kamene</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_2.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>								
										<h3>Hilti TE 2</h3>
										<h5>Vrtací kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 650 W<br>
										  <span>Energie příklepu:</span> 1,8 J<br>
										  <span>Upínání:</span> SDS+<br>
										  <span>Hmotnost přístroje:</span> 2,7 kg<br>
										  <span>Použití:</span> vrtání do betonu, zdiva a přírodního kamene</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_16.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 16</h3>
										<h5>Kombinované kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 800 W<br>
										  <span>Energie příklepu:</span> 4,2 J<br>
										  <span>Upínání:</span> SDS+<br>
										  <span>Hmotnost přístroje:</span> 3,8 kg<br>
										  <span>Použití:</span> lehké sekání obkladu, vrtání průrazů.</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_30.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 30-c avr</h3>
										<h5>Kombinované kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 850 W<br>
										  <span>Energie příklepu:</span> 3,3 J<br>
										  <span>Upínání:</span> SDS+<br>
										  <span>Hmotnost přístroje:</span> 4,2 kg<br>
										  <span>Použití:</span> lehké sekání obkladu, vrtání průrazů.</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_50.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 50</h3>
										<h5>Kombinované kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 1050 W<br>
                                            <span>Energie příklepu:</span> 5,2 J<br>
                                            <span>Upínání:</span> SDS Max<br>
                                            <span>Hmotnost přístroje:</span> 5,7 kg<br>
                                            <span>Použití:</span> lehké sekání a vrtání do zdiva</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_500.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 500</h3>
										<h5>Bourací kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 1100 W<br>
                                            <span>Energie příklepu:</span> 7,5 J<br>
                                            <span>Upínání:</span> SDS Max<br>
                                            <span>Hmotnost přístroje:</span> 5,6 kg<br>
                                            <span>Použití:</span> lehké až středně těžké sekání</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_60.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 60</h3>
										<h5>Kombinované kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 1200 W<br>
										  <span>Energie příklepu:</span> 7 J<br>
										  <span>Upínání:</span> SDS Max<br>
										  <span>Hmotnost přístroje:</span> 7,4 kg<br>
										  <span>Použití:</span> středně těžké sekání a vrtání</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_70-avr.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 70</h3>
										<h5>Kombinované kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 1800 W<br>
                                            <span>Energie příklepu:</span> 11,5 J<br>
                                            <span>Upínání:</span> SDS Max<br>
                                            <span>Hmotnost přístroje:</span> 9,5 kg<br>
                                            <span>Použití:</span> střední až těžké sekání a vrtání</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te_700-avr.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 700</h3>
											<h5>Bourací kladivo</h5>
											<p><span>Jmenovitý příkon:</span> 1300 W<br>
											  <span>Energie příklepu:</span> 11,5 J<br>
											  <span>Upínání:</span> SDS Max<br>
											  <span>Hmotnost přístroje:</span> 7 kg<br>
											  <span>Použití:</span> střední až těžké demoliční práce</p>
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
										<span class="image fit image-container"><img src="images/tools/hilti_te1000.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Hilti TE 1000</h3>
										<h5>Bourací kladivo</h5>
										<p>Jmenovitý příkon: 1750 W<br>
										  Energie příklepu: 26 J<br>
										  Upínání: SDS Max<br>
										  Hmotnost přístroje: 12,5 kg<br>
										  Použití: těžké demoliční práce</p>
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
										<span class="image fit image-container"><img src="images/tools/wacker_ehb_11.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Wacker EHB 11</h3>
										<h5>Kombinované kladivo</h5>
										<p><span>Jmenovitý příkon:</span> 1380 W<br>
                                            <span>Energie příklepu:</span> 19 J<br>
                                            <span>Upínání:</span> SDS Max<br>
                                            <span>Hmotnost přístroje:</span> 11 kg<br>
                                            <span>Použití:</span> střední až těžké sekání a vrtání</p>
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
										<span class="image fit image-container"><img src="images/tools/fein_658.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Fein DSK 658-1</h3>
										<h5>Pomaloběžná vrtačka</h5>
                                       	<p><span>Jmenovitý příkon:</span> 720 W<br>
                                            <span>Upínání:</span> Morseův kužel 2<br>
                                            <span>Vrtáky:</span> 8 - 22,5 mm<br>
                                            <span>Hmotnost přístroje:</span> 6,4 kg<br>
                                            <span>Použití:</span> vrtání větších průměrů - železo, dřevo</p>
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
									<li id="aku_vrtacky">
										<span class="image fit image-container"><img src="images/tools/aku_vrtacky2.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Aku vrtačky</h3>
										<p>Akumulátorové vrtačky dle výběru<br><br>
											<span>SF 6H-A22</span> - sklíčidlo: 1,5-13 mm<br>
											<span>Hilti TE-6</span> - SDS+, 2 J, odsávání</p>
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
										<span class="image fit image-container"><img src="images/tools/aku_sroubovaky.jpg" alt="" /></span>
										<p class="idStroje">ID = <?php echo $skupina.'-'. $_id = $_id + 1;?></p>
										<h3>Aku šroubováky</h3>
										<p>Akumulátorové šroubováky a rázové utahováky dle výběru.<br></p>
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
										<span class="image fit image-container"><img src="images/tools/sekace.jpg" alt="" /></span>
										<h3>Sekáče</h3>
										<p><span>Upínání:</span> SDS+, SDS max, TE-S<br>
										  Dle výběru. Samobrusné i klasické.</p>
											  
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/vrtaky.jpg" alt="" /></span>
										<h3>Vrtáky</h3>
										<p><span>Upínání SDS+:</span> ф5 - 28 mm<br>
										  <span>Upínání SDS Max:</span> ф20 - 42 mm</p>
									</li>
									<li>
										<span class="image fit image-container"><img src="images/tools/korunkove_vrtaky.jpg" alt="" /></span>
										<h3>Korunkové vrtáky</h3>
										<p><span>Upínání SDS+:</span> ф65 - 125 mm<br>
										  <span>Upínání SDS Max:</span> ф50 - 150 mm</p>
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
			
			<script src="js/jput-2.js"></script>
			
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