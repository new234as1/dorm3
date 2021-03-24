<?php
$mysqli = new mysqli('localhost','root','','updorm');
if(isset($_POST['rating'])){
    $phone = $_POST['phone'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
    $dorm = $_POST['dorm'];
    $query="SELECT phone_user FROM facilities_book WHERE phone_user LIKE ? AND id_dorm = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss',$phone, $dorm);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows >0 ){
        $query="Insert into feedback (rating, feedback, phone, dorm_id) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('isss',$rating, $feedback, $phone, $dorm);
        $stmt->execute();
        $msg = "<div class='alert alert-success'>Rating Successfully Added</div>";
        $stmt->close();
        $mysqli->close();
        echo '<script>
        alert("ให้คะแนนสำเร็จ");
    </script>';
        header("refresh: 1; url=Page.php?dormid={$dorm}");
    }
    else{
        echo '<script>
                alert("เบอร์โทรนี้ได้ถูกใช้งานแล้ว");
            </script>';
        header("refresh: 1; url=Page.php?dormid={$dorm}");
    }
}
?>