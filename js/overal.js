jQuery("document").ready(function($){
	$(".phone").mask("+7(999)999-9999");

	$("#out").click(function(){
		if($("#login").val()=="markova" && $("#password").val()=="E8861e2c2103"){

			location.href = "../admin/seestat.php";
		}else{
			$("h2").hide("slow");
			$("#enter").prepend("<h2>Неверно введены логин и пароль.</h2>");
			alert($("#login").val());
		}
	});
	
});