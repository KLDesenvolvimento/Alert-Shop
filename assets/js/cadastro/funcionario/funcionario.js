$(document).ready(function(){

	var cpf = $('#cpf');
	var telefone = $("#telefone");
	var cep = $("#cep");
	var email = $("#email");

	/*************************************
		PEGA ENDEREÇO A PARTIR DO CEP
	*************************************/

	$("#cep").on('blur', function(){

		var cep = $("#cep").val

		buscarCep(cep);

		console.log(cep);

		if(!buscarCep(cep))
		{

			alert('CEP inválido');

		}

	});

	/*******************************
			VALIDA CPF
	*******************************/

	cpf.on('blur', function(){

		var cpf = $("#cpf").val();

		validarCPF(cpf);

		// console.log(validarCPF(cpf));

		if(!validarCPF(cpf))
		{

			alert('CPF inválido.');

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

	/************************************
				VALIDA EMAIL
	************************************/

	$("#email").on('blur', function(){

		email = $("#email").val();

		validaEmail(email);

		if(!validaEmail(email))
		{

			alert("E-mail invalido");
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

	//CONSULTA FUNCIONARIO

	$(document).ready(function(){
    
    	$('#tableFuncionario').DataTable();
	
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

});