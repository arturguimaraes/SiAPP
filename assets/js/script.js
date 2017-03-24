/*
 * Javascript Implementation
 * Author: Artur Guimarães
 */

$(document).ready(function() {	
	//animated navbar
	$(".menu-item").hover(function () {
		$(this).toggleClass("animated pulse");
	});		
});

 $(function () {
	$('#datetimepicker').datetimepicker({
		locale: 'pt-br'
	});
});

function updateObjects() {
	var objNumber = document.getElementById("obj_number").value;
	hideAllObjects(objNumber);
	for (i = 1; i <= objNumber; i++) {
		$('#objectDiv' + i).removeClass("hidden");
		$('#object' + i).prop("disabled", false);
	}
}

function hideAllObjects(objNumber) {
	for (i = 10; i > objNumber; i--) {
		$('#objectDiv' + i).addClass("hidden");
		$('#object' + i).val("");
		$('#object' + i).prop("disabled", true);
	}
}