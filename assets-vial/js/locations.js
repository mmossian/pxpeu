(function($) {
	'use strict';
	$.fn.Locations = function(method) {
		var that = this,

			methods = {
				setLocalidades: function(){
					var provincias = that.find('select[name=id_provincia]'),
						localidades = that.find('select[name=id_localidad]');

					provincias.val(-1);
					localidades.val(-1);
					provincias.on('change', function(){
						var self = $(this),
							val = self.val();

						localidades.find('option').not('.todos').remove();
						if(val != -1){
							$.fn.request({
								url: BaseUrl+'index.php/getlocalidades',
								type: 'GET',
								data: {id_provincia: val},
								dataType: 'json',
								showLoadingBar: true
							}).then(
								function(response){
									$.each(response, function(k, v){
										//console.log(v)
										var selected = k == -1 ? 'selected="selected"' : '';
										localidades.append('<option value="'+v.id_localidad+'" '+selected+'>'+v.localidad+'</option>')
									})
								}
							)
						}
					})
				}
			}
		methods[method].apply(this);
		return this;
	}
})(jQuery);