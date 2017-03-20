<!-- 데이터베이스 접속 -->
<?php
require_once('conn.php');
$sql_edit = 'SELECT * FROM `step1` WHERE id='.$_GET['id'];
$result = mysqli_query($conn, $sql_edit);
$row = mysqli_fetch_assoc($result);
?>

<html lang="ko">
	<head>
		<title>Jonny</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- [if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif] -->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
  <body>
		<div id="page-wrapper">
				<div id="main" class="wrapper style1">
					<div class="container">
      			<section>  <!-- Form -->
          		<h3>수정하기</h3>
          		<form method="post" action="edit_process.php">
	            	<div class="row uniform 50%">
	              	<div class="12u$">
                    <input type="text" name="id" value="<?=$_GET['id']?>">
	                	<input type="text" name="title" id="title" placeholder="title" value="<?=$row['title']?>" />
	              	</div>
		              <div class="12u$">
		                <textarea name="description" id="description" placeholder="Enter your description" rows="40" cols="100"><?=htmlspecialchars($row['description'])?></textarea>
		              </div>
		              <div class="12u$">
		                <ul class="actions">
		                  <li><input type="submit" value="수정하기" class="special" /></li>
		                  <li><a href="board_list.php"><input type="button" value="목록으로" /></a></li>
		                </ul>
		              </div>
	          		</div>
          		</form>
							</div>
      			</section>
					</div>
				</div>
		</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/youtube.js"></script>

	</body>
</html>
