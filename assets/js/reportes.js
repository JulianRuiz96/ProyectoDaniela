$(function(){

	var base_url = 'http://localhost/daniela/';
	
	$( '#exportarDatos' ).css( 'display', 'none' );

	function reportes(event)
	{
		event.preventDefault();
		var table =
		'<table id="exportSolicitudes" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">'
            + '<thead>'
                + '<tr>'
                    + '<th class="text-center">Equipo solicitado</th>'
                    + '<th class="text-center">Hora incial</th>'
                    + '<th class="text-center">Hora final</th>'
                    + '<th class="text-center">Fecha solicitud</th>'
                    + '<th class="text-center">Nombres</th>'
                    + '<th class="text-center">Apellidos</th>'
                    + '<th class="text-center">E-mail</th>'
                    + '<th class="text-center">Rol</th>'
                    + '<th class="text-center">Descripción</th>'
                    + '<th class="text-center">Sede</th>'
                    + '<th class="text-center">Carrera</th>'
                + '</tr>'
            + '</thead>'
        	+ '<tbody></tbody>'
        + '</table>';
		$( '#reportesSolicitud' ).html( table );
		$.getJSON( base_url + 'reportes/getSolicitudes', function( data )
		{
			console.log(data);
			if( data )
			{
				$.each( data, function( i, dato ){
					var newRow = 
					'<tr>' 
						+ '<td class="text-center">' + dato.equiDes + '</td>'
						+ '<td class="text-center">' + dato.horaInicial + '</td>'
						+ '<td class="text-center">' + dato.horaFinal + '</td>'
						+ '<td class="text-center">' + dato.date + '</td>'
						+ '<td class="text-center">' + dato.nombres + '</td>'
						+ '<td class="text-center">' + dato.apellidos + '</td>'
						+ '<td class="text-center">' + dato.email + '</td>'
						+ '<td class="text-center">' + dato.rolDes + '</td>'
						+ '<td class="text-center">' + dato.tuserDes + '</td>'
						+ '<td class="text-center">' + dato.sede + '</td>'
						+ '<td class="text-center">' + dato.carrera + '</td>'
					+ '</tr>';
					$( newRow ).appendTo( '#reportesSolicitud tbody' );
				});
			}

			else
			{
				var newRow = 
				'<tr>'
					+ '<td class="text-center">No se encontraron resultados</td>'
				+ '</tr>';
				$(newRow).appendTo('#reportesSolicitud tbody');
			}
			
		});
		$( '#exportarDatos' ).css( 'display', 'block' );
	}

	function exportExcel(event)
	{
		event.preventDefault();
		$( '#exportSolicitudes' ).tableExport({type:'excel',escape:'false'});
	}
	function exportPDF(event)
	{
		event.preventDefault();
		$( '#exportSolicitudes' ).tableExport({type:'pdf',escape:'false'});
	}
	$( '#reporteUno' ).on( 'click', reportes );
	$( '#exportExcel' ).on( 'click', exportExcel );
	$( '#exportPDF' ).on( 'click', exportPDF );
});