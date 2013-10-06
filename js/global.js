/**************************
*
*	EXT - for the quotes
*
**************************/
(function($){
	$.fn.extend({ 
        //plugin name - rotaterator
        rotaterator: function(options) {

        	var defaults = {
        		fadeSpeed: 600,
        		pauseSpeed: 100,
        		child:null
        	};

        	var options = $.extend(defaults, options);

        	return this.each(function() {
        		var o =options;
        		var obj = $(this);                
        		var items = $(obj.children(), obj);
        		items.each(function() {$(this).hide();})
        		if(!o.child){var next = $(obj).children(':first');
        	}else{var next = o.child;
        	}
        	$(next).fadeIn(o.fadeSpeed, function() {
        		$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
        			var next = $(this).next();
        			if (next.length == 0){
        				next = $(obj).children(':first');
        			}
        			$(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
        		})
        	});
        });
        }
    });
})(jQuery);

$(function(){

   	/**************************
	*
	*	for the booking forms
	*
	**************************/
	$('.room_selector .pull-right').bind('click', function() {
		
		var no_slides = $('.room_selector').length;
		var parent = $(this).parent().parent();
		var current = $('.room_selector').index(parent);
		var next = 0;
		if(current < no_slides-1){
			next = current + 1;
		}
		$('.room_selector').hide();
		$('.room_selector:eq('+next+')').show();
		update_total_price();
		return false;
	});

	$('.room_selector .pull-left').bind('click', function() {
		
		var no_slides = $('.room_selector').length;
		var parent = $(this).parent().parent();
		var current = $('.room_selector').index(parent);
		var prev = no_slides-1;
		if(current > 0){
			prev = current - 1;
		}
		$('.room_selector').hide();
		$('.room_selector:eq('+prev+')').show();
		update_total_price();
		return false;
	});

	$('.home .datepicker_from').datepicker({                
		dateFormat: 'dd/mm/yy',
		showOtherMonths: true,
		numberOfMonths: 1,
		altField: ".check-in-date",
		altFormat: "d M, '3:00 PM'",
		minDate: 0,
		onSelect: function(date) {
			update_total_price();
		}
	});	
	$('.home .datepicker_to').datepicker({                
		dateFormat: 'dd/mm/yy',
		showOtherMonths: true,
		numberOfMonths: 1,
		altField: ".check-out-date",
		altFormat: "d M, '12:00 PM'",
		minDate: 1,
		defaultDate: "+1w",
		onSelect: function(date) {
			update_total_price();
		}
	});


	$('.book-start .datepicker_from').datepicker({   
		changeMonth: true,
		numberOfMonths: 3,
		minDate: 0,
		onClose: function( selectedDate ) {
			$('.book-start .datepicker_from').datepicker( "option", "minDate", selectedDate );
		},
		onSelect: function(date) {
			update_total_price();
		}
	});
	$('.book-start .datepicker_to').datepicker({       
		defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 3,
		minDate: 1,
		onClose: function( selectedDate ) {
			$('.book-start .datepicker_to').datepicker( "option", "maxDate", selectedDate );
		},
		onSelect: function(date) {
			update_total_price();
		}
	});

	$('.global-datepicker-from').datepicker({   
		minDate: 0,
		onClose: function( selectedDate ) {
			$('.global-datepicker-from').datepicker( "option", "minDate", selectedDate );
		}
	});
	$('#global-datepicker-from').click(function(){
		$('.global-datepicker-from').datepicker('show');
		return false;
	});
	$('.global-datepicker-to').datepicker({   
		defaultDate: "+1w",
		minDate: 1,
		onClose: function( selectedDate ) {
			$('.global-datepicker-to').datepicker( "option", "maxDate", selectedDate );
		}
	});
	$('#global-datepicker-to').click(function(){
		$('.global-datepicker-to').datepicker('show');
		return false;
	});
	var firstDay = new Date();
	var nextWeek = new Date(firstDay.getTime() + 7 * 24 * 60 * 60 * 1000);
	$(".global-datepicker-from").datepicker('setDate', firstDay);
	$(".global-datepicker-to").datepicker('setDate', nextWeek);
	$('.select_rooms').bind('change', function(event){
		update_total_price();
	});

	if($('.booking_summary').length > 0) {
		$('html, body').animate({scrollTop: 20}, "fast");
	}

	if($('.book-pay').length > 0) {
		update_extras_price();
		$('[type=checkbox]').bind('click', function() {
			update_extras_price();
		});
	}

	/**************************
	*
	*	for the quotes
	*
	**************************/
	$('#quotes').rotaterator({fadeSpeed:1000, pauseSpeed:3000});
	$('.btn-info').bind('click', function() {
		$(this).toggleClass('active');
		return false;
	});
	
	/**************************
	*
	*	for the gallery
	*
	**************************/
	$('#source').quicksand( $('#destination li') );	

	// get the first collection
	var $gallery = $('#gallery');

	// clone gallery to get a second collection
	var $data = $gallery.clone();

	// attempt to call Quicksand on every form change
	$('.gallery-pills a').bind('click', function() {
		var filterType = $(this).attr('href').substring(1);
		if (filterType == 'all') {
			var $filteredData = $data.find('li');
		} else {
			var $filteredData = $data.find('li[data-type=' + filterType + ']');
		}


		// finally, call quicksand
		$gallery.quicksand($filteredData, {
			duration: 800,
			easing: 'swing'
		});

	});


	initialize_map();


});

