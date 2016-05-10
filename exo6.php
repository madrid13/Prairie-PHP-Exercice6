<?php
$tableaux = array("HTML","CCS","Javascript","PHP");
function tri($langage){
  sort($langage);
  return $langage;
}
$triretour = array();
$triretour = tri($tableaux);
foreach($triretour as $retour) {
  echo $retour;
}
function fusiontableau($fusionlang){
  return implode(";",$fusionlang);
}
echo fusiontableau($tableaux);
 ?>
