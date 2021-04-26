var box_speed = 500;

function civerView(width, height, url, vimeo){
	checkurl = url.search("cyber");

	if (checkurl < 0){
		if ($(window).width() < width){
			link = url;
			if (link == "") link = vimeo;
			window.open(link,'_blank');
			return;
		}
	}

	if(url != "" && vimeo != ""){
		alert("Vimeo 나 Iframe 중 하나만 입력해주시기 바랍니다.\n\n3번째 입력값이 일반 Iframe 4번째 입력값이 Vimeo 입니다.");
	}else{
		var block = document.getElementById("civer_blockbox");
		
		if(width == ""){
			width = 940;
		}

		if(height == ""){
			height = 608;
		}
		
		window_width = (width / 2);
		window_height = (height / 2);

		$("#civerbox").css("height", height);
		$("#civerbox").css("width", width);


		if ( block ) {
			block.style.display = "block";

		} else {
			block = document.createElement("div");
			block.setAttribute("id", "civer_blockbox");
			document.body.appendChild(block);
		}

		var box = document.getElementById("civerbox");
		box = document.createElement("div");
		box.setAttribute("id", "civerbox");
		document.body.appendChild(box); 
		
		if(vimeo == ""){
			$("#civerbox").html( "<iframe src='"+url+"' scrolling='no' width='"+width+"' height='"+height+"' frameborder='0' hspace='0' marginheight='0' marginwidth='0' vspace='0' allowTransparency='false'></iframe><div class='btnClose'>닫기</div>" ).addClass("iframe");
		}else{
			$("#civerbox").html( "<iframe src='"+vimeo+"' width='"+width+"' height='"+height+"' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><div class='btnClose'>닫기</div><div class='titlebtn'>exdesign</div>" ).addClass("vidio");
		}
		$("#civerbox").css( "top",  ($(window).height()/2 + $(document).scrollTop() - window_height )  + "px" ).css( "width", width+"px").css( "height", height+"px")
		
		url = url.substring( 0,10 );
		if (url == "/ebook.asp"){
			$("#civerbox.iframe").css("border", "none");
			$("#civerbox.iframe").css("background", "none");
			$("#civerbox.iframe .btnClose").css("top", "15px");
			$("#civerbox.iframe .btnClose").css("right", "28px");
		}

		window.onresize = civerboxMove;
		civerboxMove();

		$(window).scroll(function(){
			$("#civerbox").stop();
			$("#civerbox").css("top", ($(window).height()/2 + $(document).scrollTop() - window_height )  + "px");
			$("#civerbox").css("left", $(window).width() / 2 - window_width + $(document).scrollLeft() + "px");

			$("#civer_blockbox").css("height", $(window).height() + $(document).scrollTop() );
			$("#civer_blockbox").css("width", $(window).width() + $(document).scrollLeft() );
		});

		$("#civer_blockbox").click(function(){
			civerclose();
		});

		$("#civerbox .btnClose").click( civerclose );

	}
}

function civerboxMove() {
	var block = $("#civer_blockbox");
	var box = $("#civerbox");
	var scroll_top = $(document).scrollTop();

	block.css("width", $(window).width() + "px");
	block.css("height", $(window).height() + scroll_top + "px");
	
	box.css("left", $(window).width() / 2 - window_width + "px");
	box.css("top", ($(window).height()/2 + $(document).scrollTop() - window_height )  + "px");

}

function civerclose() {
	$("#civerbox").html("");
	$("#civer_blockbox").bind().remove();
	$("#civerbox").bind().remove();

	//if ( nextAction) nextAction();
}