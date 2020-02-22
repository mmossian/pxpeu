(function($) {
	'use strict';
	$.fn.Interface = function(method) {
		var that = this,
		methods = {
			construct: function(){
				var inlineMessage = that.find('div.inline-message');
				$.HSCore.components.HSHeader.init($('#js-header'));
				//$.HSCore.components.HSSelect.init('.js-custom-select');
				$.HSCore.helpers.HSHamburgers.init('.hamburger');
				// initialization of HSDropdown component
				$.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
					afterOpen: function () {
						$(this).find('input[type="search"]').focus();
					}
				});
				// initialization of header's height equal offset
				$.HSCore.helpers.HSHeightCalc.init();
				// initialization of go to
				$.HSCore.components.HSGoTo.init('.js-go-to');

				if(inlineMessage.length > 0){
					$(window).on('click', function(){
						inlineMessage.addClass('d-none')
					})
				}
			},
			cursos: function(){
				that.Locations('setLocalidades')
				that.Cursos('getByCentro')
			},
			ficha: function(){
				that.Centros({
					centro: $.parseJSON(that.find('#data-center').attr('data-centro'))
				}, 'showMap')
			},
			centros: function(){
				that.Centros({}, 'init');
				that.Centros({}, 'show')
			}
		}
		methods.construct();
		if(method != undefined){
			methods[method].apply(this);
		}
		return this;
	}
})(jQuery);