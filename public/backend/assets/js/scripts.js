$(document).ready(function(){

    // AJAX SETUP
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // TOLLTIP
    $('[data-toggle="tooltip"]').tooltip();

    // MASK
    var cellMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        cellOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(cellMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.mask-cell').mask(cellMaskBehavior, cellOptions);
    $('.mask-phone').mask('(00) 0000-0000');
    $(".mask-date").mask('00/00/0000');
    $(".mask-datetime").mask('00/00/0000 00:00');
    $(".mask-month").mask('00/0000', {reverse: true});
    $(".mask-doc").mask('000.000.000-00', {reverse: true});
    $(".mask-cnpj").mask('00.000.000/0000-00', {reverse: true});
    $(".mask-zipcode").mask('00000-000', {reverse: true});
    $(".mask-money").mask('R$ 000.000.000.000.000,00', {reverse: true, placeholder: "R$ 0,00"});

    // SEARCH ZIPCODE
    $('.zip_code_search').blur(function () {

        function emptyForm() {
            $(".street").val("");
            $(".neighborhood").val("");
            $(".city").val("");
            $(".state").val("");
        }

        var zip_code = $(this).val().replace(/\D/g, '');
        var validate_zip_code = /^[0-9]{8}$/;

        if (zip_code != "" && validate_zip_code.test(zip_code)) {

            $(".street").val("");
            $(".neighborhood").val("");
            $(".city").val("");
            $(".state").val("");

            $.getJSON("https://viacep.com.br/ws/" + zip_code + "/json/?callback=?", function (data) {

                if (!("erro" in data)) {
                    $(".street").val(data.logradouro);
                    $(".neighborhood").val(data.bairro);
                    $(".city").val(data.localidade);
                    $(".state").val(data.uf);
                } else {
                    emptyForm();
                    alert("CEP não encontrado.");
                }
            });
        } else {
            emptyForm();
            alert("Formato de CEP inválido.");
        }
    });

    // DATATABLES
    if ($("#dataTable").length) {
        $('#dataTable').DataTable({
            responsive: true,
            "pageLength": 10,
            "pagingType": "full_numbers",
            // dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                // {extend: 'copy'},
                // {extend: 'csv'},
                // {extend: 'excel', title: 'ExampleFile'},
                // {extend: 'pdf', title: 'Academias'},

                {
                    extend: 'print',
                    customize: function (win) {
                        // $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ],
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Total: _MAX_ registro(s) | Página _PAGE_ de _PAGES_",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ registros por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "pagingType": "full_numbers",
                "paginate": {
                    "first": "<i class='fa fa-angle-double-left'></i>",
                    "last": "<i class='fa fa-angle-double-right'></i>",
                    "next": "<i class='fa fa-angle-right'></i>",
                    "previous": "<i class='fa fa-angle-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    }
});



// JQUERY FILER
var filer_default_opts = {
    changeInput2: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn btn-custom blue-light">Browse Files</a></div></div>',
    templates: {
        box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
        item: '<li class="jFiler-item" style="width:50%">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-thumb-overlay">\
    										<div class="jFiler-item-info">\
    											<div style="display:table-cell;vertical-align: middle;">\
    												<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
    												<span class="jFiler-item-others">{{fi-size2}}</span>\
    											</div>\
    										</div>\
    									</div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li>{{fi-progressBar}}</li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
        itemAppend: '<li class="jFiler-item" style="width:50%">\
                                <div class="jFiler-item-container">\
                                    <div class="jFiler-item-inner">\
                                        <div class="jFiler-item-thumb">\
                                            <div class="jFiler-item-status"></div>\
                                            <div class="jFiler-item-thumb-overlay">\
        										<div class="jFiler-item-info">\
        											<div style="display:table-cell;vertical-align: middle;">\
        												<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
        												<span class="jFiler-item-others">{{fi-size2}}</span>\
        											</div>\
        										</div>\
        									</div>\
                                            {{fi-image}}\
                                        </div>\
                                        <div class="jFiler-item-assets jFiler-row">\
                                            <ul class="list-inline pull-left">\
                                                <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                            </ul>\
                                            <ul class="list-inline pull-right">\
                                                <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                            </ul>\
                                        </div>\
                                    </div>\
                                </div>\
                            </li>',
        progressBar: '<div class="bar"></div>',
        itemAppendToEnd: false,
        removeConfirmation: true,
        _selectors: {
            list: '.jFiler-items-list',
            item: '.jFiler-item',
            progressBar: '.bar',
            remove: '.jFiler-item-trash-action'
        }
    },
};
