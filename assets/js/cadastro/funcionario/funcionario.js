$(document).ready(function(){

	var cpf = $('#cpf');
	var telefone = $("#telefone");
	var cep = $("#cep");
	var email = $("#email");

	$("#cep").on('blur', function(){

		var cep = $("#cep").val

		buscarCep(cep);

		console.log(cep);

		if(!buscarCep(cep))
		{

			alert('CEP inválido');

		}

	});

	// function pegarCep() {
 //                // Limpa valores do formulário de cep.
 //                $("#rua").val("");
 //                $("#bairro").val("");
 //                $("#cidade").val("");
 //                $("#uf").val("");
 //                // $("#ibge").val("");
 //            }
            
 //            //Quando o campo cep perde o foco.
 //            $("#cep").blur(function() {

 //                //Nova variável "cep" somente com dígitos.
 //                var cep = $(this).val().replace(/\D/g, '');

 //                //Verifica se campo cep possui valor informado.
 //                if (cep != "") {

 //                    //Expressão regular para validar o CEP.
 //                    var validacep = /^[0-9]{8}$/;

 //                    //Valida o formato do CEP.
 //                    if(validacep.test(cep)) {

 //                        //Preenche os campos com "..." enquanto consulta webservice.
 //                        $("#rua").val("Carregando...");
 //                        $("#bairro").val("Carregando...");
 //                        $("#cidade").val("Carregando...");
 //                        $("#uf").val("Carregando...");
 //                        // $("#ibge").val("Carregando...");

 //                        //Consulta o webservice viacep.com.br/
 //                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

 //                            if (!("erro" in dados)) {
 //                                //Atualiza os campos com os valores da consulta.
 //                                $("#rua").val(dados.logradouro).attr('disabled');
 //                                $("#bairro").val(dados.bairro).attr('disabled');
 //                                $("#cidade").val(dados.localidade).attr('disabled');
 //                                $("#uf").val(dados.uf).attr('disabled');
 //                                // $("#ibge").val(dados.ibge).attr('readonly', 'readonly');
 //                            } //end if.
 //                            else {
 //                                //CEP pesquisado não foi encontrado.
 //                                // limpa_formulário_cep();
 //                                alert("CEP não encontrado.");
 //                            }
 //                        });
 //                    } //end if.
 //                    else {
 //                        //cep é inválido.
 //                        // limpa_formulário_cep();
 //                        alert("Formato de CEP inválido.");
 //                    }
 //                } //end if.
 //                else {
 //                    //cep sem valor, limpa formulário.
 //                    // limpa_formulário_cep();
 //                }
 //            });

            //fim valida cep

	//inicio valida cpf

	cpf.on('blur', function(){

		var cpf = $("#cpf").val();

		validarCPF(cpf);

		// console.log(validarCPF(cpf));

		if(!validarCPF(cpf))
		{

			alert('CPF inválido.');

		}

	});

	email.on('keypress', function() {

		// var regex = new RegExp("^[a-zA-Z0-9-Zàèìòùáéíóúâêîôûãõ\b]+$");
		var regex = new RegExp("^[a-zA-Z0-9-Z@.-_\b]+$");
		var _this = this;

		// Curta pausa para esperar colar para completar
		setTimeout( function(){
			var texto = $(_this).val();
			if(!regex.test(texto))
			{
				$(_this).val(texto.substring(0, (texto.length-1)))
			}
		}, 100);

	});

	cpf.mask("000.000.000-00", {placeholder:"___.___.___-__"});
	telefone.mask("(00)0000-0000", {placeholder:"(__)____-____"});
	cep.mask("00.000-000", {placeholder:"__.___-___"});

	telefone.on('focus', function(){

	var tipoTelefone = $("#tipoTelefone").val();

		if(tipoTelefone == 'Celular')
		{

			telefone.mask("(00)00000-0000", {placeholder:"(__)_____-____"});
			
		}
		else
		{

			telefone.mask("(00)0000-0000", {placeholder:"(__)____-____"});

		}

	});

	function removeCaractere($dado)
	{

		var dado = String.fromCharCode(e.which);

		alert($dado);

		if("1234567890qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM@.-_".indexOf($dado) > 0)
		{

			return false;

		}

	}

	//fim da função de buscar cep

	//validar email

	email.on('blur',function(){

		// function validacaoEmail() {

			usuario = email.val().substring(0, email.val().indexOf("@"));
			dominio = email.val().substring(email.val().indexOf("@")+ 1, email.val().length);

			if ((usuario.length >=1) &&
			    (dominio.length >=3) && 
			    (usuario.search("@")==-1) && 
			    (dominio.search("@")==-1) &&
			    (usuario.search(" ")==-1) && 
			    (dominio.search(" ")==-1) &&
			    (dominio.search(".")!=-1) &&      
			    (dominio.indexOf(".") >=1)&& 
			    (dominio.lastIndexOf(".") < dominio.length - 1)) {
				document.getElementById("email").innerHTML="E-mail válido";
				// alert("E-mail valido");
			}
			else
			{
				document.getElementById("email").innerHTML="<font color='red'>E-mail inválido </font>";
				alert("E-mail invalido");
				email.val("");
			}
		// }

	});

	//fim do validar email

		$("#salvar").on('click', function(){

			var nome = $("#nome").val();
			var cpf = $("#cpf").val();
			var dataNascimento = $("#dataNascimento").val();
			var sexo = $("#sexo").val();
			var tipoTelefone = $("#tipoTelefone").val();
			var telefone = $("#telefone").val();
			var email = $("#email").val();
			var cep = $("#cep").val();
			var rua = $("#rua").val();
			var bairro = $("#bairro").val();
			var cidade = $("#cidade").val();
			var numCasa = $("#numCasa").val();
			var uf = $("#uf").val();
			var complemento = $("#complemento").val();
			var usuario = $("#usuario").val();
			var senha = $("#senha").val();
			var setor = $("#setor").val();
			var funcao = $("#funcao").val();
			var btnSalva = $("#salvar");
			var formInserir = $("#inserirFuncionario");

			if(nome != "" && cpf != "" && usuario != "" && senha != "")
			{

				$("#rua", "#bairro", "#cidade", "#uf").removeAttr('disabled', 'disabled');

				formInserir.submit();

			}

			if(nome == "")
			{

				alert("Campo nome não pode estar vazio.");
				// return false;

			}

			if(cpf == "")
			{

				alert("Campo CPF não pode estar vazio.");
				// return false;
				
			}

			if(usuario == "")
			{

				alert("Campo usuario não pode estar vazio.");
				// return false;
				
			}

			if(senha == "")
			{

				alert("Campo senha não pode estar vazio.");
				// return false;
				
			}

			return false;
			
		});

	// function vazio(valor)
	// {

	// 	alert(valor);
	// 		return false;

	// 	if(valor == "" || valor == '' || valor == null)
	// 	{

	// 		return false;

	// 	}
	// 	else
	// 	{

	// 		return true;

	// 	}

	// }


});