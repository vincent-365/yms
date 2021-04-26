<?
/*-------------------------------------------
by 송이씨닷컴 2009.06.12 / http://song2c.com
(개발자정보 삭제,수정금지)
--------------------------------------------*/

include_once("../../../common.php");
if(!$is_admin) exit;

$table =  $g5['write_prefix'].$_GET['bo_table'];
$inqty1 = ($_GET['mode']=="up")? ">" : "<";
$inqty2 = ($_GET['mode']=="up")? "asc" : "desc";
$inqty3 = ($_GET['mode']=="up")? "최상위" : "최하위";

// MY ROW
$sel_my = sql_query("select * from $table where wr_id={$_GET[wr_id]}");
$my = sql_fetch_array($sel_my);

// TARGET ROW
$sel_target = sql_query("select * from $table where wr_id{$inqty1}{$_GET[wr_id]} order by wr_id {$inqty2} limit 1");
$target = sql_fetch_array($sel_target);

if($target['wr_id']){
	//my 넘버를 임시로 바꾼후, target 넘버를 my로, my 넘버를 target으로..
	sql_query("update $table set wr_id=99999, wr_num=99999, wr_parent=99999 where wr_id={$my[wr_id]} ");
	sql_query("update $table set wr_id={$my[wr_id]}, wr_num={$my[wr_num]}, wr_parent={$my[wr_parent]} where wr_id={$target[wr_id]} ");
	sql_query("update $table set wr_id={$target[wr_id]}, wr_num={$target[wr_num]}, wr_parent={$target[wr_parent]} where wr_id=99999 ");

	//my 파일테이블도 마찬가지로 바꿈
	sql_query("update {$g5[board_file_table]} set wr_id=99999 where bo_table='{$_GET[bo_table]}' and wr_id={$my[wr_id]}");
	sql_query("update {$g5[board_file_table]} set wr_id={$my[wr_id]} where bo_table='{$_GET[bo_table]}' and wr_id={$target[wr_id]}");
	sql_query("update {$g5[board_file_table]} set wr_id={$target[wr_id]} where bo_table='{$_GET[bo_table]}' and wr_id=99999");

	echo "<script type='text/javascript'>alert('변경되었습니다');</script>";
	echo "<script type='text/javascript'>window.parent.location.reload();</script>";
}else{
	echo "<script type='text/javascript'>alert('현재 {$inqty3}입니다.');</script>";
}
exit;
?>