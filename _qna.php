<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "CREATE TABLE _qna (
		num int not null auto_increment,
		id char(20) not null,
		name char(20) not null,
		subject char(200) not null,
		content text,
		is_html char(1),
		regist_day char(20),
		file_name char(40),
		file_type char(40),
		file_copied char(40),
		primary key(num))";

	$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "QNA 게시판 테이블에 생성 완료!";
		}
		else
			echo "QNA 게시판 테이블에 생성 오류 :".mysqli_error($conn);
		mysqli_close($conn);
?>