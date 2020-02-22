(function($){
	$.fn.loadingBar = function(){
		var that = this,
			container,
		methods = {
			construct: function(){
				var img = '<i class="fa fa-cog fa-spin fa-5x"></i>';
				that.find('.loading-bar').remove();
				container = $('<div class="loading-bar" style=position:fixed; "></div>');
				that.append(container);
				container.append(img);
				_styling()
			}
		}

		methods.construct();
		return this;

		function _styling(){
			var w = container.width(),
					h = container.height(),
					ml = ($(window).width() - w)/2,
					mt = ($(window).height() - h)/2,
					lbar = that.find('div.loading-bar');
				lbar
					.css('width', w+'px')
					.css('height', h+'px')
					.css('left', ml+'px')
					.css('top', mt+'px')
					.css('z-index', 10000200)
					.append('<p class="font-weight-bold text-center">'+Processing+'</p>');
		}
	}
})(jQuery);