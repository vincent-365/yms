<a href="javascript:;" id="L" class="main_btn"><img src="/img/l_btn.png" alt="왼쪽으로"></a>

<?
$query = "select * from g4_main where chk_use = 'Y' order by reg_date desc";
$result = sql_query($query);
$main_cnt = sql_num_rows($result);

$j = 0;
?>
<ul>
<?
	while($row = sql_fetch_array($result)){
?>
	<li class="<?=$j == 0?"on":""?>" style="background:url(/data/main/<?=$row['save_name']?>) no-repeat center center;">
		<!--<center>
			<p>여명학교는 학생의 미래와<br />통일한국의 미래를 위해 존재합니다</p>
			<span>- 탈북 청소년을 위한 여명학교 -</span>
		</center>-->
		<?if ($row['url'] && $row['title']){?>
		<div>
			<center>
			</center>
		</div>
		<?}?>
	</li>
<?
	$j ++;
	}
?>

	<!-- <li style="background:url(/img/main/main_img03.jpg) no-repeat center center;">
		<center>
			<p>북한이탈 청소년 맞춤 교육을 통해<br />통일의 일꾼을 키워갑니다</p>
			<span>- 탈북 청소년을 위한 여명학교 -</span><br />
		</center>
		<div>
			<center>
				<a href="javascript:;" onclick="civerView('900', '506', '', '//player.vimeo.com/video/133115928?autoplay=1')" title="인천문예 홍보영상">여명학교 홍보영상 보기</a>
			</center>
		</div>
	</li>
	<li style="background:url(/img/main/main_img04.jpg) no-repeat center center;">
		<center>
			<p>여명학교는 북한이탈 청소년들을 위한<br />전문화된 최초의 대한학교입니다</p>
			<span>- 탈북 청소년을 위한 여명학교 -</span>
		</center>
		<div>
			<center>
				<a href="javascript:;" onclick="civerView('900', '506', '', '//player.vimeo.com/video/133115928?autoplay=1')" title="인천문예 홍보영상">여명학교 홍보영상 보기</a>
			</center>
		</div>
	</li> -->
</ul>


<a href="javascript:;" id="R" class="main_btn"><img src="/img/r_btn.png" alt="오른쪽으로"></a>
<ol>
	<? for ($i = 0 ; $i < $main_cnt ; $i ++){ ?>
	<li><a class="<?=$i == 0?"on":""?>" href="javascript:;"><?=$i?></a></li>
	<? } ?>
</ol>