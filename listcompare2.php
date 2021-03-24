<?php
// include "php_delete_header.php";
include_once "db_connect.php";

   $sql = "SELECT * FROM `dorm_master` 
   WHERE `dorm_master`.`id_zone` LIKE ('{$_GET['idzone']}')
   ";
    // echo $sql; return false;
   $result = $mysqli->query($sql);
   $row = array();
// echo '<select name="cars" onchange="location = this.value">';
    while($row = $result -> fetch_assoc()) {
        $name=$row["dorm_name"];
        $id=$row["id_dorm"];
        echo  '<a href="showcompare.php?id1='.$_GET['dormid'].'&id2='.$id.'" >'.$name.'<br></a>';
    }

// echo '</select>';
?>