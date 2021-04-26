<!--구글맵api-->
<script src="https://maps.googleapis.com/maps/api/js?AIzaSyB9LaaEw3HMEnu9tlLV2MIY9eMFVgXAz-c&amp;sensor=false"></script>
<script>
		$(document).ready(function () {
			var map;
			function initialize() {
				var myLatlng = new google.maps.LatLng(37.5045291,126.7209545);
				var mapOptions = {
					zoom: 16,
					center: myLatlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
				google.maps.event.addListener(map, 'zoom_changed', function () { setTimeout(moveNewYork, 3000); });
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					icon:"/img/sub_contents/map_point.png",
					title: "인천문예전문학교"
				});

			}
            google.maps.event.addDomListener(window, 'load', initialize);
		});

</script>