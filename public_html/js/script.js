function showAbout(){
	$(".outer-box").hide();
	$(".m-outer-box").hide();
	$(".text-box").show();
	$("#aboutContent").show();
	$(".content-img-box").show();
	$("#aboutImages").show();
}

function hideContent() {
	$(".text-box").hide();
	$("#aboutContent").hide();
	$("#pricingContent").hide();
	$("#resourcesContent").hide();
	$("#contactContent").hide();
	$(".content-img-box").hide();
	$("#aboutImages").hide();
	$("#pricingImages").hide();
	$("#resourcesImages").hide();
	$("#contactImages").hide();
	$(".outer-box").show();
	$(".m-outer-box").show();


}

function showPricing() {
	$(".outer-box").hide();
	$(".m-outer-box").hide();
	$(".text-box").show();
	$("#pricingContent").show();
	$(".content-img-box").show();
	$("#pricingImages").show();
}

function showResources() {
	$(".outer-box").hide();
	$(".m-outer-box").hide();
	$(".text-box").show();
	$("#resourcesContent").show();
	$(".content-img-box").show();
	$("#resourcesImages").show();
}



function clicktest() {
	alert("that worked");
}