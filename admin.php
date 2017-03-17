<!-- 데이터베이스 접속 -->
<?php
require_once('conn.php');
$sql  = 'SELECT * FROM `step1`';
$result = mysqli_query($conn, $sql);
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

			<!-- Header -->
			<header id="header">
					<h1 id="logo"><a href="index.php">Jonny's IT Blog</a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="portfolio.php">포트폴리오</a>
							</li>
							<li>
								<a href="it.php">생활코딩 따라하기</a>
								<ul>
										<!-- todo li대신 데이터베이스 넣어야함 -->
										<?php
											while($row = mysqli_fetch_assoc($result)){
												echo '<li><a href="it.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
											}
										?>
								</ul>
							</li>
						</ul>
					</nav>
				</header>

				<div id="main" class="wrapper style1">
					<div class="container">
      			<section>  <!-- Form -->
          		<h3>글쓰기</h3>
          		<form method="post" action="process.php">
	            	<div class="row uniform 50%">
	              	<div class="12u$">
	                	<input type="text" name="title" id="title" placeholder="title" />
	              	</div>
		              <div class="12u$">
		                <textarea name="description" id="description" placeholder="Enter your description" rows="20"></textarea>
		              </div>
		              <div class="12u$">
		                <ul class="actions">
		                  <li><input type="submit" value="Send Message" class="special" /></li>
		                  <li><input type="reset" value="Reset" /></li>
		                </ul>
		              </div>
	          		</div>
          		</form>
							<?php
							$result = mysqli_query($conn, $sql);
				      echo '<table>';
				      while ($row = mysqli_fetch_assoc($result)) {
				        echo
				        "<tr>
				            <td>
				              {$row['id']}
				            </td>
				            <td>
				              <a href='#'>{$row['title']}</a>
				            </td>
				            <td>
				              <a href='#'>수정하기</a>
				            </td>
				            <td>
				              <a href='#'>삭제하기</a>
				            </td>
				          </tr>";
				      }
				      echo '</table>';
							?>
							</div>
      			</section>
					</div>
				</div>
		</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

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
