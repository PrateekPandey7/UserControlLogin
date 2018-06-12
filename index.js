$(document).ready(function(){
	$("#login").click(function(){
		if($("#username").val() == ""){
			$(".input").addClass("error");
			$("#username").css({"border" : "2px solid red"});
		}
		if($("#password").val() == ""){
			$(".pass").addClass("error");
			$("#password").css({"border" : "2px solid red"});
		}
		if($("#email").val() == ""){
			$(".email").addClass("error");
			$("#email").css({"border" : "2px solid red"});
		}

	})
	$(".input").click(function(){
			$(".input").removeClass("error");
			$("#username").css({"border" : "2px solid #ddd"});
			$("#password").css({"border" : "2px solid #ddd"});
			$("#email").css({"border" : "2px solid #ddd"});
		})
	$("#signup").click(function(){
		if($("#username").val() == ""){
			$(".input").addClass("error");
			$("#username").css({"border" : "2px solid red"});
		}
		if($("#password").val() == ""){
			$(".pass").addClass("error");
			$("#password").css({"border" : "2px solid red"});
		}
		if($("#email").val() == ""){
			$(".email").addClass("error");
			$("#email").css({"border" : "2px solid red"});
		}
	})
})
