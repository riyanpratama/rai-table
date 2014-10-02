$(document).ready(function(){
	$("#checkAll").attr("data-type", "check");
	$("#checkAll").click(function() {
		if ($("#checkAll").attr("data-type") === "check") {
			$(".checkbox").prop("checked", true);
			$("#checkAll").attr("data-type", "uncheck");
			$("#checkAll").text("Uncheck All")
		} else {
			$(".checkbox").prop("checked", false);
			$("#checkAll").attr("data-type", "check");
			$("#checkAll").text("Check All")
		}
	})
});

