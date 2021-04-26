<div class="sub_visual sub_visual0<?=$t_num?>">
<!-- 비쥬얼 영역 -->
</div>

<div class="contents">
	<div class="section">
		<div class="section">

			<? if ($t_num){ ?>
			<div class="left">
				<?switch($t_num){
					case "1" :
						$dep_title = "학교소개";
					break;
					case "2" :
						$dep_title = "학교운영";
					break;
					case "3" :
						$dep_title = "통일학교모델";
					break;
					case "4" :
						$dep_title = "여명소식";
					break;
					case "5" :
						$dep_title = "후원안내";
					break;
					case "6" :
						$dep_title = "입학안내";
					break;
					case "7" :
						$dep_title = "(사)여명";
					break;
				}?>
				<h2><?=$dep_title?></h2>
				<? include G5_PATH."/include/left".sprintf("%02d",$t_num).".php" ?>
				<? include G5_PATH."/include/banner.php" ?>
			</div>
			<? } ?>