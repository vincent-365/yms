$(function(){
	var winsize = $(window).width()
	if (winsize > 768){
		$(".navi #gnb").mouseenter(function(){
			$("#full_menu").stop(true,true).slideDown(250);
		})
		$("#navi_wrap").mouseleave(function(){
			$("#full_menu").stop(true,true).slideUp(250);
		})
	}
})

/* 모바일 풀메뉴 */
$(document).ready(function() {

	function bodyClick(){
		if ($(window).width() < 768){
		$("#nav").slideUp(150, "easeOutExpo");
		}
		$("body").unbind("click");
	}

	$(".fullmenu_btn").click(function(){
		$("body").unbind("click");
		if ($("#gnb").is(':hidden')){
			$("#gnb").slideDown(150, "easeOutExpo");
		}else{
			$("#gnb").slideUp(150, "easeOutExpo");
		}
		$("body").click( bodyClick );
		return false;
	})
})

/*토탈서치*/
$(function(){
	if($('#all_search').val()!=""){
		$(".all_search_wrap").css("display","block")
	}
	$(".btn_search").click(function(){
		if($('#all_search').val()==""){
			$(".all_search_wrap").animate({
				width:'toggle'
			});
			document.tsform.search.focus();
		}else{
			document.tsform.submit();
		}
	})
})

$(function(){
	$(window).scroll(function(){
		var win_scTop = $(this).scrollTop();
		if(win_scTop > 280){
			$("#quickmenu").stop().animate({ top : win_scTop + "px" },800,"easeOutExpo");
		}else{
			$("#quickmenu").stop().animate({ top : "280px" },800,"easeOutExpo");
		}
	})
})
