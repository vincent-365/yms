<?
$query = "select *, (select bf_file from g4_board_file where bo_table = 'book' and bf_type <> '0' and wr_id = a.wr_id limit 1 ) as save_name from g4_write_book as a order by wr_datetime desc limit 5";
$result = sql_query($query);
$book_cnt = sql_num_rows($result);
?>
<ol class="book">
<?
	while($row = sql_fetch_array($result)){
		$subject = strip_tags($row['wr_subject']);
		$wr_content = strip_tags($row['wr_content']);
		$save_name = "/data/file/book/".$row['save_name'];
		if (!file_exists($save_name) && !$row['save_name']) $save_name = "/img/sub/no_img.jpg";

		if (trim($wr_content) == "") $wr_content  = "이미지만 등록된 게시물 입니다.";
		$wr_content = cut_str($wr_content,"70","..");
?>
	<li>
		<a href="/bbs/board.php?bo_table=book&wr_id=<?=$row["wr_id"]?>">
			<img src="<?=$save_name?>" />
			<p>
				<span><?=$subject?></span>
				<?=nl2br($wr_content)?>
			</p>
		</a>
	</li>
<?
	$j ++;
	}
?>
</ol>

<ol class="bookbtn">
	<? for ($i = 0 ; $i < $book_cnt ; $i ++){ ?>
	<li><a class="<?=$i == 0?"on":""?>" href="javascript:;"><img src="/img/main/bookbtn<?=$i == 0?"_on":""?>.png" /></a></li>
	<? } ?>
</ol>