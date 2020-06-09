$(document).ready(function() {
	
	// Toggle Pin View
	$('.pin-view').click(function() {
		$('.pin-view').toggleClass(function() {
		  if ($(this).hasClass('pin-view')) {
		    return 'pin-view-clicked';
		  } else {
		    return 'pin-view';
		  }
		});
	});

	// Toggle List View 
	$('.list-view').click(function() {
		$('.list-view').toggleClass(function() {
		  if ($(this).hasClass('list-view')) {
		    return 'list-view-clicked';
		  } else {
		    return 'list-view';
		  }
		});
	});

});