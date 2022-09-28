<?php
$server = 34.64.94.17
$user = "root"
$password "root"
$dbname = "juyeon"

$conn = new mysqli($server, $user, $password, $dbname);

if($conn ->conect_error) echo "<h2>접속에 실패하였습니다.</h2>"
else echo "<h2>접속에 성공하였습니다.</h2>"
?>
