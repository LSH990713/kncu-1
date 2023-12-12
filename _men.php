<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "CREATE TABLE _men (
		num int not null auto_increment,
		id char(20) not null,
		pass char(20) not null,
		name char(20) not null,
		email char(80),
		regist_day char(20),
		level int,
		points int,
		primary key(num))";

		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "회원 db테이블에 생성 완료!";
		}
		else
			echo "회원 db테이블에 생성 오류 :".mysqli_error($conn);
		mysqli_close($conn);
?>