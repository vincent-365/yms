<? 
$t_num = "2";
$l_num = "6";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<div class="sub_contents">
	<h3>공지사항<span><img src="/img/sub/location.png" alt="홈" /> > 학교운영 > 공지사항</span></h3>
	<div class="page germany">
		<? include_once "../include/sub_tab/ym_tab.php"; ?>
	</div>
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>