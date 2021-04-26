<div class="tab_menu">
	<ul class="sub_tab sub_tab50">
		<li class=""><a href="<?=G5_URL?>/unite/do_3.php" <?=$s_num == "1"?"class='on'":""?>>후원기도회</a></li>
		<li class=""><a href="<?=G5_URL?>/bbs/board.php?bo_table=pray" <?=$s_num == "2"?"class='on'":""?>>기도제목</a></li>
	</ul>
</div>
<p class="subtitle" style="margin-bottom:20px; text-align:center;font-weight:bold; font-size:1.3em;" >하나님과 동행하는 여명학교의 기도 제목입니다. 기도를 부탁드립니다.<p>
<?php
        include '/cfadm/db_info.php';
        $updatequert = "SELECT * FROM imgtag WHERE num = 2";
        //$result_1 = mysql_query($updatequert) or die('데이터베이스 오류: '.mysql_error());
		$result_1 = sql_query($updatequert) or die('데이터베이스 오류: '.mysql_error());
        //while ($row = mysql_fetch_assoc($result_1)) {
		while ($row = sql_fetch_array($result_1)) {
        ?>
	<img src="/cfadm/uploads/<?php echo $row['code'] ?>" alt="latter">	
<?php } ?>
