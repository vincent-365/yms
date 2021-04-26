<? 
$t_num = "1";
$l_num = "6";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<script type="text/javascript">
function play_music(){
	var src = $(".music_iframe").attr("src");

	if (src == ""){
		$(".music_iframe").attr("src", "./music.php");
		$(".listen_box a").text("그만듣기");
	}else{
		$(".music_iframe").attr("src", "");
		$(".listen_box a").text("교가듣기");
	}
}
</script>

<div class="sub_contents">
	<h3>교가<span><img src="/img/sub/location.png" alt="홈" /> > 학교소개 > 교가</span></h3>
	<div class="page">
		<div class="listen_box">
			<a href="javascript:;" onclick="play_music()">교가 듣기</a>
		</div>

		<div class="song_imgbox">
			<img class="song_img" src="/img/sub/song_img.png" alt="악보"/>
		</div>

		<iframe src="" width="0" height="0" name='music_iframe' class="music_iframe" style='position:absolute; bottom:0; right:0; '></iframe>

	</div>
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>