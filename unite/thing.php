<? 
$t_num = "";
$l_num = "";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<style>
	.moll {
		position: absolute;
		top: 50%;
		left: 50%;
		color: #fff;
		transform: translate(-50%, -50%);
		text-align: left;
		width: 400px;
		font-weight: bold;
	}

	.morr {
		position: absolute;
		top: 50%;
		left: 50%;
		color: #fff;
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
		color: #ddd;
	}

	.molink {
		color: #fff !important;
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
		filter: brightness(0.6);
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
			color: #fff!important;
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
		color: #fff;
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
		color: #fff;
		transform: translate(-50%, -50%);
		text-align: right;
		width: 300px;
		font-size:11px;
	}
	}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="sub_contents1">
	<h3>물품후원<span><img src="/img/sub/location.png" alt="홈" /> > 후원안내 > 재정후원 > 물품후원</span></h3>
	<div class="page features">
		<div class="ccc h23">전문성을 가진 통일 인재의 요람, <strong>여명학교와 <h1>동행</h1>해주세요.</strong></div>
		<div class="ccc h24"><strong>
				<h1>나</h1>에게 맞는 후원 찾기
			</strong></div>
		<div class="ccc h25">물품후원</div>
    </div>
    <img src="/img/sub/11.png" alt="">
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>