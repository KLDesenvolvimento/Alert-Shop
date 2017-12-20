$(document).ready(function(){

	$("#codigo").focus();

	// $("#fornecedor").on('click', function(){

 //        var fornecedor = $("#fornecedorPf").val();
 //        var url = $("#url").val();

 //        alert($("#fornecedorPf").val());

	// 	$.ajax({

 //        url: url,
 //        data: fornecedor,
 //        datatype: 'json',
 //        type: 'POST',
 //        success: function (data) {

 //            alert(data);
 //        },
 //        error: function (error) {

 //            alert("erro");

 //        }
 //    })

	// });

	$('#prcCompra').mask('0.000.000,00', {placeholder: "0,00",reverse: true});
	$('#prcVenda').mask('0.000.000,00', {placeholder: "0,00",reverse: true});

    $("#salvar").on('click', function(){

        var codigo = $("#codigo").val();
        var descricao = $("#descricao").val();
        var prcCompra = $("#prcCompra").val();
        var prcVenda = $("#prcVenda").val();

        if(codigo == "")
        {

            var msg = "Campo código não pode ser vazio.";

            $("#alerta").modal();
            $("#mensagem").html(msg);

            $("#fecharModal").on('click', function(){

                setTimeout(function(){

                    $("#codigo").focus();

                }, 100);

            });

            return false;

        }

        if(descricao == "")
        {

            var msg = "Campo descrição não pode ser vazio.";

            $("#alerta").modal();
            $("#mensagem").html(msg);

            $("#fecharModal").on('click', function(){

                setTimeout(function(){

                    $("#descricao").focus();

                }, 100);

            });

            return false;

        }

        if(prcCompra == "" || prcCompra == 0)
        {

            var msg = "Preço de compra não pode ser vazio.";

            $("#alerta").modal();
            $("#mensagem").html(msg);

            $("#fecharModal").on('click', function(){

                setTimeout(function(){

                    $("#prcCompra").focus();

                }, 100);

            });

            return false;

        }

        if(prcVenda == "" || prcVenda == 0)
        {

            var msg = "Preço de venda não pode ser vazio.";

            $("#alerta").modal();
            $("#mensagem").html(msg);

            $("#fecharModal").on('click', function(){

                setTimeout(function(){

                    $("#prcVenda").focus();

                }, 100);

            });

            return false;

        }

        if(codigo != "" && descricao != "" && prcVenda != "" && prcCompra != "")
        {

            $("#inserirProduto").submit();

        }

    });

});