$(document).foundation()

$(document).ready(function(){
	$('.sow-image-grid-wrapper');
});
$('#wpc-catalogue-wrapper .gallery').easyPaginate({
    paginateElement: 'dl',
    elementsPerPage: 10,
    firstButton: false,
    lastButton: false
    //effect: 'slide'
});

$(document).ready(function(){
	$('#wpc-catalogue-wrapper .easyPaginateNav a').on('click', function(){
		/* Setelah navi di klik Tambah lagi fancybox */
		$(".gallery-icon a").fancybox().attr('rel', 'gallery');
	});
});

$('#client_area .gallery').easyPaginate({
    paginateElement: 'dl',
    elementsPerPage: 5,
    firstButton: false,
    lastButton: false
    //effect: 'slide'
});

$(document).ready(function($){
    var $all_oembed_maps = $("#fullwidth iframe[src*='maps']");
        
    $all_oembed_maps.each(function() {
        
        $(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
        
    });
});