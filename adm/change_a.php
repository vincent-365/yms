<?php
include_once('./_common.php');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

$cf1 = $_GET['cf_1'];
$cf2 = $_GET['cf_2'];
$cf3 = $_GET['cf_3'];
$cf4 = $_GET['cf_4'];


$sql = "UPDATE g4_config SET cf_1=$cf1,cf_2=$cf2,cf_3=$cf3,cf_4=$cf4 WHERE 1";
sql_fetch($sql);
?>