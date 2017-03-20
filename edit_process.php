<?php
// 데이터베이스 접속
require_once('conn.php');
// title, description을 step1테이블에 추가

$id = $_POST['id'];
$title = mysqli_real_escape_string($conn, $_POST['title']);
$desc = mysqli_real_escape_string($conn, $_POST['description']);

$sql_edit = "UPDATE `step1` SET id='".$id."' title='".$title."', description='".$desc."' WHERE id=".$_POST['id'];

mysqli_query($conn, $sql_edit);

// 사용자를 admin.php로 이동
header('Location:board_list.php');
?>
