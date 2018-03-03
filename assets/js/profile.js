$(".teamid-btn").click(function(){
    $("#team-cont").slideToggle();
    $("#team1-mem-cont").css("display", "none");
	$("#team2-mem-cont").css("display", "none");
	$("#team3-mem-cont").css("display", "none");
});

$("#team1").hover(function(){
	$("#team1-mem-cont").css("display", "inline-block");
	$("#team2-mem-cont").css("display", "none");
	$("#team3-mem-cont").css("display", "none");
});	

$("#team2").hover(function(){
	$("#team1-mem-cont").css("display", "none");
	$("#team2-mem-cont").css("display", "inline-block");
	$("#team3-mem-cont").css("display", "none");
});	

$("#team3").hover(function(){
	$("#team1-mem-cont").css("display", "none");
	$("#team2-mem-cont").css("display", "none");
	$("#team3-mem-cont").css("display", "inline-block");
});	