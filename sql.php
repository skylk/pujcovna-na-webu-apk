<?php
$server="localhost";
$uzivatel="pujcovaninaradi";
$heslo="jenikov";
$databaze="stroje";
$spojeni=new mysqli($server,$uzivatel,$heslo,$databaze); // 1) vytvoření objektu $spojeni
$spojeni->set_charset("utf8");                          // 2) nastavení znakové sady UTF-8

		    $dotaz=$spojeni->prepare("SELECT id,stroj,den,hodina,hodin,vikend,kauce FROM ceny WHERE skupina LIKE ".$skupina);
    $dotaz->bind_result($id,$stroj,$den,$hodina,$_5hod,$vikend,$kauce);
    $dotaz->execute();
    while($dotaz->fetch()){
		$stroje[$id] = array('stroj' => $stroj, 'hodina' => $hodina, '_5hodin' => $_5hod, 'den' => $den, 'vikend' => $vikend,'kauce' => $kauce);
    }
    $dotaz->close();

if (!$spojeni) {
exit ('<p> Error performing query: ' .
	mysql_error() . '<p/>');
} 

?>
