$(document).ready(function(){

	$("#codigo").focus();

	$("#fornecedor").on('click', function(){

		var url = $("#url").val();

		$.ajax({

        url: url,
        datatype: 'json',
        contentType: 'application/json; charset=utf-8',
        type: 'POST',
        data: JSON.stringify({ _fornecedor: $('#fornecedor').val() }),
        success: function (data) {

            str += '<option value="E">Todos</option>';

            $(data.resultado).each(function () {

                str += '<option value=' + this.Cidade + '>' + this.Cidade + '</option>';
            })

            $('#cbxCidade').html(str);

            str = "";
        },
        error: function (error) {
        }
    })

	});

	$('#prcCompra').mask('0.000.000,00', {placeholder: "0,00",reverse: true});
	$('#prcVenda').mask('0.000.000,00', {placeholder: "0,00",reverse: true});

});