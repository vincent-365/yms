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
			<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=4f4d300cdb63551df045da77e95b4e30&libraries=services"></script>
			<script>
				//다음맵
					  var address = "서울시 중구 소파로99 여명학교 ( 서울시 중구 남산동 2가 49-25 )";
					  var mapContainer = document.getElementById('map_canvas'), // 지도를 표시할 div 
					 

						mapOption = {
							center: new daum.maps.LatLng(37.556869, 126.985552), // 지도의 중심좌표
							level: 3 // 지도의 확대 레벨
						};  

					// 지도를 생성합니다    
					var map = new daum.maps.Map(mapContainer, mapOption); 

					// 주소-좌표 변환 객체를 생성합니다
					var geocoder = new daum.maps.services.Geocoder();

					// 주소로 좌표를 검색합니다
					geocoder.addressSearch(address, function(result, status) {

						// 정상적으로 검색이 완료됐으면 
						 if (status === daum.maps.services.Status.OK) {

							var coords = new daum.maps.LatLng(result[0].y, result[0].x);

							// 결과값으로 받은 위치를 마커로 표시합니다
							var marker = new daum.maps.Marker({
								map: map,
								position: coords
							});

							// 인포윈도우로 장소에 대한 설명을 표시합니다
							var infowindow = new daum.maps.InfoWindow({
								content: ''
							});
							//infowindow.open(map, marker);

							// 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
							map.setCenter(coords);
						} 
					});
				</script>
				<!--지도 끝-->
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