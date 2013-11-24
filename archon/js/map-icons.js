/**
 * Map Icons created by Scott de Jonge
 *
 * @version 1.0 
 * @url http://map-icons.com
 *
 */

var Marker = function(options) {
	google.maps.Marker.apply(this, arguments);
	if (options.label) {
		this.MarkerLabel = new MarkerLabel({
			map: this.map,
			marker: this,
			text: options.label
		});
		this.MarkerLabel.bindTo('position', this, 'position');
	}
};

// Define Marker Shapes
var MAP_PIN = 'M50 0C22.382 0 0 21.966 0 49.054C0 76.151 50 165 50 165s50-88.849 50-115.946C100 21.966 77.605 0 50 0z';
var SQUARE_PIN = 'M 100 0 L 0 0 L 0 100 L 35 100 L 50 120 L 65 100 L 100 100 Z';
var SHEILD = 'M92.799 37.081c0.663-7.855 3.029-15.066 7.2-21.675L84.001 0c-5.054 4.189-10.81 6.509-17.332 6.919 c-5.976 0.52-11.641-0.574-16.971-3.287C44.22 6.258 38.577 7.355 32.696 6.919C26.61 6.396 21.119 4.317 16.201 0.638L0.16 16.036 c3.945 6.704 6.143 13.72 6.574 21.045c0.205 3.373-0.795 8.016-3.038 14.018c-1.175 3.327-2.061 6.213-2.667 8.628 c-0.562 2.393-0.911 4.34-1.027 5.8c-0.082 6.396 1.78 12.169 5.602 17.302c2.986 3.745 7.911 7.886 14.748 12.41 c7.482 3.665 13.272 6.045 17.326 7.06c1.163 0.522 2.301 1.025 3.363 1.505c1.058 0.488 2.192 0.964 3.372 1.483 c2.552 1.471 4.343 3.067 5.285 4.713c1.159-1.782 2.991-3.338 5.423-4.713c1.717-0.722 3.173-1.346 4.341-1.897 c1.167-0.493 2.037-0.865 2.54-1.089c0.866-0.414 2.002-0.888 3.376-1.411c1.386-0.526 3.1-1.167 5.143-1.881 c3.952-1.348 6.831-2.62 8.656-3.77c6.633-4.524 11.48-8.594 14.566-12.235c3.958-5.152 5.879-10.953 5.79-17.475 c-0.232-2.922-1.519-7.593-3.85-13.959C93.462 45.369 92.478 40.555 92.799 37.081z';
var ROUTE = 'M99.986 41.081C99.477 13.45 83.448 2.469 82.791 2.032L80.312 0.34l-2.5 1.689c-4.147 2.817-8.449 4.247-12.782 4.247 c-7.178 0-12.051-3.864-12.257-4.032L49.977 0l-2.776 2.248c-0.203 0.165-5.074 4.028-12.253 4.028 c-4.331 0-8.63-1.429-12.788-4.253l-2.486-1.678L17.17 2.037C15.468 3.207 0.546 14.229 0.005 40.944 C-0.211 43.269 6.208 87.246 49.997 100C97.61 86.088 100.23 43.982 99.986 41.081z';

// Create Custom Marker Object
Marker.prototype = new google.maps.Marker();

// Custom Marker SetMap
Marker.prototype.setMap = function() {
	google.maps.Marker.prototype.setMap.apply(this, arguments);
	(this.MarkerLabel) && this.MarkerLabel.setMap.apply(this.MarkerLabel, arguments);
};
 
// Marker Label Overlay
var MarkerLabel = function(options) {
	var self = this;
	this.setValues(options);
	
	// Create the label container
	this.div = document.createElement('div');
	this.div.className = 'marker-label';
	var span = document.createElement('span');
	span.className = "marker-icon";
	this.div.appendChild(span);
 
	// Trigger the marker click handler if clicking on the label
	google.maps.event.addDomListener(this.div, 'click', function(e){
		(e.stopPropagation) && e.stopPropagation();
		google.maps.event.trigger(self.marker, 'click');
	});
};

// Create MarkerLabel Object
MarkerLabel.prototype = new google.maps.OverlayView;

// Marker Label onAdd
MarkerLabel.prototype.onAdd = function() {
     var pane = this.getPanes().overlayImage.appendChild(this.div);
     var self = this;
     this.listeners = [
          google.maps.event.addListener(this, 'position_changed', function() { self.draw(); }),
          google.maps.event.addListener(this, 'text_changed', function() { self.draw(); }),
          google.maps.event.addListener(this, 'zindex_changed', function() { self.draw(); })
     ];
};
 
// Marker Label onRemove
MarkerLabel.prototype.onRemove = function() {
     this.div.parentNode.removeChild(this.div);
     for (var i = 0, I = this.listeners.length; i < I; ++i) {
          google.maps.event.removeListener(this.listeners[i]);
     }
};
 
// Implement draw
MarkerLabel.prototype.draw = function() {
     var projection = this.getProjection();
     var position = projection.fromLatLngToDivPixel(this.get('position'));
     var div = this.div;
     div.style.left = position.x + 'px';
     div.style.top = position.y + 'px';
     div.style.display = 'block';
     div.style.zIndex = this.get('zIndex'); //ALLOW LABEL TO OVERLAY MARKER
     this.div.innerHTML = this.get('text').toString();
};



//Custom code for implementation

//Map icons 
function initialize() {
	var mapOptions = {
		zoom: 2,
		scrollwheel: false,
		center: new google.maps.LatLng(0, 0),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [
		{stylers: [{ visibility: 'simplified' }]},
		{elementType: 'labels', stylers: [{ visibility: 'off' }]}
		]
	}
	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var marker1 = new Marker({
		map: map,
		zIndex: 9,
		title: 'Gym',
		position:  new google.maps.LatLng(46.274834,-101.250000),
		icon: {
			path: MAP_PIN,
			fillColor: '#0E77E9',
			fillOpacity: 1,
			strokeColor: '',
			strokeWeight: 0,
			scale: 1/4
		},
		label: '987'
	});

	var marker2 = new Marker({
		map: map,
		zIndex: 9,
		title: 'Parking',
		position:  new google.maps.LatLng(16.299051,24.75769),
		icon: {
			path: SQUARE_PIN,
			fillColor: '#0E77E9',
			fillOpacity: 1,
			strokeColor: '',
			strokeWeight: 0,
			scale: 1/4
		},
		label: '100'
	});

	var marker3 = new Marker({
		map: map,
		zIndex: 9,
		title: 'Cafe',
		position:  new google.maps.LatLng(-21.999082, 127.617188),
		icon: {
			path: SHEILD,
			fillColor: '#0E77E9',
			fillOpacity: 1,
			strokeColor: '',
			strokeWeight: 0,
			scale: 1/4
		},
		label: '<i class="icon-cafe"></i>'
	});

	var marker4 = new Marker({
		map: map,
		zIndex: 9,
		title: 'My office',
		position:  new google.maps.LatLng(40.354917, 84.375000),
		icon: {
			path: ROUTE,
			fillColor: '#0E77E9',
			fillOpacity: 1,
			strokeColor: '',
			strokeWeight: 0,
			scale: 1/4
		},
		label: '<i class="icon-store"></i>'
	});
}

google.maps.event.addDomListener(window, 'load', initialize);