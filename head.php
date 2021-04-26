<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<script type="text/javascript">
$(function() {
	$(".mobile_menu").click(function(){
		if ($(".topmenu").is(':hidden')){
			$(".topmenu").slideDown(150, "easeOutExpo");
		}else{
			$(".topmenu").slideUp(150, "easeOutExpo");
		}
	})

	if ("<?=$device_gubun?>" != "mobile"){
		$(".topmenu").mouseenter(function(){
			$(".full_menu").slideDown(200);
		})

		$("#header").mouseleave(function(){
			$(".full_menu").slideUp(200);
		})
	}
})
</script>

<?php
if(defined('_INDEX_')) { // index에서만 실행
	include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div id="header">
	<div class="section">
		<h1><a href="/"><img src="/img/main/logo.jpg" alt="여명학교 로고" /></a></h1>
		<ol class="topmenu">
			<li><a class="<?=$t_num == "1"?"on":""?>" href="<?=G5_URL?>/about/intro.php">학교소개</a></li>
			<li><a class="<?=$t_num == "2"?"on":""?>" href="<?=G5_URL?>/system/phil.php">학교운영</a></li>
			<li><a class="<?=$t_num == "4"?"on":""?>" href="<?=G5_URL?>/bbs/board.php?bo_table=play">여명소식</a></li>
			<li><a class="<?=$t_num == "5"?"on":""?>" href="<?=G5_URL?>/bbs/board.php?bo_table=video2">후원안내</a></li>
			<li><a class="<?=$t_num == "6"?"on":""?>" href="<?=G5_URL?>/admission/admission.php">입학안내</a></li>
			<li class=""><a class="<?=$t_num == "3"?"on":""?>" href="<?=G5_URL?>/unite/unite.php">통일학교모델</a></li>
			<li><a class="<?=$t_num == "7"?"on":""?>" href="<?=G5_URL?>/new/1.php">(사)여명</a></li>
		</ol>
		<div class="mobile_menu"><a href="javascript:;"><img src="/img/main/mobile_btn.png" alt="모바일 버튼" /></a></div>
	</div>
	


</div>