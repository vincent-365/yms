<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(is_include_path_check($board['bo_include_head'])) {  //파일경로 체크
	@include ($board['bo_include_head']);
} else {    //파일경로가 올바르지 않으면 기본파일을 가져옴
	include_once(G5_BBS_PATH.'/_head.php');
}

if ($bo_table == "video2"){
	include_once "../donation/info.php";
}

echo stripslashes($board['bo_content_head']);
?>