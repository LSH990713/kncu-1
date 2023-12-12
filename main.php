<div class="notice">
	<h4>공지 게시판</h4>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM _notice ORDER BY num DESC LIMIT 5";
	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$num = $row["num"];
		$name = $row["name"];
		$date = $row["regist_day"];
		$date = substr($date, 0, 10);

		$subject = $row["subject"];
		$subject = htmlspecialchars_decode($subject, ENT_QUOTES);
?>
<div class="item">
	<span class="col1"><a href="../mboard/index.php?type=view&table=_notice&num=<?=$num?>&page=1"><?$subject ?></a></span>
	<span class="col2"><?=$date?></span>
</div>
<?php
	}
?>
</div>
<div class="qna">
	<h4>QNA 게시판</h4>
<?php 
	$sql = "SELECT * FROM _qna ORDER BY num DESC limit 5";
	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$num = $row["num"];
		$name = $row["name"];
		$date = $row["regist_day"];
		$date = substr($date, 0, 10);

		$subject = $row["subject"];
		$subject = htmlspecialchars_decode($subject, ENT_QUOTES);
?>
<div class="item">
	<span class="col1"><a href="../mboard/index.php?type=view&table=_qna&num=<?$num?>&page=1"><?=$subject ?></a>
	<?php
		$sql = "SELECT * FROM _qna_ripple WHERE parent=$num";
		$result2 = mysqli_query($con, $sql);
		$num_ripple = mysqli_num_rows($result2);

		if ($num_ripple) 
			echo "[$num_ripple]";
	?>
</span>
<span class="col2"><?=$date?></span>
</div>
<?php
	}
	mysqli_close($con);
?>
</div>