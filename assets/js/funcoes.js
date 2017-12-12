/**********************************
            VALIDA CPF
**********************************/

function validarCPF(cpf) {  

    cpf = cpf.replace(/[^\d]+/g,'');    
    if(cpf == '') return false; 
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length != 11 || 
        cpf == "00000000000" || 
        cpf == "11111111111" || 
        cpf == "22222222222" || 
        cpf == "33333333333" || 
        cpf == "44444444444" || 
        cpf == "55555555555" || 
        cpf == "66666666666" || 
        cpf == "77777777777" || 
        cpf == "88888888888" || 
        cpf == "99999999999")
            return false;       
    // Valida 1o digito 
    add = 0;    
    for (i=0; i < 9; i ++)       
        add += parseInt(cpf.charAt(i)) * (10 - i);  
        rev = 11 - (add % 11);  
        if (rev == 10 || rev == 11)     
            rev = 0;    
        if (rev != parseInt(cpf.charAt(9)))     
            return false;       
    // Valida 2o digito 
    add = 0;    
    for (i = 0; i < 10; i ++)        
        add += parseInt(cpf.charAt(i)) * (11 - i);  
    rev = 11 - (add % 11);  
    if (rev == 10 || rev == 11) 
        rev = 0;    
    if (rev != parseInt(cpf.charAt(10)))
        return false;       
    return true;
}

    /*************************************
        PEGA ENDEREÇO A PARTIR DO CEP
    *************************************/

function buscarCep(cep) 
{

    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val("");
    // $("#ibge").val("");

    //Nova variável "cep" somente com dígitos.
    cep = cep.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("Carregando...");
            $("#bairro").val("Carregando...");
            $("#cidade").val("Carregando...");
            $("#uf").val("Carregando...");
            // $("#ibge").val("Carregando...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                    // $("#ibge").val(dados.ibge);
                } //end if.
                else 
                {
                    //CEP pesquisado não foi encontrado.
                    // limpa_formulário_cep();

                    var msg = "CEP não encontrado.";

                    $("#alerta").modal();
                    $("#mensagem").html(msg);
                    $("#rua").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");

                    return false;

                }
            });
        } //end if.
        else 
        {
            //cep é inválido.
            // limpa_formulário_cep();

            var msg = "Formato de CEP inválido.";

            $("#alerta").modal();
            $("#mensagem").html(msg);
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");

            return false;

        }
    } //end if.
    else 
    {

        return false;
        //cep sem valor, limpa formulário.
        // limpa_formulário_cep();
    }
}

/*******************************
            VALIDA EMAIL
*******************************/

function validaEmail(email)
{

    usuario = email.substring(0, email.indexOf("@"));
    dominio = email.substring(email.indexOf("@")+ 1, email.length);

    if ((usuario.length >=1) &&
        (dominio.length >=3) && 
        (usuario.search("@")==-1) && 
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) && 
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&      
        (dominio.indexOf(".") >=1)&& 
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        // document.getElementById("email").innerHTML="E-mail válido";
        return true;

    }
    else
    {
        // document.getElementById("email").innerHTML="<font color='red'>E-mail inválido </font>";
        return false;
    }

}