$(document).ready(function(){


	

	console.log("ready")

	var menuBars = $("#menuBars");
	//console.log(menuBars);
	//console.log($("#menuBars"));


//window resizes
//if window is less than 767
	//navigationContent display none




//on menuBars click
	//nagivationContent add class active



			$(".menuNavigationContent").css("display", "none");
	$(window).resize(function() {
		if ($(window).width() < 767) {
			console.log('Less than 767');

			
			
		}
		else {
			console.log('More than 767');
			$(".menuNavigationContent").css("display", "block");
		}
	});


	$("#menuBars").click(function(){
		console.log("clicking")
		// $("#navigationTitle").css("background-color", "red");
		var children = $(".navigationContent").children().css("background-color", "red")
		
	});


});