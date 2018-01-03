$(document).ready(function(){

    var base_url = $("#base_url").val();

	$("#codigo").focus();

    $("#fornecedor").on('click', function(){

        var tipoFornecedor;

        $("#fornecedorPf").is(':checked') ? tipoFornecedor = 1 : tipoFornecedor = 0;

        $.ajax({

            url: base_url + 'cadastro/produto/Produto/getFornecedor',
            data: tipoFornecedor,
            datatype: 'json',
            type: 'POST',
            success: function(data)
            {

                var data = JSON.parse(data);

                var html = '';

                if(tipoFornecedor == 1)
                {


                    for(var indice = 0; indice < data.length; indice++)
                    {

                        console.log(data);

                        html += '<option value="'+data[indice].idFornecedor+'">'+data[indice].nomeFornecedor+'</option>';

                    }

                }
                else
                {

                    for(var indice = 0; indice < data.length; indice++)
                    {

                        html += '<option value="'+data[indice].idFornecedor+'">'+data[indice].nomeFantasia+'</option>';

                    }

                }

               $("#option").html(html);

            },
            error: function(data)
            {

                alert('erro');

            }

        })

    });

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