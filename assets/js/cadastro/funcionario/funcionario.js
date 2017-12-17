$(document).ready(function(){

	//CONSULTA FUNCIONARIO

	$(document).ready(function(){
    
    	$('#tableFuncionario').DataTable({
         	"language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            }
    });
	
	});

	$("#nome").focus();

	var funcao = document.getElementById("funcao");
	var funcao = funcao.options[funcao.selectedIndex].value;

	var setor = document.getElementById("setor");
	var setor = setor.options[setor.selectedIndex].value;

	var sexo = $("#sexo").val();
	var cpf = $('#cpf');
	var telefone = $("#telefone");
	var cep = $("#cep");
	var email = $("#email");
	var btnRemover = $("#btnRemover");
	var btnEditar = $("#btnEditar");

	/*************************************
		PEGA ENDEREÇO A PARTIR DO CEP
	*************************************/

	$("#cep").on('blur', function(){

		var cep = $("#cep").val();

		// alert(cep);

		buscarCep(cep);

	});

	/*******************************
			VALIDA CPF
	*******************************/

	cpf.on('blur', function(){

		var cpf = $("#cpf").val();

		validarCPF(cpf);

		console.log(validarCPF(cpf));

		if(!validarCPF(cpf))
		{

			var msg = "CPF inválido.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			return false;

		}

	});

	/***************************************************
				REMOVE CARACTERE ESPECIAL
	***************************************************/

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
	telefone.mask("(00)00000-0000", {placeholder:"(__)____-____"});
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

	/************************************
				VALIDA EMAIL
	************************************/

	$("#email").on('blur', function(){

		email = $("#email").val();

		validaEmail(email);

		if(!validaEmail(email))
		{

			var msg = "E-mail inválido.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#email").val("");

		}

	});

	/**********************************
					SUBMIT
	**********************************/

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

		if(nome != "" && cpf != "" && usuario != "" && senha != "" && funcao != "" && setor != "" && sexo != "")
		{

			$("#rua", "#bairro", "#cidade", "#uf").removeAttr('disabled', 'disabled');

			formInserir.submit();

		}

		if(nome == "")
		{

			var msg = "Campo nome não pode estar vazio.";

			// alert(msg);


			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function (){

		        	$('#nome').focus();

		    	}, 100);

			});
			return false;

		}

		if(cpf == "")
		{

			var msg = "Campo CPF não pode estar vazio.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#cpf").focus();

				}, 100);

			});
			return false;
			
		}

		if($("#sexo").prop('checked') == false)
		{

			var msg = "Selecione um sexo.";
			
			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#sexo").focus();

				}, 100);

			});
			return false;


		}

		if(usuario == "")
		{

			var msg = "Campo usuario não pode estar vazio.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#usuario").focus();

				},100);

			});
			return false;
			
		}

		if(senha == "")
		{

			var msg = "Campo senha não pode estar vazio.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#senha").focus();

				}, 100);

			});
			return false;
			
		}

		if(funcao == "")
		{

			var msg = "Uma função deve ser selecionada";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#funcao").focus();

				}, 100);

			});
			return false;
			
		}

		if(setor == "")
		{

			var msg = "Um setor deve ser selecionado.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				seTimeout(function(){

					$("#setor").focus();

				}, 100);

			});
			return false;
			
		}

		return false;
		
	});

	$("#salvarAlteracao").on('click', function(){

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
		var salvarAlteracao = $("#salvarAlteracao");
		var formAlterar = $("#alterarFuncionario");

		if(nome != "" && cpf != "" && usuario != "" && senha != "" && funcao != "" && setor != "" && sexo != "")
		{

			$("#rua", "#bairro", "#cidade", "#uf").removeAttr('disabled', 'disabled');

			formAlterar.submit();

		}

		if(nome == "")
		{

			var msg = "Campo nome não pode estar vazio.";

			// alert(msg);


			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function (){

		        	$('#nome').focus();

		    	}, 100);

			});
			return false;

		}

		if(cpf == "")
		{

			var msg = "Campo CPF não pode estar vazio.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#cpf").focus();

				}, 100);

			});
			return false;
			
		}

		if($("#sexo").prop('checked') == false)
		{

			var msg = "Selecione um sexo.";
			
			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#sexo").focus();

				}, 100);

			});
			return false;


		}

		if(usuario == "")
		{

			var msg = "Campo usuario não pode estar vazio.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#usuario").focus();

				},100);

			});
			return false;
			
		}

		if(senha == "")
		{

			var msg = "Campo senha não pode estar vazio.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#senha").focus();

				}, 100);

			});
			return false;
			
		}

		if(funcao == "")
		{

			var msg = "Uma função deve ser selecionada";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				setTimeout(function(){

					$("#funcao").focus();

				}, 100);

			});
			return false;
			
		}

		if(setor == "")
		{

			var msg = "Um setor deve ser selecionado.";

			$("#alerta").modal();
			$("#mensagem").html(msg);
			$("#fecharModal").on('click', function(){

				seTimeout(function(){

					$("#setor").focus();

				}, 100);

			});
			return false;
			
		}

		return false;
		
	});

	/*******************************
			EDITAR FUNCIONARIO
	*******************************/

	// $("#btnEditar").on('click', function(){

	// 	$("#formAlterarFuncionario").submit();

	// });

	$("#salvarAlteracao").on('click', function(){

		$("#alterarFuncionario").submit();

	});

	function submit(){

		// alert(1);
		// return false;

		if(isset($("#cpfFuncionario")))
		{

			$("#formAlterarFuncionario").submit();

		}

	};

	btnRemover.on('click', function(){

		if(isset($("#cpfFuncionario")))
		{

			$("#formAlterarFuncionario").submit();

		}

	});

});