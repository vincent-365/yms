<? 
$t_num = "4";
$l_num = "1";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<div class="sub_contents">
	<h3>여명에서 온 편지<span><img src="/img/sub/location.png" alt="홈" /> > 여명소식 > 여명에서 온 편지</span></h3>
	<div class="page germany">
	<?
        $updatequert = "SELECT * FROM imgtag WHERE num = 1";
        $result_1 = mysql_query($updatequert) or die('데이터베이스 오류: '.mysql_error());
        while ($row_1 = mysql_fetch_assoc($result_1)) {
        ?>
	<img src="/cfadm/uploads/<?php echo $row_1['code']?>" alt="latter">
	<? } ?>
	</div>
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>