<mate charset ="utf-8" />
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include ('db_connect.php'); 
//ส่วนของการเพิ่มข้อมูลรูปภาพ
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_his");
	
	
//สร้างตัวแปร
$id_dorm = $_POST['id_dorm'];
$id_room = $_POST['id_room'];
$room_number = $_POST['room_number'];
$fname_user = $_POST['fname_user'];
$lname_user = $_POST['lname_user'];
$phone_user = $_POST['phone_user'];


	//เพิ่มข้อมูล
	$sql = " INSERT INTO facilities_book
	(id_dorm, id_room, room_number, fname_user, lname_user, phone_user)
	VALUES
	('$id_dorm', '$id_room', '$room_number','$fname_user', '$lname_user', '$phone_user')";

	$result = mysqli_query($mysqli, $sql);
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($mysqli);
			
				//ถ้าสำเร็จให้ขึ้นอะไร
	if ($result){
		echo "<script type='text/javascript'>";
		echo"alert('จองหอพักสำเร็จ');";
	    echo"window.location = 'index.php';";
		echo "</script>";
		}
		else {
			//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
				echo "<script type='text/javascript'>";
				echo "alert('จองหอพักไม่สำเร็จ');";
				echo"window.location = 'index.php'; ";
				echo"</script>";
	}


?>