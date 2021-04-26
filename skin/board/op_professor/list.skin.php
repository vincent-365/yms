<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- <h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2> -->

<!-- 게시판 목록 시작 { -->
<div id="bo_gall">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

    <!-- <div class="bo_fx">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div> -->

    <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

	<? if ($is_admin) { ?>
		<div><input onclick="if (this.checked) all_checked(true); else all_checked(false);" type="checkbox">전체선택</div>
	<? } ?>

<div style="overflow:hidden; ">
<?
for ($i=0; $i<count($list); $i++) {

	$sql = " select bf_file, bf_content from g5_board_file where bo_table = '".$bo_table."' and wr_id = '".$list[$i][wr_id]."' and bf_type != '0' order by bf_no limit 0, 1 ";
	$row = sql_fetch($sql);

	$img = "/img/sub/no_img.jpg";
	if ($row["bf_file"] != ""){
		$img = "../data/file/$bo_table/".urlencode($row["bf_file"]);
	}
	if (!file_exists($img)) $img = "/img/sub/no_img.jpg";

	$checkbox = "";
	$admin_mod_start = "";
	$admin_mod_end = "";
	if ($is_checkbox){
		$checkbox = "<input type=checkbox name=chk_wr_id[] value='".$list[$i][wr_id]."'>";
		$admin_mod_start = "<a href='".$list[$i][href]."'>";
		$admin_mod_end = "</a>";
		$up_down="<div>".$checkbox."&nbsp;&nbsp;<a href=\"javascript:rank('up','".$list[$i][wr_id]."')\"><img src=\"{$board_skin_url}/img/btn_up.gif\" alt='한칸위로'></a> <a href=\"javascript:rank('down','".$list[$i][wr_id]."')\"><img src=\"{$board_skin_url}/img/btn_down.gif\" alt='한칸아래로'></a></div>"; 
	}
?>
	<div class='professor_box'>
		<ul>
			<li>
				<?=$admin_mod_start?>
				<div class='pic'>
					<div style='background-image:url("<?=$img?>")'></div>
				</div>
				<div class='professor_txt'>
					<?=$up_down?>
					<p class='name'><?=$list[$i][subject]?></p>
					<p>
						<?=$list[$i][wr_1]?><br />
						<?=$list[$i][wr_2]?>
					</p>
				</div>
				<?=$admin_mod_end?>
			</li>
		</ul>
	</div>
<?
}

if (count($list) == "0"){
?>
	<div class='professor_box no_date'>등록된 데이터가 없습니다.</div>
<?
}
?>
</div>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm">
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    </form>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages;  ?>

<script language="JavaScript">
function rank(mode,wr_id,rank){
	hiddenframe.location.href="<?=$board_skin_url?>/rank_update.php?bo_table=<?=$bo_table?>&mode="+mode+"&wr_id="+wr_id;
}
</script>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
