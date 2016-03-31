$(document).ready(function() {

	$('#nav').affix({
		offset: {
			top: $('header').height()
		}
	});	

	$('#sidebar').affix({
		offset: {
			top: 200
		}
	});	

	// var stepContainerSelectPackages 	= $('#step_one');
	// var stepContainerSelectProducts 	= $('#step_two');
	// var selectPackages 				= $('.selectPackages');

	// stepContainerSelectProducts.hide();

	// selectPackages.css('cursor', 'pointer');
	// selectPackages.bind('click', function(event) {
	// 	event.preventDefault();
	// 	stepContainerSelectPackages.hide();
	// 	stepContainerSelectProducts.show();
	//  	$('#circle-one a').removeClass('btn-primary').addClass('btn-default');
	//  	$('#circle-one a').attr('disabled', true);
	//  	$('#circle-two a').addClass('btn-primary').removeClass('btn-default');
	//  	$('#circle-two a').attr('disabled', false);
	// 	console.log(event);
	// });

});

