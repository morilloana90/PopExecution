<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php  
 $servername = '166.62.33.49';
 $dbusername = 'TableauSamsung';
 $password = '298W1,&n?d?cW^$bd3';
 $dbname = 'Tableau';

 
 
 $mysqli=mysqli_connect("166.62.33.49","anamorillo","drPtq2WnVM2V","Tableau");
 $mysqli->query("SET NAMES 'utf8' ");
$mysqli->query("SET CHARACTER SET 'utf8'");



    if (mysqli_connect_errno()) {
       printf("Conexión fallida: %s\n", mysqli_connect_error());
       exit();
   }

?>
