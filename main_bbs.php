<?
$table = "g5_write_".$bbs_id;
?>
<h3><?=$bbs_title?> <a href="/bbs/board.php?bo_table=<?=$bbs_id?>">+ 더보기</a></h3>
<ol>
	<li>
<?
$query = "select *, (select bf_file from g5_board_file where bo_table = '".$bbs_id."' and bf_type <> '0' and wr_id = a.wr_id limit 1 ) as save_name from ".$table." as a where wr_subject <> '' order by wr_datetime desc limit ".$limit."";
$result = sql_query($query);
$cnt = sql_num_rows($result);

if ($cnt == 0){
?>
	등록된 데이터가 없습니다.
<?
}else{
	while($row = sql_fetch_array($result)){
		$subject = strip_tags($row['wr_subject']);
		$wr_content = strip_tags($row['wr_content']);
		$wr_datetime = substr($row['wr_datetime'], "0", "10");
		$save_name = "/data/file/".$bbs_id."/".$row['save_name'];
		if (!file_exists($save_name) && !$row['save_name']) $save_name = "/img/sub/no_img.jpg";

		if (trim($wr_content) == "") $wr_content  = "이미지만 등록된 게시물 입니다.";
		$wr_content = cut_str($wr_content,"60","..");

		if ($type == "webzine"){
?>
		<a href="/bbs/board.php?bo_table=<?=$bbs_id?>&wr_id=<?=$row["wr_id"]?>">
			<img src="<?=$save_name?>" style="width:103px; height:73px; " />
			<p>
				<span><?=$subject?></span>
				<?=$wr_content?>
			</p>
		</a>
<?
		}else{
?>
		<a href="/bbs/board.php?bo_table=<?=$bbs_id?>&wr_id=<?=$row["wr_id"]?>">- <?=$subject?></a><span><?=$wr_datetime?></span>
<?
		}
	}
}
?>
	</li>
</ol>



<?
$bbs_title = "";
$limit = "";
$type="";
$bbs_id = "";
?>