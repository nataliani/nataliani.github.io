$(document).ready(function(){
	$(".blog").click(function(){
		var info =$(this).attr("href")+"#blog";
		$("#blog").hide("fast", loadContent);
		$("#loader").fadeIn("normal");

		function loadContent(){
			$("#blog").load(info, "", function(){
				$("#blog").show("normal", hedeLoader());
			})
		}
		function hedeLoader(){
			$("#loader").fadeOut("normal")
		}
		return false;
	})
})