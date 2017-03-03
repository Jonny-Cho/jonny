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
                    <a href="it.php">1단계 일주일안에 심플하게</a>
										<!-- todo ul대신 데이터베이스 넣어야함 -->
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

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Hello World!</h2>
							<p>안녕하세요. 웹 개발자 Jonny입니다.</p>
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
									<p>한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글
									한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글
								한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글
								한글한글한글한글한글한글</p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>Morbi enim nascetur et placerat lorem sed iaculis neque ante
									adipiscing adipiscing metus massa. Blandit orci porttitor semper.
									Arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
									mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem
									ipsum dolor nullam.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- <a href="#two" class="goto-next scrolly">Next</a> -->
				</section>

			<!-- Two -->
				<!-- <section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum amet non magna accumsan</h2>
							<p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section> -->

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom">
						<img src="images/com.jpeg" alt="" />
					</span>
					<div class="content">
						<header>
							<h2>생활코딩 따라하기</h2>
							<p>Study Opentutorials</p>
						</header>
						<p>한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글한글</p>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">따라하러 가기</a></li>
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
									<p>웹의 기본인 HTML과 CSS를 작성/수정할 수 있습니다.<br/>웹표준을 준수하여 작성합니다</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-cog fa-spin fa fa-fw"></span>
									<h3>JS/jQuery</h3>
									<p>Javascript와 jQuery를 사용하여 웹에 생동감을 추가합니다.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</section>
								<section class="4u$ 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-lock"></span>
									<h3>PHP/Mysql</h3>
									<p>서버언어와 데이터베이스를 사용하여 웹과 연동할 수 있습니다.<br/>유지보수가 쉽고 보안성이 높습니다.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-graduation-cap"></span>
									<h3>Business</h3>
									<p>비즈니스를 전공하였고 스타트업 경험이 있습니다.<br/>웹과 접목시킨 모든 사업에 관심있습니다.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</section>
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-globe"></span>
									<h3>English</h3>
									<p>I'm really interested in English. So I've been studying hard</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</section>
								<section class="4u$ 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-book"></span>
									<h3>Book</h3>
									<p>독서모임을 운영하면서, 인문/사회/과학등 다양한 분야의 책을 1년이상 읽고 토론하고 있습니다.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
						<p>한글한글 한글한글 한글한글 Ante metus praesent faucibus</p>
						<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
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

	</body>
</html>
