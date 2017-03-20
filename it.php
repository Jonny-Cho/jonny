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
											<!-- <div class="image fit">
												<img src="images/pic07.jpg" alt="" class="fit"/>
											</div> -->
											<h3>생활코딩?</h3>
											<p>생활코딩은 비영리 IT 교육 사이트입니다. 2000개가 넘는 온라인 강의가 모두 무료로 제공됩니다.</p>
											<p>
												<a href="https://opentutorials.org/course/1" target="_blank">생활코딩 사이트</a>
											</p>
											<h3>생활코딩 따라하기!</h3>
											<p>
												생활코딩 따라하기는 저같이 프로그래밍의 프자도 모르던 사람들이 빠른 시간
												내에 웹서비스의 구조를 익히는 것에 있습니다. 저는 배웠던 지식을 정리하고
												전달하는 것을 통해 기초를 복습할 수 있고, 이 사이트를 이용하시는 분들은
												실용적인 팁들을 얻으실 수 있습니다.
											</p>

											<h3>수업 리스트</h3>

											<?php
											$result = mysqli_query($conn, $sql);
											?>
												<table class="it_table">
													<?php
													while ($row = mysqli_fetch_assoc($result)) {
														echo
														"<tr>
																<td>
																	{$row['id']}
																</td>
																<td>
																	<a href='it.php?id={$row['id']}'>{$row['title']}</a>
																</td>
															</tr>";
													}
													?>
												</table>

											<!-- 이전/다음 버튼 추가 -->
											<div class="row" style="margin-top:4em;margin-bottom:2em;">
												<div class="12u 12u$(xsmall)">
													<ul class="actions fit">
														<?php
															echo "<li><a href='it.php?id=1' class='button special fit'>1강 '최종결과물' 시작하기</a></li>";
														 ?>
													</ul>
												</div>
											</div>
											<!-- 이전/다음 버튼 끝 -->
										</section>
									<?php
								} else {
								?>
									<section id="content">
										<!-- <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a> -->

												<?php
													echo $row['description'];
												?>

											<!-- 이전/다음 버튼 추가 -->
											<div class="row" style="margin-top:4em;margin-bottom:2em;">
												<div class="3u 12u$(xsmall)">
													<ul class="actions fit">
														<?php
															echo "<li><a href='it.php?id=".($_GET['id']-1)."' class='button fit'>이전</a></li>";
														 ?>
													</ul>
												</div>
												<div class="3u 12u$(xsmall)">
													<ul class="actions fit">
														<?php
															echo "<li><a href='it.php' class='button fit'>목차</a></li>";
														 ?>
													</ul>
												</div>
												<div class="6u 12u$(xsmall)">
													<ul class="actions fit">
														<?php
															// echo "<li><a href='it.php?id=".($_GET['id']+1)."' class='button special fit'>다음 강좌는 '".($row['title'])."' 입니다</a></li>";
															echo "<li><a href='it.php?id=".($_GET['id']+1)."' class='button special fit'>다음 강좌로 이동하기</a></li>";
														 ?>
													</ul>
												</div>
											</div>
											<!-- 이전/다음 버튼 끝 -->

									</section>
								<?php
									}
								?>



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
