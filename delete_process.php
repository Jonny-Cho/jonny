<?php
// 데이터베이스 접속
require_once('conn.php');

$id = $_GET['id'];


$delete = "DELETE FROM `step1` WHERE id=".$id;

mysqli_query($conn, $delete);

// 사용자를 board_list.php로 이동
header('Location:board_list.php');
?>
