<style>
.border-bottom {
    border-bottom: 0px solid #ffffff !important;
}

</style>
<?php
// include "php_delete_header.php";
include_once "db_connect.php";

   $sql = "SELECT * FROM `register_facilities` 
   LEFT JOIN `facilities` ON (`register_facilities`.`id_facilities` = `facilities`.`id_facilities`)
WHERE `register_facilities`.`id_dorm` LIKE ('{$_GET['dormid']}')
";
    // echo $sql; return false;
   $result = $mysqli->query($sql);
//   echo '<div class="border border-primary"" style="padding: 15px; padding-left: 30px; font-size: 17;">';
    while($r = $result -> fetch_assoc()) {
       echo '
<div class="col-xs-6 col-md-2" style="padding: 15px; padding-left: 30px; font-size: 17;">
                           <i class="fa fa-bars" aria-hidden="true" style="font-size: 20px;   color: royalblue; "></i>&nbsp;
                           ' . $r["facilities_name"] .'
</div>
';
    }
    // echo '</div>';
?>