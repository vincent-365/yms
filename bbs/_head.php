<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

switch($bo_table){
	case "teacher" :
		$page_title = "교직원 소개";
		$t_num = "1";
		$l_num = "4";
		$s_num = "2";
		$tab_name = "org_tab";
	break;

	case "day" :
		$page_title = "교육일정";
		$t_num = "2";
		$l_num = "3";
	break;
	case "sup_01" :
		$page_title = "이 달의 식단";
		$t_num = "2";
		$l_num = "5";
	break;
	case "info" :
		$page_title = "정보공시";
		$t_num = "2";
		$l_num = "6";
		$s_num = "1";
		$tab_name = "ym_tab";
	break;

	case "notic" :
		$page_title = "공지사항";
		$t_num = "2";
		$l_num = "6";
		$s_num = "2";
		$tab_name = "ym_tab";
	break;
	case "news" :
		$page_title = "뉴스레터";
		$t_num = "4";
		$l_num = "2";
	break;
	case "cul" :
		$page_title = "교육활동";
		$t_num = "4";
		$l_num = "3";
	break;
	case "video" :
		$page_title = "여명동영상";
		$t_num = "4";
		$l_num = "5";
        $s_num = "1";
		$tab_name = "ym_bookvideo";
	break;

	case "book" :
		$page_title = "여명도서";
		$t_num = "4";
		$l_num = "5";
		$s_num = "2";
		$tab_name = "ym_bookvideo";
	break;

	case "books" :
		$page_title = "여명독서";
		$t_num = "4";
		$l_num = "4";
	break;

	case "sup_004" :
		$page_title = "후원게시판";
		$t_num = "5";
		$l_num = "5";
	break;

	case "sup_04" :
		$page_title = "후원";
		$t_num = "5";
		$l_num = "5";
	break;

	case "video2" :
		$page_title = "후원안내";
		$t_num = "5";
		$l_num = "1";
	break;
	case "pray" :
		$page_title = "기도후원";
		$t_num = "5";
		$l_num = "3";
        $s_num = "2";
		$tab_name = "donation_tab";
	break;
	case "germany2" :
		$page_title = "통일교육 세미나";
		$t_num = "3";
		$l_num = "3";
		$s_num = "2";
		$tab_name = "germany_tab";
	break;
	case "media" :
		$page_title = "미디어룸";
		$t_num = "4";
		$l_num = "6";
		$s_num = "2";
		$tab_name = "media_tab";
	break;
    case "play" :
		$page_title = "여명에서 온 편지";
		$t_num = "4";
		$l_num = "1";
		//$tab_name = "history_tab";
	break;
	    case "new1" :
		$page_title = "재정보고";
		$t_num = "7";
		$l_num = "3";
		//$tab_name = "history_tab";
	break;
	    case "new2" :
		$page_title = "경영공시";
		$t_num = "7";
		$l_num = "4";
		//$tab_name = "history_tab";
	break;
}

include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<div class="sub_contents">
	<h3><?=$page_title?><span><img src="/img/sub/location.png" alt="홈" /> > <?=$dep_title?> > <?=$page_title?></span></h3>
	<div class="page">

	<?
	if ($tab_name){
		include_once "../include/sub_tab/".$tab_name.".php";
	}
	?>
