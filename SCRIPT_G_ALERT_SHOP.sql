#CRIAÇÃO DO BANCO DE DADOS
create database alert_shop;

#SELECIONA O BANCO DE DADOS PARA USO
use alert_shop;

#CRIAÇÃO DAS TABELAS DO BANCO DE DADOS
create table funcionario(
	idFuncionario int primary key auto_increment,
	nomeFuncionario varchar(150) not null,
	cpfFuncionario char(14) not null unique,
	usuario varchar(50) unique not null,
	senha char(32) not null,
	dataNascimento date,
	fkSetor int not null,
	fkFuncao int not null,
	sexoFuncionario enum('Masculino', 'Feminino') not null,
	emailFuncionario varchar(150) unique
);

create table telefoneFuncionario(
	idTelefone int primary key auto_increment,
	tipoTelefone enum('Residencial', 'Comercial', 'Celular') not null,
	numeroTelefone varchar(20) not null,
	fkFuncionario int not null
);

create table enderecoFuncionario(
	idEndereco int primary key auto_increment,
	cep char(10) not null,
	rua varchar(100) not null,
    numeroCasa char(5) not null,
	bairro varchar(50) not null,
	cidade varchar(50) not null,
	uf char(2) not null,
	complemento varchar(300),
	fkFuncionario int not null unique
);

create table setor(
	idSetor int primary key auto_increment,
	nomeSetor varchar(50) not null,
	descricaoSetor varchar(200)
);

create table funcao(
	idFuncao int primary key auto_increment,
	nomeFuncao varchar(50) not null,
	descricaoFuncao varchar(200)
);

create table clienteFisico(
	idCliente int primary key auto_increment,
	nomeCliente varchar(150) not null,
	cpfCliente varchar(20) not null,
	rgCliente varchar(20) not null,
	sexoCliente enum('Masculino', 'Feminino'),
	dataNascimento date,
	emailCliente varchar(100) unique
);

create table telefoneClienteFisico(
	idTelefone int primary key auto_increment,
	tipoTelefone enum('Residencial', 'Comercial', 'Celular') not null,
	numeroTelefone varchar(20) not null,
	fkCliente int not null
);

create table enderecoClienteFisico(
	idEndereco int primary key auto_increment,
	cep char(10) not null,
	rua varchar(100) not null,
    numeroCasa char(5) not null,
	bairro varchar(50) not null,
	cidade varchar(50) not null,
	uf char(2) not null,
	complemento varchar(300),
	fkCliente int not null unique
);

create table clienteJuridico(
	idCliente int primary key auto_increment,
	nomeFatasia varchar(150) not null,
	razaoSocial varchar(150) not null,
	inscEst varchar(20) not null,
	cnpj varchar(20) not null,
	emailCliente varchar(100) unique
);

create table telefoneClienteJuridico(
	idTelefone int primary key auto_increment,
	tipoTelefone enum('Residencial', 'Comercial', 'Celular') not null,
	numeroTelefone varchar(20) not null,
	fkCliente int not null
);

create table enderecoClienteJuridico(
	idEndereco int primary key auto_increment,
	cep char(10) not null,
	rua varchar(100) not null,
    numeroCasa char(5) not null,
	cidade varchar(50) not null,
	bairro varchar(50) not null,
	uf char(2) not null,
	complemento varchar(200),
	fkCliente int not null unique
);

create table fornecedorFisico(
	idFornecedor int primary key auto_increment,
	nomeFornecedor varchar(150) not null,
	cpfFornecedor char(14) not null unique,
	rgFornecedor varchar(20) not null,
	sexoFornecedor enum('Masculino', 'Feminino'),
	emailFornecedor varchar(150) unique
);

create table enderecoFornecedorFisico(
	idEndereco int primary key auto_increment,
	cep char(10) not null,
	rua varchar(100) not null,
    numeroCasa char(5) not null,
	bairro varchar(50) not null,
	cidade varchar(50) not null,
	uf char(2) not null,
	complemento varchar(200),
	fkFornecedor int not null unique
);

create table telefoneFornecedorFisico(
	idTelefone int primary key auto_increment,
	tipoTelefone enum('Residencial', 'Comercial', 'Celular') not null,
	numeroTelefone varchar(20) not null,
	fkFornecedor int not null
);

create table fornecedorJuridico(
	idFornecedor int primary key auto_increment,
	nomeFatasia varchar(150) not null,
	razaoSocial varchar(150) not null,
	inscEstFornecedor varchar(20) not null,
	cnpjFornecedor varchar(20) not null,
	emailFornecedor varchar(150) unique
);

create table enderecoFornecedorJuridico(
	idEndereco int primary key auto_increment,
	cep char(10) not null,
	rua varchar(100) not null,
    numeroCasa char(5) not null,
	bairro varchar(50) not null,
	cidade varchar(50) not null,
	uf char(2) not null,
	complemento varchar(200),
	fkFornecedor int not null
);

create table telefoneFornecedorJuridico(
	idTelefone int primary key auto_increment,
	tipoTelefone enum('Residencial', 'Comercial', 'Celular') not null,
	numeroTelefone varchar(20) not null,
	fkFornecedor int not null
);

create table produto(
	idProduto int primary key auto_increment,
	codigoProduto varchar(20) not null,
	descricaoProduto varchar(100) not null,
	prcCompra float(10,2) not null,
	prcVenda float(10,2) not null
);

