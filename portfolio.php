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

        <!-- Main -->
          <div id="main" class="wrapper style1">
							<div class="container">
								<header class="major">
									<h2>
                    suhyunjeon.com
									</h2>
									<h4>
									  아티스트 전수현 포트폴리오
									</h4>
								</header>

								<!-- Content -->
									<section id="content">
										<a href="http://suhyunjeon.com" target="_blank" class="image fit imghover">
                      <img src="images/shj/2.jpeg" alt="전수현 닷컴 바로가기" />
                    </a>
                    <ul>
                      <li>도메인 : <a href="http://suhyunjeon.com" target="_blank">suhyunjeon.com</a> </li>
                      <li>용도 : 개인 포트폴리오</li>
                      <li>제작기간 : 7일</li>
                      <li>사용기술 : HTML/CSS (추후 데이터베이스와 연동 예정)</li>
                      <li>반응형 : 모바일 / 데스크탑</li>

                    </ul>
                    <p>
                      친한동생의 부탁으로 개인 포트폴리오 홈페이지를 제작하였습니다.
                      <a href="http://www.yezoi.com/" target="_blank">yezoi</a> 사이트 처럼 깔끔한 스타일을 원해서 색을 최소한으로 사용하고 작품이 강조되게끔 작업했습니다.
                    </p>
                    <p>
                      프로젝트중에 메인화면에 이미지를 추가하고 싶다는 요청을 받아 대표작품을 넣었고 이 때문에 약해진 메뉴 가독성을 위해 투명도를 주었습니다.
                    </p>
                    <p>
                      반응형 홈페이지로 제작되었습니다. media query를 사용해서 break-point를 주었고, 이미지들이 브라우저 크기에 따라 크기가 변하도록 조정했습니다.
                    </p>
                    <p>
                      지금은 HTML과 CSS만을 사용해서 구축한 상태이지만, 이후에 사용자가 직접 사진을 게시하는 기능, 이미지 리사이징기능, 이전/다음 버튼을 누르면 해당사진이 보이는 기능등을 추가할 예정입니다.
                    </p>
                  </section>
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
			<script src="assets/js/youtube.js"></script>
			<script src="assets/js/google.js"></script>
	</body>
</html>
