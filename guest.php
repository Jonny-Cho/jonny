<!-- 데이터베이스 접속 -->
<?php
// 서버접속 + DB 선택
require_once('conn.php');
// step1 테이블 조회
$sql  = 'SELECT * FROM `step1`';
$result = mysqli_query($conn, $sql);
// 출력 방법
// $row = mysqli_fetch_assoc($result);
// $row['title'];
// $row['description'];
// echo "<br/>";
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
										guest
									</h2>
									<h4>
                    방문후기를 남겨주세요 :)
									</h4>
								</header>

							<!-- 디스커스 -->
							<div id="disqus_thread"></div>
							<script>
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');
							s.src = 'https://jonnycho-com.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
							<!-- 디스커스 -->

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
			<script id="dsq-count-scr" src="//jonnycho-com.disqus.com/count.js" async></script>
	</body>
</html>