create table grupoProduto(
	idGrupo int primary key auto_increment,
	nomeGrupo varchar(30) not null,
	fkProduto int not null
);

create table marca(
	idGrupo int primary key auto_increment,
	nomeGrupo varchar(30) not null,
	fkProduto int not null
);

create table material(
	idMaterial int primary key auto_increment,
	nomeMaterial varchar(30) not null
);

create table produtoFornecedor(
	idProdutoFornecedor int primary key auto_increment,
	fkProduto int not null,
	fkFornecedorJuridico int,
	fkFornecedorFisico int
);

create table produtoMaterial(
	idProdutoMaterial int primary key auto_increment,
	fkProduto int not null,
	fkMaterial int not null
);

create table servico(
	idServico int primary key auto_increment,
	descricaoServico varchar(100) not null,
	preco float(10,2) not null,
	obsServico mediumtext
);

create table grupoServico(
	idGrupo int primary key auto_increment,
	nomeGrupo varchar(100) not null,
	fkServico int not null
);

#ADIÇÃO DAS CHAVES ESTRANGEIRAS
alter table enderecoClienteJuridico add constraint fk_enderecoClienteJuridico foreign key (fkCliente) references clienteJuridico(idCliente);
alter table enderecoClienteFisico add constraint fk_enderecoClienteFisico foreign key (fkCliente) references clienteFisico(idCliente);
alter table enderecoFuncionario add constraint fk_enderecoFuncionario foreign key (fkFuncionario) references funcionario(idFuncionario);
alter table telefoneFuncionario add constraint fk_telefonrFuncionario foreign key (fkFuncionario) references funcionario(idFuncionario);
alter table telefoneClienteFisico add constraint fk_telefoneClienteFisico foreign key (fkCliente) references clienteFisico(idCliente);
alter table telefoneClienteJuridico add constraint fk_telefoneClienteJuridico foreign key (fkCliente) references clienteJuridico(idCliente);
alter table funcionario add constraint fk_setorFuncionario foreign key (fkSetor) references setor(idSetor);
alter table funcionario add constraint fk_funcaoFuncionario foreign key (fkFuncao) references funcao(idFuncao);
alter table enderecoFornecedorFisico add constraint fk_enderecoFornecedorFisico foreign key (fkFornecedor) references fornecedorFisico(idFornecedor);
alter table telefoneFornecedorFisico add constraint fk_telefoneFornecedorFisico foreign key (fkFornecedor) references fornecedorFisico(idFornecedor);
alter table enderecoFornecedorJuridico add constraint fk_enderecoFornecedorJuridico foreign key (fkFornecedor) references fornecedorJuridico(idFornecedor);
alter table telefoneFornecedorJuridico add constraint fk_telefoneFornecedorJuridico foreign key (fkFornecedor) references fornecedorJuridico(idFornecedor);
alter table grupoProduto add constraint fk_grupoProduto foreign key (fkProduto) references produto(idProduto);
alter table marca add constraint fk_marcaProduto foreign key (fkProduto) references produto(idProduto);
alter table produtoFornecedor add constraint fk_produtoFornecedor foreign key (fkProduto) references produto(idProduto);
alter table produtoFornecedor add constraint fk_fornecedorJurProdutoFornecedor foreign key (fkFornecedorJuridico) references fornecedorJuridico(idFornecedor);
alter table produtoFornecedor add constraint fk_fornecedorFisProdutoFornecedor foreign key (fkFornecedorFisico) references fornecedorFisico(idFornecedor);
alter table produtoMaterial add constraint fk_produtoProdutoMaterial foreign key (fkProduto) references produto(idProduto);
alter table produtoMaterial add constraint fk_materialProdutoMaterial foreign key (fkMaterial) references material(idMaterial);
alter table grupoServico add constraint fk_servicoGrupoServico foreign key (fkServico) references servico(idServico);


#INSERTS PADROES DO SISTEMA
insert into setor (
	idSetor, 
    nomeSetor, 
    descricaoSetor) 
values (
	NULL, 
    'Desenvolvimento', 
    'Desenvolvimento do sistema da empresa');

insert into funcao (
	idFuncao, 
    nomeFuncao, 
    descricaoFuncao) 
values (
	NULL, 
    'Desenvolvedor WEB', 
    'Desenvolve o sistema WEB da empresa');
    
insert into funcionario (
	idFuncionario, 
	nomeFuncionario, 
	cpfFuncionario, 
	usuario, 
	senha, 
	dataNascimento, 
	fkSetor, 
	fkFuncao, 
	sexoFuncionario, 
	emailFuncionario) 
values (
	NULL, 
    'Kauan Rodrigues', 
    '123.456.789-10', 
    'kauan', 
    '202cb962ac59075b964b07152d234b70', 
    '1998-02-12', 
    1, 
    1, 
    'Masculino', 
    'kauangamertuto@gmail.com');

insert into telefoneFuncionario (
	idTelefone, 
    tipoTelefone, 
    numeroTelefone, 
    fkFuncionario) 
values (
	NULL,
    'Celular', 
    '(81)99598-2036', 
    1);

insert into enderecoFuncionario (
	idEndereco, 
    cep, 
    rua, 
    numeroCasa, 
    bairro, 
    cidade, 
    complemento, 
    uf, 
    fkFuncionario) 
values (
	NULL, 
	'52.120-520', 
    'Rua Manoel Silva', 
    '139', 
    'Fundão', 
    'Recife', 
    '', 
    'PE', 
    1);