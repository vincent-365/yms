<? 
$t_num = "1";
$l_num = "4";
$s_num ="1";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>
<style>

</style>
<div class="sub_contents">
	<h3>학교 조직도<span><img src="/img/sub/location.png" alt="홈" /> > 학교소개 > 학교 조직도</span></h3>
	<div class="page org">
			<? include_once "../include/sub_tab/org_tab.php"; ?>
		<div class="organi_imgbox">
			<img class="organi_img none400" src="/img/sub/organi.jpg" alt="학교조직도" />
			<img class="organi_img block400 nonepc" src="/img/sub/m_organi.jpg" alt="학교조직도" />
		</div>
		<p class="mg20">(법인사무국) 사무국장-모금기획, 재무회계</p>
	</div>
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>