/**************************
*
*	start slider
*
**************************/
jQuery(window).load(function(){
	jQuery("#nivoslider-125").nivoSlider({
		effect:"random",
		slices:15,
		boxCols:8,
		boxRows:4,
		animSpeed:500*3,
		pauseTime:3000,
		startSlide:0,
		directionNav:true,
		controlNav:true,
		controlNavThumbs:false,
		pauseOnHover:true,
		manualAdvance:false
	});
	$('.slider-wrapper').css('min-height', 'auto');
	$('.nivoSlider').css('min-height', 'auto');
});

// DOMContentLoaded
$(function() {



	/*if($('.home').length > 0) {
		var position_top = $('.room_selector').position().top+50;
		var position_left = $('.book-now').position().left;
		$('#promotion_box').hide();
		$('#promotion_box').css({'left' : position_left+250, 'top' : position_top});


		/*$(document).mousemove(function(e){ 
		    if(mouseLastYPos){ 
		    	
		        if (mouseLastYPos > $('.room_selector').position().top){
		           $('#promotion_box').show();		    
		        } else {
		        	$('#promotion_box').hide();		    
		        }
		    }
		    mouseLastYPos = e.pageY;
		});*/
	//}
/*
	$(".home").hover(
		function () {
			var position_left = $('.book-now').position().left;
			$('#promotion_box').animate({
				left: position_left+250
			}, 1000, function() {
				// Animation complete.
			});
		},
		function () {
			$('#promotion_box').css({'left' : $(window).width()+$('#promotion_box').width()});
		}
		);*/



});

/**************************
*
*	begin functions
*
**************************/
function update_extras_price() {
	var base_price = 1280;
	var extras = $('input:checked').length;
	var extras_price = (extras*15);
	var total_price = base_price + extras_price;
	$('#extras_price').html(extras_price.toFixed(2) + " GBP");
	$('#total_price').html(total_price.toFixed(2) + " GBP");
}

function update_total_price() {
	if($('.room_selector').length == 0)
		return false;
	var room = $('.room_selector:visible');
	//first we update the select boxes
	var max_adults = parseInt(room.data('adults'));
	var max_kids = parseInt(room.data('kids'));
	var adults_options = [];
	var kids_options = [0];
	for(var i = 1; i <= max_adults; i++){
		adults_options.push(i);
	}	
	for(var i = 1; i <= max_kids; i++){
		kids_options.push(i);
	}

	var $subType = $(".select_adults");
	$subType.empty();
	$.each(adults_options, function () {
		$subType.append($('<option></option>').attr("value", this).text(this));
	});

	var $subType = $(".select_kids");
	$subType.empty();
	$.each(kids_options, function () {
		$subType.append($('<option></option>').attr("value", this).text(this));
	});

	var price = parseInt(room.data('price'));
	var total_price = price;

	var days = returnNumberOfDaysBetweenTwoDates($('.datepicker_from').datepicker( "getDate" ), $('.datepicker_to').datepicker( "getDate" ));
	total_price = total_price * days * parseInt($('.select_rooms').val());

	$('#total_price').html(total_price.toFixed(2) + " GBP");
	$('#total_price').css('letterSpacing', '0px');
	if(total_price < 100) {
		$('#total_price').css('letterSpacing', '2px');
	}
	if(total_price >= 1000) {
		$('#total_price').css('letterSpacing', '-2px');
	}
	if(total_price >= 10000) {
		$('#total_price').css('letterSpacing', '-4px');
	}
	
}
function returnNumberOfDaysBetweenTwoDates(date1, date2) {
	var minutes = 1000*60;
	var hours = minutes*60;
	var days = hours*24;

	var diff = Math.abs(date1.getTime() - date2.getTime());

	return Math.round(diff / days);
}
var dates = {'2012/11/22':'some description' , '2012/11/30':'some other description'}; 
var tips  = ['some description','some other description']; 
function highlightDays(date) {
	var search = date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + (date.getDate());
	if (dates[search]) {
		return [true, 'highlight', dates[search] || ''];
	}
	return [false, '', ''];
} 

