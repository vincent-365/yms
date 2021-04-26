<? 
$t_num = "1";
$l_num = "7";

include_once("./_common.php");
include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.con.php');
?>

<div class="sub_contents">
	<h3>찾아오시는 길<span><img src="/img/sub/location.png" alt="홈" /> > 학교소개 > 찾아오시는 길</span></h3>
	<div class="page contactus">
		<div id="map_canvas" style="margin-top:20px;">
			<script type="text/javascript">
				function initialize() {
					var latlng = new google.maps.LatLng(37.556869, 126.985552);
					var myOptions = {
					zoom:15,
					center:latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
					};
				var map = new google.maps.Map(document.getElementById("map_canvas"),
					myOptions);

					var marker = new google.maps.Marker({
					position:latlng, 
					map:map
					});
				}
				function loadScript() {
					var script = document.createElement("script");
					script.type = "text/javascript";
					script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
					document.body.appendChild(script);
				}

				window.onload = loadScript;
			</script>
		</div>

		<h4>찾아 오시는 길</h4>

			<table class="table_01 mb20  block">
				<colgroup>
					<col style="width:19%">
					<col style="">
				</colgroup>
				<tbody>
					<tr>
						<th>지하철</th>
						<td class="txtL">4호선 명동역 3번출구</td>
					</tr>
					<tr>
						<th>버스</th>
						<td class="txtL">지선 0013 0211 7011 7015 간선 104 202 263 604 광역 9411</td>
					</tr>
					<tr>
						<th>자가용</th>
						<td class="txtL">남대문에서 명동역 방향으로 직진 → 명동역을 앞두고 오른쪽 끝차선 (3차선)으로 진입 (1,2차선은 지하차도 진입) → 3차선으로 50m 직진 후 우측 차선 소월길 진입 후 직진 → 숭의여자대학(좌측)으로부터 100m</td>
					</tr>
				</tbody>
			</table>
			<div class="img">
				<img src="/img/sub/map_img.jpg" /> 
			</div>



		<h4>학교 연락처</h4>
		<table class="table_01 mb20 block">
			<colgroup>
				<col style="width:20%">
				<col style="">
				<col style="width:20%">
				<col style="">
			</colgroup>
			<tbody>
				<tr>
					<th>주소</th>
					<td colspan="3"class="txtL">서울시 중구 소파로99 여명학교 ( 서울시 중구 남산동 2가 49-25 )</td>
				</tr>
				<tr>
					<th class="borb">전화번호 </th>
					<td class="txtL borb">02-888-1673~4</td>
					<th>팩스번호 </th>
					<td class="txtL">02-888-1676</td>
				</tr>
                <tr>
					<th class="borb">후원문의 </th>
					<td class="txtL borb">02-830-3514 / 02-3789-1673</td>
					<th>이메일 </th>
					<td class="txtL">admin@ymschool.org </td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?
include_once(G5_PATH.'/tail.con.php');
include_once(G5_PATH.'/tail.php');
?>