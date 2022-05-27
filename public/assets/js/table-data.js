$(function(e) {
    "use strict";

    //______Basic Data Table
    $('#basic-datatable').DataTable({
        language: {
            sProcessing:     "Procesando...",
            sLengthMenu:     "Mostrar _MENU_ registros",
            sZeroRecords:    "No se encontraron resultados",
            sEmptyTable:     "Ningún dato disponible en esta tabla",
            sInfo:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            sInfoEmpty:      "Mostrando registros del 0 al 0 de un total de 0",
            sInfoFiltered:   "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix:    "",
            sSearch:         "Buscar:",
            sUrl:            "",
            sInfoThousands:  ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
            sFirst:    "Primero",
            sLast:     "Último",
            sNext:     "Siguiente",
            sPrevious: "Anterior"
            },
            oAria: {
                sSortAscending:  ": Activar para ordenar la columna de manera ascendente",
                sSortDescending: ": Activar para ordenar la columna de manera descendente"
            }
        }
    });


    //______Basic Data Table
    $('#responsive-datatable').DataTable({
        language: {
            scrollX: "100%",
            sProcessing:     "Procesando...",
            sLengthMenu:     "Mostrar _MENU_ registros",
            sZeroRecords:    "No se encontraron resultados",
            sEmptyTable:     "Ningún dato disponible en esta tabla",
            sInfo:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            sInfoEmpty:      "Mostrando registros del 0 al 0 de un total de 0",
            sInfoFiltered:   "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix:    "",
            sSearch:         "Buscar:",
            sUrl:            "",
            sInfoThousands:  ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
            sFirst:    "Primero",
            sLast:     "Último",
            sNext:     "Siguiente",
            sPrevious: "Anterior"
            },
            oAria: {
                sSortAscending:  ": Activar para ordenar la columna de manera ascendente",
                sSortDescending: ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

 //    //______File-Export Data Table
 //    var table = $('#file-datatable').DataTable({
 //        buttons: ['copy', 'excel', 'pdf', 'colvis'],
 //        language: {
 //            searchPlaceholder: 'Search...',
 //            scrollX: "100%",
 //            sSearch: '',
 //        }
 //    });
 //    table.buttons().container()
 //        .appendTo('#file-datatable_wrapper .col-md-6:eq(0)');

 //    //______Delete Data Table
 //    var table = $('#delete-datatable').DataTable({
 //        language: {
 //            searchPlaceholder: 'Search...',
 //            sSearch: '',
 //        }
 //    });
 //    $('#delete-datatable tbody').on('click', 'tr', function() {
 //        if ($(this).hasClass('selected')) {
 //            $(this).removeClass('selected');
 //        } else {
 //            table.$('tr.selected').removeClass('selected');
 //            $(this).addClass('selected');
 //        }
 //    });
 //    $('#button').on('click', function() {
 //        table.row('.selected').remove().draw(false);
 //    });
 //    $('#example3').DataTable( {
 //        responsive: {
 //            details: {
 //                display: $.fn.dataTable.Responsive.display.modal( {
 //                    header: function ( row ) {
 //                        var data = row.data();
 //                        return 'Details for '+data[0]+' '+data[1];
 //                    }
 //                } ),
 //                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
 //                    tableClass: 'table'
 //                } )
 //            }
 //        }
 //    } );
 //    $('#example2').DataTable({
	// 	responsive: true,
	// 	language: {
	// 		searchPlaceholder: 'Search...',
	// 		sSearch: '',
	// 		lengthMenu: '_MENU_ items/page',
	// 	}
	// });
	

 //    //______Select2 
 //    $('.select2').select2({
 //        minimumResultsForSearch: Infinity
 //    });

});