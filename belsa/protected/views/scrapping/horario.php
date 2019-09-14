<h1>Horario</h1>


<?php 
echo count($horario);

echo '<hr>';
$aT=array();
echo "INSERT INTO `horario` (`nrc`, `dia`, `horaIni`, `horaFin`, `aula`, `curso`, `profesor`) VALUES ";
echo "<br>";
foreach ($horario as $j => $value) {
   
    foreach ($value as $campo) {
      $aT[$j][] = $campo;
    }
    //var_dump($aT);
    echo "('".$aT[$j][0]."','".$aT[$j][1]."','".$aT[$j][2]."','".$aT[$j][3]."','".$aT[$j][4]."','".$aT[$j][5]."','".$aT[$j][6]."'),<br>";
}

?>