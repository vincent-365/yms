
$(function(){
	/* 메인이미지 슬라이드*/
	var main_speed = 10000;
	var main_cnt = $(".main_img ul li").length;

	if(main_cnt >= 2){ main_auto_play = setInterval(main_auto,main_speed); }

	$(".main_btn").click(function(){
		play_main($(this).attr("id"), "");
	})

	$(".main_img ol li").click(function(){
		var idx = $(this).index() + 1;
		var now_idx = $(".main_img ol li a.on").parent("li").index();
		var position = "L";
		if (idx > now_idx) position = "R";

		play_main(position, idx);
	})

	$(".main_img ul").hover(function(){
		if(main_cnt >= 2){ clearInterval(main_auto_play); }
	}, function(){
		if(main_cnt >= 2){ main_auto_play = setInterval(main_auto,main_speed); }
	})

	function main_auto(){
		play_main('R', "");
	}

	function play_main(id, goidx){
		var num = $(".main_img ul li.on").index(); //현재 on인 index 값
		var idx = ""; //다음 불러올 이미지index 값

		if(main_cnt >= 2){ clearInterval(main_auto_play); }

		if (id == "L"){
			idx = num - 1;
			wid = "100%";
			wid2 = "-100%";
		}else{
			idx = num + 1;
			wid = "-100%";
			wid2 = "100%";
		}

		if (idx >= main_cnt) idx = 0;
		if (idx < 0) idx = main_cnt - 1;
		if (goidx) idx = goidx - 1;

		if ($(".main_img ul li").is(":animated") == false){
			$(".main_img ul li").css({"left" : wid2, "z-index" : "1"});
			$(".main_img ul li:eq("+idx+")").css("z-index","2");
			$(".main_img ul li center").css({"left" : wid2, "z-index" : "1"});
			$(".main_img ul li:eq("+idx+") center").css("z-index","2");

			$(".main_img ul li:eq("+num+")").css("left","0");
			$(".main_img ul li:eq("+num+") center").css("left","0");
			$(".main_img ul li:eq("+num+")").stop(true, true).animate({ left : wid }, 900, "easeInOutExpo");
			$(".main_img ul li:eq("+idx+")").stop(true, true).animate({ left : "0" }, 900, "easeInOutExpo");
			$(".main_img ul li:eq("+num+") center").stop(true, true).animate({ left : wid }, 1000, "easeInOutQuart");
			$(".main_img ul li:eq("+idx+") center").stop(true, true).animate({ left : "0" }, 1000, "easeInOutQuart");
			$(".main_img ul li").removeClass("on");
			$(".main_img ul li:eq("+idx+")").addClass("on");

			if(main_cnt >= 2){ main_auto_play = setInterval(main_auto,main_speed); }

			main_btn_change(idx)
		}
	}

	function main_btn_change(idx){
		$(".main_img ol li a").removeClass("on");
		$(".main_img ol li:eq("+idx+") a").addClass("on");
	}









	/* 메인 배너 슬라이드*/
	var book_speed = 10000;
	var book_cnt = $(".bookbtn li").length;

	if(book_cnt >= 2){ book_auto_play = setInterval(book_auto,book_speed); }

	$(".bookbtn li").click(function(){
		var idx = $(this).index() + 1;
		var now_idx = $(".bookbtn li a.on").parent("li").index();
		var position = "L";
		if (idx > now_idx) position = "R";

		play_book(position, idx);
	})

	function book_auto(){
		play_book('R', "");
	}

	function play_book(id, goidx){
		var num = $(".bookbtn li a.on").parent("li").index(); //현재 on인 index 값
		var idx = ""; //다음 불러올 이미지index 값

		if(book_cnt >= 2){ clearInterval(book_auto_play); }

		if (id == "L"){
			idx = num - 1;
			wid = "100%";
			wid2 = "-100%";
		}else{
			idx = num + 1;
			wid = "-100%";
			wid2 = "100%";
		}

		if (idx >= book_cnt) idx = 0;
		if (idx < 0) idx = book_cnt - 1;
		if (goidx) idx = goidx - 1;

		if ($(".book li").is(":animated") == false){
			$(".book li").css({"left" : wid2, "z-index" : "1"});
			$(".book li:eq("+idx+")").css("z-index","2");

			$(".book li:eq("+num+")").css("left","0");
			$(".book li:eq("+num+")").stop(true, true).animate({ left : wid }, 900, "easeInOutExpo");
			$(".book li:eq("+idx+")").stop(true, true).animate({ left : "0" }, 900, "easeInOutExpo");
			$(".book li").removeClass("on");
			$(".book li:eq("+idx+")").addClass("on");

			if(book_cnt >= 2){ book_auto_play = setInterval(book_auto,book_speed); }

			book_btn_change(idx)
		}
	}

	function book_btn_change(idx){
		$(".bookbtn li a").removeClass("on");
		$(".bookbtn li a img").attr("src", "/img/main/bookbtn.png");
		$(".bookbtn li:eq("+idx+") a").addClass("on");
		$(".bookbtn li:eq("+idx+") a img").attr("src", "/img/main/bookbtn_on.png");
	}
})
