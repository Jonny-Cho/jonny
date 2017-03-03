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
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Jonny's IT Blog</a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="it.php">생활코딩 따라하기</a>
								<ul>
									<li>
                    <a href="it.php?id=1">1단계 일주일안에 심플하게</a>
										<!-- todo li대신 데이터베이스 넣어야함 -->
										<ul>
										<?php
											while($row = mysqli_fetch_assoc($result)){
												echo '<li><a href="it.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
											}
										?>
										</ul>
                  </li>
									<li><a href="right-sidebar.html">2단계 홈페이지를 움직이게</a></li>
									<li><a href="no-sidebar.html">3단계 서버/데이터베이스/보안</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</header>

        <!-- Main -->
          <div id="main" class="wrapper style1">
            <div class="container">
              <header class="major">
                <h2>
                  <?php
                  if(empty($_GET['id'])){
                    echo "생활코딩 따라하기";
                  } else {
                    $id = mysqli_real_escape_string($conn, $_GET['id']);
                    $sql = "SELECT * FROM step1 WHERE id =".$id;
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo $row['title'];
                  }
                  ?>
                </h2>
              </header>

              <!-- Content -->
							<?php
							if(empty($_GET['id'])){
								?>
									<section id="content">
		                <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
										<h3>생활코딩?</h3>
										<p>생활코딩은 비영리 IT 교육 사이트입니다...</p>
										<h3>생활코딩 따라하기의 목표</h3>
										<p>
											생활코딩 따라하기는...저같이 프로그래밍의 프자도 모르던 사람들이 빠른 시간
											내에 웹서비스의 구조를 익히는 것에 있습니다. 생활코딩 수업보다 조금더 예쁘고
											조금더 실용적인 것을 지향합니다.
										</p>
										<h3>1단계 일주일 안에 심플하게</h3>
											<p>
											1단계는 일주일 안에 심플한 홈페이지를 만들어서
											</p>
										<h3>2단계 홈페이지를 움직이게</h3>
											<p>
											2단계는...
										</p>
										<h3>3단계 서버/데이터베이스/보안</h3>
										<p>
											3단계는...
										</p>
									</section>
								<?php
							} else {
							?>
								<section id="content">
	                <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
	                  <?php
	                    echo $row['description'];
	                  ?>
	              </section>
							<?php
								}
							?>


            </div>
          </div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://github.com/Jonny-Cho?tab=repositories" class="icon alt fa-github" target="_blank"><span class="label">GitHub</span></a></li>
            <li><a href="https://www.linkedin.com/in/jonny-cho-345496137/" class="icon alt fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; JonnyCho. All rights reserved.</li>
            <li>andante2183@gmail.com</li>
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

	</body>
</html>
