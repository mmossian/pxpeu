(function($) {
	'use strict';
	$.fn.Centros = function(options, method) {
		var defaults = {
			idCentro: null,
			centro: {}
		},
		settings = $.extend(true, defaults, options),
		that = this,
		methods = {
			init: function(){
				that.request({
					url: BaseUrl+'index.php/getall',
					type: 'GET',
					dataType: 'json',
					showLoadingBar: true
				}).then(
					function(response){
						var markers = [], infoContent = [];
						$.each(response.centro, function(k, v) {

							markers.push(
								{title: v.nombre, lat: parseFloat(v.latitude), lng: parseFloat(v.longitude)}
							);
							infoContent.push(
								{content: _setContent(v, response.button, true)}
							)
						});
						that.Gmap({
							markers: markers,
							infoContent: infoContent,
							zoom: 9
						}, 'map')
					}
				);
			},
			show: function(){
				var form = that.find('#frm-centros'),
					provincia = that.find('#provincia'),
					localitat = that.find('#localitat'),
					tipoCurso = that.find('#tipus-de-curs');
				that.Locations('setLocalidades');
				/*that.find('#provincia, #localitat').on('change', function(){
					tipoCurso.val(0)
				});*/
				provincia.on('change', function(){
					var val = $(this).val();
					localitat.val(-1);
					tipoCurso.val(-1);
					if(val == -1){
						that.Centros({}, 'init')
					}
					else{
						_sendRequest(form)
					}
				});
				localitat.on('change', function(){
					var val = $(this).val();
					tipoCurso.val(-1);
					_sendRequest(form)
				});
				tipoCurso.on('change', function(e){
					var val = $(this).val();
					e.stopImmediatePropagation();
					_sendRequest(form)
				})
			},
			showMap: function(){
				var tbl = that.find('table.table-cursos'),
					rows = tbl.find('tbody tr');
				if(!$.isEmptyObject(settings.centro)){
					//$(window).on('load', function(){
						that.Gmap({
							latlng: {
								lat: parseFloat(settings.centro.latitude),
								lng: parseFloat(settings.centro.longitude)
							},
							content: _setContent(settings.centro, null, false)
						}, 'init')
					//})
				}
				rows.each(function(k, v){
					var self = $(this),
						cls = self.attr('class'),
						activeRow = self.closest('tbody').find('.'+cls);
					if((k/2) % 2 == 0){
						activeRow.addClass('striped')
					}
					self.on('mouseover', function(){
						rows.removeClass('active-row');
						activeRow.addClass('active-row')
					});
					self.on('mouseout', function(){
						rows.removeClass('active-row');
					})
				})
			}
		}
		methods[method].apply(this);
		return this;

		function _setContent(data, btn, viewficha){
			var content = '';
			content += '<div id="content">';
				content += '<div id="siteNotice"></div>';
				content += '<h2 id="firstHeading" class="g-font-size-20">'+data.nombre+'</h2>';
				content += '<div id="bodyContent">';
					content += '<p class="g-font-size-13">'+data.direccion+'<br>'+data.provincia+'<br>'+data.localidad+'<br></p>';
					if(viewficha == true){
						content += '<p><a class="btn btn-sm g-font-size-12 btn-primary g-color-white g-color-white--hover g-color-primary--hover" href="'+BaseUrl+'index.php/FichaCentro/index/'+data.id_centro+'">'+btn+'</a></p>';
					}
				content += '</div>';
			content += '</div>';
			return content;
		}

		function _sendRequest(form){
			form.request({
				url: BaseUrl+'index.php/centrosbyaddress',
				dataType: 'json',
				showLoadingBar: true
			}).then(
				function(response){
					form.find('input[name="'+response.csrf.name+'"]').val(response.csrf.hash);
					if(response.data.length > 0){
						var markers = [], infoContent = [];
						$.each(response.data, function(k, v) {
							markers.push(
								{title: v.nombre, lat: parseFloat(v.latitude), lng: parseFloat(v.longitude)}
							);
							infoContent.push(
								{content: _setContent(v, response.button, true)}
							)
						});
						that.Gmap({
							markers: markers,
							infoContent: infoContent,
							zoom: 14
						}, 'map')
					}
					else{
						that.Gmap({
							latlng: {
								lat: parseFloat(response.data[0].latitude),
								lng: parseFloat(response.data[0].longitude)
							},
							zoom: 9,
							content: _setContent(response.data[0], true)
						}, 'init')
					}
				}
			)
		}
	}
})(jQuery);