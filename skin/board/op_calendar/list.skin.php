<?
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$today = getdate(); 
$b_mon = $today['mon']; 
$b_day = $today['mday']; 
$b_year = $today['year']; 

if ($year < 1) {
	$month = $b_mon;
	$mday = $b_day;
	$year = $b_year;
}

$lastday=array(0,31,28,31,30,31,30,31,31,30,31,30,31);
if ($year%4 == 0) $lastday[2] = 29;
$dayoftheweek = date("w", mktime (0,0,0,$month,1,$year));

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div id="bo_list">
	<div class="calendar_btn">
		<ul>
			<li>
				<a href="<?="$_SERVER[PHP_SELF]?bo_table=$bo_table&"?><?if ($month == 1) { $year_pre=$year-1; $month_pre=$month; } else {$year_pre=$year-1; $month_pre=$month;} echo ("year=$year_pre&month=$month_pre");?>" target="_self" onfocus="this.blur()"><img src="<?=$board_skin_url?>/img/left_arrow2.png" border="0" title="<?=$year_pre?>년"></a>
				<a href="<?="$_SERVER[PHP_SELF]?bo_table=$bo_table&"?><?if ($month == 1) { $year_pre=$year-1; $month_pre=12; } else {$year_pre=$year; $month_pre=$month-1;} echo ("year=$year_pre&month=$month_pre");?>" target="_self" onfocus="this.blur()"><img src="<?=$board_skin_url?>/img/left_arrow.png" border="0" title="<?=$month_pre?>월"></a>
			</li>
			<li class="number"><a href="<?="$_SERVER[PHP_SELF]?bo_table=$bo_table&"?>" title="오늘로" onfocus="this.blur()"><span style="font-size:28px;color:#333;"><b><? echo ("$year".년."$month".월); ?></b></span></a></li>
			<li>
				<a href="<?="$_SERVER[PHP_SELF]?bo_table=$bo_table&"?><?if ($month == 12) { $year_pre=$year+1; $month_pre=1; } else {$year_pre=$year; $month_pre=$month+1;} echo ("&year=$year_pre&month=$month_pre");?>" target="_self" onfocus="this.blur()"><img src="<?=$board_skin_url?>/img/right_arrow.png" border="0" title="<?=$month_pre?>월"></a>
				<a href="<?="$_SERVER[PHP_SELF]?bo_table=$bo_table&"?><?if ($month == 12) { $year_pre=$year+1; $month_pre=$month; } else {$year_pre=$year+1; $month_pre=$month;} echo ("&year=$year_pre&month=$month_pre");?>" target="_self" onfocus="this.blur()"><img src="<?=$board_skin_url?>/img/right_arrow2.png" border="0" title="<?=$year_pre?>년"></a>
			</li>
		</ul>
	</div>

	<table class="calendar">
		<colgroup>
			<col style="width:14%; ">
			<col style="width:14%; ">
			<col style="width:14%; ">
			<col style="width:14%; ">
			<col style="width:14%; ">
			<col style="width:14%; ">
			<col style="width:14%; ">
		</colgroup>
		<thead>
			<tr>
				<th class="sun">SUNDAY</th>
				<th>MONDAY</th>
				<th>TUESDAY</th>
				<th>WEDNESDAY</th>
				<th>THURSDAY</th>
				<th>FRIDAY</th>
				<th class="sat">SATURDAY</th>
			</tr>
		</thead>
		<tbody>
<?
$cday = 1;
$sel_mon = sprintf("%02d",$month);
$query = "SELECT * FROM g5_write_day  WHERE left(wr_link1,6) <= '$year$sel_mon'  and left(wr_link2,6) >= '$year$sel_mon'  ORDER BY wr_id ASC";
$result = sql_query($query);

