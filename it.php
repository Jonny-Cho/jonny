<!-- 데이터베이스 접속 -->
<?php
require_once('conn.php');
$sql  = 'SELECT * FROM `step1`';
$result = mysqli_query($conn, $sql);
?>

<html lang="ko">
	<head>
		<title>Jonny_IT</title>
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
								<a href="portfolio.php">포트폴리오</a>
							</li>
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
								<nav>
									<?php
										while($row = mysqli_fetch_assoc($result)){
											echo '<li><a href="it.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
										}
									?>
								</nav>
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
									<h4>
										<?php
										echo $row['created'];
										?>
									</h4>
								</header>

								<!-- Content -->
								<?php
								if(empty($_GET['id'])){
									?>
										<section id="content">
											<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
											<h3>생활코딩?</h3>
											<p>생활코딩은 비영리 IT 교육 사이트입니다. 웹프로그래밍을 전혀모르는 일반인들에게 무료로 온라인 강의가 제공됩니다.</p>
											<p>
												<a href="https://opentutorials.org/course/1" target="_blank">생활코딩 사이트</a>
											</p>
											<h3>생활코딩 따라하기!</h3>
											<p>
												생활코딩 따라하기는 저같이 프로그래밍의 프자도 모르던 사람들이 빠른 시간
												내에 웹서비스의 구조를 익히는 것에 있습니다. 저는 배웠던 지식을 정리하고
												전달하는 것을 통해 기초를 단단히 복습할 수 있고, 이 사이트를 이용하시는 분들은
												생활코딩보다 조금 더 세련된 디자인과 실용적인 팁들을 얻으실 수 있습니다.
											</p>
											<ul>
												<li>
													<h3><a href="#">1단계 일주일 안에 심플하게</a></h3>
												</li>
													<p>
														1단계는 일주일 안에 심플한 홈페이지를 만들어서 친구들이 내가 만든 홈페이지를 확인하게 하는 것에 초점을 맞춥니다.
														기본적인 HTML / CSS의 문법을 익히고, 호스팅서비스 '닷홈'을 이용하여 배포까지 해보는 수업입니다.
													</p>
												<li>
													<h3><a href="#">2단계 홈페이지를 움직이게</a></h3>
												</li>
													<p>
														2단계는 홈페이지에 생명력을 불어넣는 방법에 대해 알아봅니다.
														Javascript / jQuery를 사용해서 '사진 보관함', '스크롤 액션' 기능을 홈페이지에 추가해봅니다.
													</p>
												<li>
													<h3><a href="#">3단계 서버/데이터베이스/보안</a></h3>
												</li>
												<p>
													3단계는 끝판왕입니다. '회원가입 기능 만들기', '게시판/블로그 만들기', '정보 보호하기' 등을 다룰 예정입니다.
													인스타그램이나 네이버 카페같은 사이트를 만들 수 있습니다.
												</p>

											</ul>

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
