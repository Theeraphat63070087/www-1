<?php
	$conn = mysqli_connect('suphafang.mysql.database.azure.com', 'suphafang@suphafang', 'Fang2545', 'ITFLab') or die("เชื่อมต่อไปฐานข้อมูลล้มเหลว ข้อผิดพลาด: ".mysqli_connect_error());

	$sql = "SELECT * FROM guestbook";

	$result = mysqli_query($conn, $sql);

	if($result) {
		while($show = mysqli_fetch_array($result)) {
			echo $show['Name']."</br>";
		}
	}
	else {
		echo "ดึงข้อมูลมาแสดงล้มเหลว ข้อผิดพลาด: ".mysqli_error($result);
	}

?>
