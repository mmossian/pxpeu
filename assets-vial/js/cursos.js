(function($) {
	'use strict';
	$.fn.Cursos = function(method) {
		var that = this,

			methods = {
				getByCentro: function(){
					var form = that.find('#frm-tbl-cursos');
					form.find('#btn-show-tbl-cursos').on('click', function(){
							form.request({
								url: BaseUrl+'index.php/cursosbycentro',
								dataType: 'json',
								showLoadingBar: true
							}).then(
								function(response){
									var alert = that.find('#message-no-results'),
										tbl = that.find('#tbl-cursos');
									form.find('input[name="'+response.csrf.name+'"]').val(response.csrf.hash);
									if(response.data.length > 0){
										alert.addClass('d-none');
										tbl.removeClass('d-none');
										_setTableRows(tbl, response);
										var rows = tbl.find('tbody tr');
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

										tbl.find('[data-toggle="tooltip"]').tooltip()
									}
									else{
										alert.removeClass('d-none');
										tbl.addClass('d-none')
									}
								}
							)
					})
				}
			}
		methods[method].apply(this);
		return this;

		function _setTableRows(tbl, data){
			var row = '',
				body = tbl.find('tbody');
			body.empty();
			$.each(data.data, function(k, v){
				row += '<tr class="row-curso-'+k+'">';
					row += '<td data-title="Fecha">'
						row += '<p>'+_formatDate(v.fecha_inicio)+'</p>';
						if(v.dia2 != undefined){
							row += '<p>'+_formatDate(v.dia2)+'</p>';
						}
						if(v.dia3 != undefined){
							row += '<p>'+_formatDate(v.dia3)+'</p>';
						}
						if(v.dia4 != undefined){
							row += '<p>'+_formatDate(v.dia4)+'</p>';
						}
						if(v.dia5 != undefined){
							row += '<p>'+_formatDate(v.dia5)+'</p>';
						}
						if(v.dia6 != undefined){
							row += '<p>'+_formatDate(v.dia6)+'</p>';
						}
					row += '</td>';
					row += '<td data-title="Horario" nowrap>';
						row += '<p>'+v.fecha_fin+'</p>';
						if(v.horario2 != undefined){
							row += '<p>'+v.horario2+'</p>';
						}
						if(v.horario3 != undefined){
							row += '<p>'+v.horario3+'</p>';
						}
						if(v.horario4 != undefined){
							row += '<p>'+v.horario4+'</p>';
						}
						if(v.horario5 != undefined){
							row += '<p>'+v.horario5+'</p>';
						}
						if(v.horario6 != undefined){
							row += '<p>'+v.horario6+'</p>';
						}
					row += '</td>';
					row += '<td data-title="Tipo">'+v.curso+'</td>';
					row += '<td data-title="Idioma">'+v.idioma+'</td>';
					row += '<td data-title="Centro">'+v.nombre+'</td>';
					row += '<td data-title="Dirección">'+v.direccion_simple+'</td>';
					row += '<td data-title="Precio (sin IVA)">'+v.precio+' €</td>';
				row += '</tr>';

				row += '<tr class="row-curso-'+k+'">';
					row += '<td class="buttons-table text-right border border-top-0 border-right-0 border-left-0 border-secondary" colspan="7">';
						row += '<div class="btn btn-group">';
                			row += '<a href="'+BaseUrl+'index.php/fichaCentro/index/'+v.id_centro+'" class="btn btn-sm btn-primary g-color-white g-color-white--hover g-color-primary--hover g-font-size-13">'+data.buttons.button_ficha_centro+'</a>';
                			row += '<a href="'+BaseUrl+'index.php/preinscripcion/index/'+v.id_centro+'/'+v.id_calendario+'" class="btn btn-sm  g-bg-bluehight g-color-white g-color-white--hover g-color-primary--hover g-font-size-13">'+data.buttons.button_preinscripcion+'</a>';
                		row += '</div>';
					row += '</td>';
				row += '</tr>'
			})
			body.append(row)
		}

		function _formatDate(date){
			var d = date.split('-'),
				d = new Date(parseInt(d[0]), parseInt(d[1])-1, parseInt(d[2]));
			return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear()
		}
	}
})(jQuery);