/**************************
*
*	Google Maps API
*
**************************/
function initialize_map() {
	if($('#map_canvas').length == 0)
		return false;

	var latlng = new google.maps.LatLng(4.171308062373071, 73.50106716156006);
	var settings = {
		zoom: 16,
		center: latlng,
		scrollwheel: false,
		navigationControl: false,
		scaleControl: false,
		streetViewControl: false,
		draggable: true, 
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};


	var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
	var point = new google.maps.LatLng(4.171308062373071, 73.50106716156006);


	var image = new google.maps.MarkerImage(
		'css/images/icon_marker.png',
		new google.maps.Size(42,62),
		new google.maps.Point(0,0),
		new google.maps.Point(21,62)
		);


	var shape = {
		coord: [27,0,29,1,31,2,33,3,34,4,35,5,36,6,37,7,38,8,38,9,39,10,39,11,40,12,40,13,40,14,41,15,41,16,41,17,41,18,41,19,41,20,41,21,41,22,41,23,41,24,41,25,41,26,40,27,40,28,40,29,40,30,39,31,39,32,39,33,38,34,38,35,37,36,37,37,37,38,36,39,36,40,35,41,35,42,34,43,34,44,33,45,33,46,32,47,31,48,31,49,30,50,30,51,29,52,28,53,28,54,27,55,26,56,26,57,25,58,24,59,23,60,22,61,20,61,18,60,17,59,17,58,16,57,15,56,14,55,14,54,13,53,12,52,12,51,11,50,11,49,10,48,9,47,9,46,8,45,8,44,7,43,7,42,6,41,6,40,5,39,5,38,4,37,4,36,4,35,3,34,3,33,2,32,2,31,2,30,2,29,1,28,1,27,1,26,1,25,1,24,0,23,0,22,0,21,0,20,0,19,0,18,0,17,1,16,1,15,1,14,1,13,2,12,2,11,3,10,3,9,4,8,5,7,6,6,7,5,8,4,9,3,10,2,12,1,15,0,27,0],
		type: 'poly'
	};

	var marker = new google.maps.Marker({
		draggable: true,
		raiseOnDrag: false,
		icon: image,
		shape: shape,
		map: map,
		position: point
	});


	var red_road_styles = [
	{
		"featureType": "water",
		"stylers": [ { "weight": 0.1 }, { "hue": "#ffffff" }, { "gamma": 0.98 }, { "lightness": 10 }, { "saturation": 5 } ]
	}, {
		featureType: "poi",
		elementType: "geometry",
		stylers: [{
			color: "#D5EBA2"
		}]
	}, {
		featureType: "road.highway",
		elementType: "geometry",
		stylers: [{
			color: "#FFCF43"
		}]
	},{
		featureType: "landscape",
		stylers: [{
			color: "#EED7C5"
		}]
	}, {
		featureType: "road.arterial",
		elementType: "labels.text.stroke",
		stylers: [{
			color: "#ffffff"
		}]
	}, {
		featureType: "road.arterial",
		elementType: "geometry.fill",
		stylers: [{
			color: "#FFCF43",
			"weight": 0.1
		}]
	}, {
		featureType: "road.arterial",
		elementType: "labels.text.fill",
		stylers: [{
			color: "#000000"
		}]
	}, {
		featureType: "road.highway",
		elementType: "labels.text.fill",
		stylers: [{
			color: "#000000"
		}]
	}, {
		featureType: "road.highway",
		elementType: "labels.text.stroke",
		stylers: [{
			color: "#ffffff"
		}]
	}];
	var styles = [
	{
		stylers: [
		{ hue: "#00ffe6" },
		{ saturation: -20 }
		]
	},{
		featureType: "road",
		elementType: "geometry",
		stylers: [
		{ lightness: 100 },
		{ visibility: "simplified" }
		]
	},{
		featureType: "road",
		elementType: "labels",
		stylers: [
		{ visibility: "off" }
		]
	},{
		featureType: "poi",
		stylers: [{
			color: "#D5EBA2"
		}]
	}
	];
	map.setOptions({styles: styles});
}