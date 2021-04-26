<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="/js/main.js"></script>


<div class="main_img">
	<? include "./main_img.php" ?>
</div>

<div class="main_con" style="padding:40px 0">
	<div class="section">
		<ul>
			<li class="row1">
				<a href="javascript:;" onclick="civerView('900', '506', '', 'http://player.vimeo.com/video/322405863?autoplay=1')" title="여명학교 홍보 동영상">
					<div class="box box1">
						<h3>홍보동영상</h3>
						<p>북한이탈청소년들의 눈높이에서<br />
						 <span>시작하여 기적을 만들어내는 학교</span></p>
						<img class="go" src="/img/main/go.png" alt="바로가기" />
					</div>
				</a>
			</li>
			<li>
				<div class="box box2">
					<?
					$type="webzine";
					$bbs_id = "news";
					$limit = "1";
					$bbs_title = "뉴스레터";
					include "./main_bbs.php";
					?>
				</div>
			</li>
			<li>
				<div class="box box3">
					<? include "./main_book.php"; ?>
				</div>
			</li>
			<li class="row2">
				<a href="/unite/teen.php">
					<div class="box box4">
						<h3>북한이탈청소년들은</h3>
						<p>사람들의 편견 때문에 10명중 <br />
						6명은 북한출신임을 숨깁니다.</p>
					</div>
				</a>
				<a href="/unite/unite.php">
					<div class="box box4_2">
						<h3>통일 준비 학교</h3>
						<p>북한이탈청소년을 위한 <br />
						최초의 학력인정 대안학교</p>
					</div>
				</a>
			</li>
			<li>
				<div class="box box5">
					<?
					$type="list";
					$bbs_id = "notic";
					$limit = "4";
					$bbs_title = "공지사항";
					include "./main_bbs.php";
					?>
				</div>
				<a href="/bbs/board.php?bo_table=video2">
					<div class="box box6">
						<h3>후원안내</h3>
						<p>여명학교는 <br />
						후원을 통해 운영됩니다</p>
					</div>
				</a>
			</li>
			<li>
				<div class="box box7" style="height:200px; overflow:hidden; margin-bottom:24px;">
					<div class="fb-page" data-href="https://www.facebook.com/ymschool" data-width="980"data-height="280" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ymschool"><a href="https://www.facebook.com/ymschool">여명학교(ymschool)</a></blockquote></div></div>
				</div>
				<div class="box box8" style="height:34px; padding:10px;text-align:center">
				<a href="http://cafe.naver.com/ymcafeteria" target="blank" style=""><img src="cafe2.jpg" alt="카페바로가기" style="height:100%"/></a>
				</div>
				<div class="box box8" style="height:34px; padding:10px;text-align:center;">
				<a href="http://coding.ymschool.org/" target="blank" style=""><img src="qd-e1519207488297.png" alt="여명학교코딩스쿨" style="height:100%"/></a>
				</div>
			</li>
		</ul>
	</div>
</div>

<iframe class="myhole" name="op_frm" width="100%" height="0" style="display:none; visibility:hidden; " frameborder="0" hspace="0" marginheight="0" marginwidth="0" vspace="0"></iframe>

<?php
include_once(G5_PATH.'/tail.php');
?>