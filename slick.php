<?php
include ('db_connect.php');

$select_path="SELECT `pic_name`
FROM `pic_master_room`  
WHERE `id_dorm` like '" . $_GET['dormid'] ."'";

$result = $mysqli -> query($select_path);

while( $row = $result->fetch_array(MYSQLI_ASSOC) )
{
 $image_name=$row["pic_name"];
 $image_path="./img/introdorm/";
 $url=$image_path.$image_name;
 echo "<img class='  mx-auto d-block' ng-src='" . $url ."' alt='img ' style='height: 500; width: 705px;'>";

}




?>