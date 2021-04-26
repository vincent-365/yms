<? 
$t_num = "5";
$l_num = "2";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<style>
	.moll {
		position: absolute;
		top: 50%;
		left: 50%;
		color: yellow;
		transform: translate(-50%, -50%);
		text-align: left;
		width: 400px;
		font-weight: bold;
	}

	.morr {
		position: absolute;
		top: 50%;
		left: 50%;
		color: yellow;
		transform: translate(-50%, -50%);
		text-align: right;
		width: 400px;
	}

	.motitle {
		font-size: 1.6rem;
		font-weight: bold;
	}

	.mocon {
		margin: 10px 0px 30px 0px;
		color: yellow;
	}

	.molink {
		color: yellow !important;
		padding: 10px 20px;
		border: 4px solid;
		background: #777777b0;
	}

	.mm2 {
		width: 500px;
		margin: 20px auto;
		position: relative;
	}

	.imgbox {
		text-align: center;
	}

	.imgbox img {
		width: 100%;
		height: 300px;
		filter: brightness(0.4);
	}

	.cont {
		border: 3px solid green;
		border-radius: 20px;
		width: 450px;
		margin: auto;
		padding: 20px;
		position: relative;
	}

	.last_box {
		width: 440px;
		font-size: 1rem;
		font-weight: 700;
		border: 1px solid #ddd;
		padding: 40px 10px;
		margin: 0 auto;
		padding-left: 110px;
		background: url(/img/sub/icon3.png) no-repeat;
		background-size: contain;
	}

	.features strong {
		color: #f57a12;
	}

	.features h1 {
		display: inline;
	}

	.ccc {
		text-align: center;
		font-weight: bold;
	}

	.h23 {
		font-size: 1.5rem;
		margin-bottom: 40px;
		margin-top: 10px;
		line-height: 40px;
		color: #909090;
	}

	.h24 {
		font-size: 1.2rem;
		margin-top: 50px;
	}

	.h25 {
		color: #696969;
		border-bottom: 1px dashed #8e8e8e;
		padding: 10px 0px;
	}

	@media screen and (max-width: 768px) {
		.mm2 {
			width: 340px;
			margin: 20px auto;
			position: relative;
		}

		.last_box {
			width: 230px;
			font-size: 0.6rem;
			font-weight: 700;
			border: 1px solid #ddd;
			padding: 40px 10px;
			margin: 0 auto;
			padding-left: 100px;
			background: url(/img/sub/icon3.png) no-repeat;
			background-size: contain;

		}

		.cont {
			border: 3px solid green;
			border-radius: 20px;
			width: 300px;
			margin: auto;
			padding: 20px;
			position: relative;
		}

		.call {
			padding: 33px 17px!important;
			color: yellow!important;
			border: none!important;
			background: green!important;
			border-radius: 10px!important 	;
		}

		.callcon {
			width: 74%;
		}
		.moll {
		position: absolute;
		top: 50%;
		left: 50%;
		color: yellow;
		transform: translate(-50%, -50%);
		text-align: left;
		width: 300px;
		font-weight: bold;
		font-size:11px;
	}

	.morr {
		position: absolute;
		top: 50%;
		left: 50%;
		color: yellow;
		transform: translate(-50%, -50%);
		text-align: right;
		width: 300px;
		font-size:11px;
	}
	}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="sub_contents1">
	<h3>재정후원<span><img src="/img/sub/location.png" alt="홈" /> > 후원안내 > 재정후원</span></h3>
	<div class="page features">
		<div class="ccc h23">전문성을 가진 통일 인재의 요람, <strong>여명학교와 <h1>동행</h1>해주세요.</strong></div>
		<div class="ccc h24"><strong>
				<h1>나</h1>에게 맞는 후원 찾기
			</strong></div>
		<div class="ccc h25">여명학교 후원 종류 소개</div>
	</div>
	<div class="imgbox">
		<div class="mm2">
			<img src="/img/sub/pp_1.jpg" alt="">
			<div class="moll">
				<div class="motitle">일반후원</div>
				<div class="mocon">여명학교 운영비와 국가의 지원이 없는 제3국 출생 학생들에</br>대한 교육비 지원, 여명학교 학사 및 기숙사 마련 비용 지원</div>
				<a class="molink" href="https://mrmweb.hsit.co.kr/v2/default.aspx?Server=zFbt5lzry2qI2y2H+SU3LA==&action=join" target="_blank">후원하기<i class="fa fa-caret-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="mm2">
			<img src="/img/sub/pp_2.png" alt="">
			<div class="morr">
				<div class="motitle">건축후원</div>
				<div class="mocon">여명학교 학사 및 기숙사 마련 재정후원</div>
				<a class="molink" href="https://mrmweb.hsit.co.kr/v2/default.aspx?Server=zFbt5lzry2qI2y2H+SU3LA==&action=join" target="_blank">후원하기<i class="fa fa-caret-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="mm2">
			<img src="/img/sub/pp_3.jpg" alt="">
			<div class="moll">
				<div class="motitle">장학후원</div>
				<div class="mocon">여명학교 학생들의</br>생활비와 교통비를 지원하는 장학금</div>
				<a class="molink" href="https://mrmweb.hsit.co.kr/v2/default.aspx?Server=zFbt5lzry2qI2y2H+SU3LA==&action=join" target="_blank">후원하기<i class="fa fa-caret-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="mm2">
			<img src="/img/sub/pp_4.jpg" alt="">
			<div class="morr">
				<div class="motitle">물품후원</div>
				<div class="mocon">조 * 중식 제공을 위한 쌀, 의류, 학용품,</br>기타 교육에 필요한 물품 등을 후원</div>
				<a class="molink" href="/unite/thing.php" target="_blank">후원하기<i class="fa fa-caret-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="mm2">
			<img src="/img/sub/pp_5.jpg" alt="">
			<div class="moll">
				<div class="motitle">해외후원</div>
				<div class="mocon">해외에서도 여명학교를 후원할 수 있습니다.</br>여명학교와 함께해 주세요.</div>
				<a class="molink" href="/unite/eng.php" target="_blank">후원하기<i class="fa fa-caret-right" aria-hidden="true"></i></a></i></a>
			</div>
		</div>
	</div>
	<div class="cont">
		<div style="font-weight: bold;font-size: 1rem;">여명학교 후원이 처음이신가요?</div>
		<div class="callcon" style="color: #9e9e9e;">후원종류와 후원자님께 맞는 후원을 소개해드립니다.</br>
			이외에 궁금하신 사항은 전화문의를 통해 해결하실 수 있습니다.</div>
		<div style="position: absolute;right: 20px;top: 20px;">
			<button class="call" style="padding: 17px;color: yellow;border: none;background: green;border-radius: 10px;">전화문의</button>
		</div>
	</div>
	<div style="text-align: center;margin: 20px 0px;font-size: 1.2rem;font-weight: bold;">
		여명학교에 보내주신 소중한 후원금은 올바르고 효율적으로 사용하며
		<strong style="display: block;color: #f57a12;">후원금 사용내역은 투명하게 공개하고 있습니다.</strong>
	</div>
	<div class="last_box">
		여명학교는 연 1회 회계법인의 외부회계감사를 실시하고 있으며,통일부와 서울시교육청으로부터 이중 대외검사를 받고 있습니다.
	</div>
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>