<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include "con.php";

// MySQL database connection code
//$connection = mysqli_connect($conn,"google_pie") or die("Error " . mysqli_error($conn));
//Fetch productos data
$sql = "SELECT ID, Cumplimiento FROM Articulos";

$result = mysqli_query($conn,$sql);
  //create an array
  $array = array();
  $i = 0;

  while($row = mysqli_fetch_assoc($result))
{  
    $nom = $row['ID'];
    $res = $row['Cumplimiento'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $nom), array('v'=>(int)$res)));  
}

$data = json_encode($array);
echo $data;

mysqli_close($conn);

?>