<? 
$t_num = "4";
$l_num = "6";
$s_num = "1";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<div class="sub_contents">
	<h3>여명미디어룸<span><img src="/img/sub/location.png" alt="홈" /> > 여명소식 > 여명미디어룸</span></h3>
	<? include_once "../include/sub_tab/media_tab.php" ?>
	<div class="page germany">
    <p class="subtitle" style="margin-bottom:20px; text-align:center;font-weight:bold; font-size:1.3em;" >언론에 나온 여명학교 이야기입니다.<p>
    </div>
    <div class="donation_box">
        <?php
        $query = "SELECT * FROM midiroom";
		// 2019.01.14 쿼리문 실행단 수정
        //$result = mysql_query($query) or die('데이터베이스 오류: '.mysql_error());
		$result = sql_query($query) or die('데이터베이스 오류: '.mysql_error());
        ?>
        <ul>
            <?php
            //while ($row = mysql_fetch_assoc($result)) {
			 while ($row = sql_fetch_array($result)) {
            ?>
            <li>
            <div>
            <a href="<?php echo $row["videourl"];?>">
            <img src="<?php echo $row["imgurl"];?>" alt="" />
            <p style="color:black"><?php echo $row["title"];?>
            <span><?php echo $row["subtitle"];?></span></p></a>            
            </div>
            </li>
            <?php
            }
            ?>
        </ul>
	</div>
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>