var $j = jQuery.noConflict();

$j(".failed span.close").click(function () {
	$j(".failed").fadeOut("slow");
});

$j(".success span.close").click(function () {
	$j(".success").fadeOut("slow");
});

$j(".info span.close").click(function () {
	$j(".info").fadeOut("slow");
});