// 해당 월 일정 갯수세기
$total_record = "select count(wr_id) from g5_write_day  WHERE left(wr_link1,6) <= '$year$sel_mon'  and left(wr_link2,6) >= '$year$sel_mon'";
$total_result = sql_query($total_record);
//20190114 쿼리 실행단 오류 수정
//$count = mysql_result($total_result,0,0);
$count = sql_fetch_array($total_result,0,0);
// 내용을 보여주는 부분
//while ($row = mysql_fetch_array($result)) { // 제목글 뽑아서 링크 문자열 만들기..
while ($row = sql_fetch_array($result)) { // 제목글 뽑아서 링크 문자열 만들기..
	if( substr($row[wr_link1],0,6) <  $year.$sel_mon ) {
		$start_day =1; 
		$start_day= (int)$start_day;
	} else {
		$start_day = substr($row[wr_link1],6,2);
		$start_day= (int)$start_day;
	}

	if( substr($row[wr_link2],0,6) >  $year.$sel_mon ) {
		$end_day = $lastday[$month];
		$end_day= (int)$end_day;
	} else {
		$end_day = substr($row[wr_link2],6,2);
		$end_day= (int)$end_day;
	}

	for ($i = $start_day ; $i <= $end_day;  $i++) {
		if ($write_href) {
			$html_day[$i].= "<li><a href='./board.php?bo_table=".$bo_table."&wr_id=".$row["wr_id"]."'><img src='$board_skin_url/img/icon.gif'> ".$row[wr_subject]."</li></a>"."\n";
		} else {
			$html_day[$i].= "<li><img src='$board_skin_url/img/icon.gif'> ".$row[wr_subject]."</li>"."\n";
		}
	}
}

// 달력의 틀을 보여주는 부분
$temp = 7- (($lastday[$month]+$dayoftheweek)%7);

if ($temp == 7) $temp = 0;
	$lastcount = $lastday[$month]+$dayoftheweek + $temp;

for ($iz = 1; $iz <= $lastcount; $iz++) { // 42번을 칠하게 된다.
	$bgcolor = "#ffffff";  // 쭉 흰색으로 칠하고
	if ($b_year==$year && $b_mon==$month && $b_day==$cday) $bgcolor = "#ffffe9";      //  "#DFFDDF"; // 오늘날짜 연두색으로 표기
	if (($iz%7) == 1) echo ("  <tr>\n"); // 주당 7개씩 한쎌씩을 쌓는다.
	if ($dayoftheweek < $iz  &&  $iz <= $lastday[$month]+$dayoftheweek)	{
		// 전체 루프안에서 숫자가 들어가는 셀들만 해당됨
		// 즉 11월 달에서 1일부터 30 일까지만 해당
		$daytext = "$cday"; // $cday 는 숫자 예> 11월달은 1~ 30일 까지
		//$daytext 은 셀에 써질 날짜 숫자 넣을 공간
		if ($iz%7 == 1) $daytext = "<font color='#8e1e1e'>$daytext</font>"; // 일요일
		if ($iz%7 == 0) $daytext = "<font color='#333'>$daytext</font>"; // 토요일

		// 여기까지 숫자와 들어갈 내용에 대한 변수들의 세팅이 끝나고 
		// 이제 여기 부터 직접 셀이 그려지면서 그 안에 내용이 들어 간다.

		if ($html_day[$cday] == "" ){
			echo ("<td class='cal_title tnone '><div>\n");
		}else{
			echo ("<td class='cal_title'><div>\n");
		}
		if ($write_href) {
			// $write_href (글쓰기 권한)이 있으면
			// 날짜에 누르면 글씨쓰기가 가능한 링크를 넣어서 출력하기
			$f_date = $year.sprintf("%02d",$month).sprintf("%02d",$cday);
			echo "<p><a href='$write_href&f_date=$f_date&t_date=$f_date'>$daytext <span>일</span></a></p>\n";
		}
		else { // 글쓰기 권한이 없으면 글쓰기 링크는 넣지 않고 그냥 숫자만 출력하기
			echo "<p>$daytext\n <span>일</span></p>";
		}
		echo "<ol>".$html_day[$cday]."</ol>";
		echo ("</div></td>\n"); // 한칸을 마무리
		$cday++; // 날짜를 카운팅
	}
	// 11월에서 1일부터 30일에 해당되지 않으면 그냥 회색을 칠한다.
	else { echo ("<td class='null'>&nbsp;</td>\n"); }
	if (($iz%7) == 0) echo ("</tr>\n");

} // 반복구문이 끝남
	if ($count == "0"){
	echo ("<td class='cal_title non_title block400 block700'><div><p>등록된 일정이 없습니다.</p></div></td>\n");
	}
?>

		</tbody>
	</table>

	<?php if ($write_href) { ?>
	<div class="bo_fx">
		<ul class="btn_bo_user">
			<li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li>
		</ul>
	</div>
	<?php } ?>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>