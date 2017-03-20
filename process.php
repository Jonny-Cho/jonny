<?php
// 데이터베이스 접속
require_once('conn.php');
// title, description을 step1테이블에 추가

$title = mysqli_real_escape_string($conn, $_POST['title']);
$desc = mysqli_real_escape_string($conn, $_POST['description']);

$sql = "INSERT INTO `step1` (`id`, `title`, `description`, `created`) VALUES (NULL, '{$title}', '{$desc}', now());";

mysqli_query($conn, $sql);

// 사용자를 board_list.php로 이동
header('Location:board_list.php');
?>
