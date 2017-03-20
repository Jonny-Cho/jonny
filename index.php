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
		<link rel="shortcut icon" href="images/favicon.ico">
	</head>
	<body class="landing">
		<!-- 구글 웹로그 추적 코드 -->
		<?php include_once("analyticstracking.php") ?>

		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Jonny's IT Blog</a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="guest.php">guest</a>
							</li>
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

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Hello World!</h2>
							<p>안녕하세요. 웹 개발자 조준희 입니다.</p>
							<p>Hello. I'm Jonny Web Developer</p>
						</header>
						<span class="image"><img src="images/3.jpeg" alt="" /></span>
					</div>
					<!-- <a href="#one" class="goto-next scrolly">Next</a> -->
				</section>
			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main">
						<img src="images/web.jpg" alt="" />
					</span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>포트폴리오 | Portfolio</h2>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p>작업한 웹 포트폴리오를 모아놓는 공간입니다.<br/>웹 구조와 작업방법까지 상세하게 설명하려고 합니다.</p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>
										This is a place to gather the web-portfolio I made.<br/>I'm trying to explain how to make it in detail.
									</p>
								</div>
								<div class="4u$ 12u$(medium)">
									<ul class="actions">
										<li><a href="portfolio.php" class="button"> 포트폴리오 보러 가기 | Go to see</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- <a href="#two" class="goto-next scrolly">Next</a> -->
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom">
						<img src="images/com.jpeg" alt="" />
					</span>
					<div class="content">
						<header>
							<h2>생활코딩 따라하기</h2>
							<p>Studying Opentutorials</p>
						</header>
						<p>생활코딩은 비영리 IT 교육 사이트입니다. 생활코딩의 수업을 하나하나 따라해보면서 웹프로그래밍에 대한 지식을 정리해보려 합니다.</p>
						<p>'Opentutorials' is the Nonprofit IT education website. I'm tring to organize web-programming knowledge Following the classes.</p>
						<ul class="actions">
							<li><a href="it.php" class="button">따라하러 가기 | Go to study</a></li>
						</ul>
					</div>
					<!-- <a href="#four" class="goto-next scrolly">Next</a> -->
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>보유기술 & 관심사</h2>
							<p>Featured Skills & Main Concerns </p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-html5"></span>
									<span class="icon alt major fa-css3"></span>
									<h3>HTML5/CSS3</h3>
									<p>웹의 기본인 HTML과 CSS를 작성/수정할 수 있습니다.<br/>웹표준을 준수하여 작성합니다.</p>
									<p>I can create / modify HTML and CSS complying with web standards.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-cog fa-spin fa fa-fw"></span>
									<h3>JS/jQuery</h3>
									<p>Javascript와 jQuery를 사용하여 웹에 생동감을 추가합니다.</p>
									<p>
										I can add motion using Javascript and jQuery.
									</p>
								</section>
								<section class="4u$ 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-lock"></span>
									<h3>PHP/Mysql</h3>
									<p>서버언어와 데이터베이스를 사용하여 웹과 연동할 수 있습니다.<br/>유지보수가 쉽고 보안성이 높습니다.</p>
									<p>I can connect with the web using the Server language and database. Easy to maintain and Get to great security</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-graduation-cap"></span>
									<h3>Business</h3>
									<p>경영학을 전공하였고 사업 경험이 있습니다.<br/>웹과 접목시킨 모든 비즈니스에 관심있습니다.</p>
									<p>I majored in business and I have an experience to build the start-up company. I'm also interested in all web-business.</p>
								</section>
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-globe"></span>
									<h3>English</h3>
									<p>웹 정보의 90%는 영어로 작성되어 있습니다.<br/>아직 부족하지만 정보를 얻기 위해 열심히 공부중입니다.</p>
									<p>90% of Web information is written in English.<br/>I still do not have enough English but I'm studing hard to get the information.</p>
								</section>
								<section class="4u$ 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-book"></span>
									<h3>Book</h3>
									<p>독서모임을 운영하면서, 인문/사회/과학등 다양한 분야의 책을 1년이상 읽고 토론하고 있습니다.</p>
									<p>I've had a discussion reading books in various fields such as Humanities/sociology/Science for over a year.</p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">TOP</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
			<section id="five" class="wrapper style2 special fade">
				<div class="container">
					<header>
						<h2>연락하기 | Contact</h2>
						<p>andante2183@gmail.com</p>
					</header>
					<!-- <form method="post" action="#" class="container 50%">
						<div class="row uniform 50%">
							<div class="8u 12u$(xsmall)">
								<input type="email" name="email" id="email" placeholder="Your Email Address" />
							</div>
							<div class="4u$ 12u$(xsmall)">
								<input type="submit" value="Get Started" class="fit special" /></div>
						</div>
					</form> -->
				</div>
			</section>

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
			<script src="assets/js/youtube.js"></script>
	</body>
</html>
