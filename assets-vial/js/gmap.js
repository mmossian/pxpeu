(function($){
	'use strict';

	$.fn.Gmap = function(options, method){
		var defaults = {
			latlng: {}, //{lat: -25.344, lng: 131.036}
			markers: [],
			infoContent: [],
			zoom: 10,
			content: null
		},
		settings = $.extend(true, defaults, options),
		that = this,
		map,
		idMap = DomRootEl.find('.map').attr('id'),

		methods = {
			construct: function(){
				google.maps.event.clearInstanceListeners(idMap);
				map = new google.maps.Map(document.getElementById(idMap), {
					mapTypeId: 'roadmap',
					zoom: settings.zoom
				});
			},
			init: function(){
				map.setCenter(settings.latlng);
				var markerOptions = {
					position: settings.latlng,
					animation: google.maps.Animation.DROP,
					map: map
				},
				marker = new google.maps.Marker(markerOptions);
				if(settings.content != null){
					var infowindow = new google.maps.InfoWindow({
						content: settings.content
					});
					marker.addListener('click', function() {
						infowindow.open(map, marker);
					});
				}
			},
			map: function(){
				var infoWindow = new google.maps.InfoWindow(), marker,
					bounds = new google.maps.LatLngBounds();
				for(var i=0; i < settings.markers.length; i++){
					var position = new google.maps.LatLng(settings.markers[i].lat, settings.markers[i].lng);
					bounds.extend(position);
					var marker = new google.maps.Marker({
						position: position,
						map: map,
						title: settings.markers[i].title
					});
					google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
							infoWindow.setContent(settings.infoContent[i].content);
							infoWindow.open(map, marker);
						}
					})(marker, i));

					// Centra el mapa para ajustar todos los marcadores a la pantalla
					map.fitBounds(bounds);
					// Establece el nivel de zoom
					/*var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
						this.setZoom(settings.zoom);
						google.maps.event.removeListener(boundsListener);
					});*/

				}
			}
		}

		methods.construct();
		if(methods[method] != undefined){
			methods[method].apply(this)
		}
		return this;

		/*-----------------------------------------------------------------------
		|	METODOS PRIVADOS                                                    |
		-----------------------------------------------------------------------*/

	}
})(jQuery);