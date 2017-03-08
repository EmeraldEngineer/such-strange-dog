function showAbout(){
	$(".outer-box").hide();
	$(".m-outer-box").hide();
	$(".text-box").show();
	$("#aboutContent").show();
}

function hideAbout() {
	$(".text-box").hide();
	$("#aboutContent").hide();
	$(".outer-box").show();
	$(".m-outer-box").show();

}


function clicktest() {
	alert("that worked");
}