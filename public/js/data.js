$(document).ready(function() {
    sumCols();
    var table = $('.gt-table').DataTable({
        "paging": true,
        "info": true,
        "language":{
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_, de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0, de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "",
            "searchPlaceholder": "Busca Geral",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });

    $('#pdf-download').val($('thead.total').html() + $('tbody').html());

    $('#dtable_filter input').addClass('form-control');

    table.columns().every( function () {
        var that = this;

        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                .search( this.value )
                .draw();
            }
            sumCols();
            $('#pdf-download').val($('thead.total').html() + $('tbody').html());
        });

        $( 'select', this.header() ).on( 'change', function () {
            if ( that.search() !== this.value ) {
                that
                .search( this.value )
                .draw();
            }
            $('#pdf-download').val($('thead.total').html() + $('tbody').html());
        });
    });
});

function sumCols() {
    var totals=[0,0,0];
    var $dataRows=$("tbody tr:not('.totalColumn, .titlerow')");

    $dataRows.each(function() {
        $(this).find('td').each(function(i){

            if ($.isNumeric(parseInt( $(this).html()))) {
                var int = parseInt($(this).text());
                if (totals[i] == undefined) totals[i] = 0;
                if (int != undefined && totals[i] != undefined) totals[i] += int;
            }
        });
    });
    $("td.totalCol").each(function(i){
        console.log(i +" -> "+totals[i])
        if(i > 2) $(this).html("Total: "+totals[i]);
    });
}
