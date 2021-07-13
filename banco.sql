delete database consigadm;
create database consigadm;
use consigadm;


create table registro(

id int primary key auto_increment,
nome varchar(32),
cpf varchar(14),
ag varchar(10),
conta varchar(10),
orgao varchar(20),
dataparcela date,
valorcessao INT(50),
datacessao date,
prazocessao varchar(2),
equipe varchar(50),
consultor varchar(50)
);

create table registronaohigienizado(

id int primary key auto_increment,
nome varchar(32),
cpf varchar(14),
ag varchar(10),
conta varchar(10),
orgao varchar(20),
dataparcela date,
valorcessao INT(50),
datacessao date,
prazocessao varchar(2),
equipe varchar(50),
consultor varchar(50)
);




create table funcionarios(

id int primary key auto_increment,
nome varchar(32),
equipe varchar(50),
cargo varchar(100),
quadro enum('geral')
);





create table visitas(

id int primary key auto_increment,
consultor varchar(50),
semana varchar(1),
qtd varchar (50),
equipe varchar(50),
data date
);








create table metas(
    id int primary key auto_increment,
meta varchar(50),
metaporequipe varchar(50),
metaporconsultor varchar(50) );








create table conta(

iduser int primary key auto_increment,
nome varchar(50),
login varchar(20) unique,
senha varchar(32),
perfil enum('adm', 'gestor','operacional'),
equipe varchar(50),
quadro enum('geral')
);


insert into conta values(null,"Administracao ConsigADM","adm",md5("123"),"adm","adm", "geral");

insert into conta values(null,"Operacional","op",md5("123"),"operacional","adm", "geral");







-----------------------------------------------------------------------------------------------------------
create table equipes(

iduser int primary key auto_increment,

perfil enum('Equipe1', 'Equipe2', 'Equipe3')
);





insert into equipes values('null','Equipe1');
insert into equipes values('null','Equipe2');


insert into equipes values('null','Equipe3');

-----------------------------------------------------------------------------------------------------------






create table projecao(
    id int primary key auto_increment,
    nomecliente varchar(50),
    valor varchar(50),
    data date,
    consultor varchar(50),
    equipe varchar(50),
    banco varchar(50)
);



create table relvisitas(

id int primary key auto_increment,
cliente varchar(32),
endereco varchar(50),
margem varchar(100),
tipo enum('Externo','Interno'),
consultor varchar(50),
equipe varchar(50),
data varchar(50)
);




CREATE TABLE IF NOT EXISTS `operacional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `emissor` varchar(50) NOT NULL,
  `expedicao` varchar(50) NOT NULL,
  `nascimento` varchar(50) NOT NULL,
  `civil` enum('Solteiro(a)','Casado(a)','Divorciado(a)','Viúvo(a)') NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `orgao` varchar(50) NOT NULL,
  `upag` varchar(50) NOT NULL,
  `situacao` enum('Ativo','Inativo','Aposentado') NOT NULL,
  `equipe` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fone1` varchar(50) DEFAULT NULL,
  `fone2` varchar(50) DEFAULT NULL,
  `fixo` varchar(50) DEFAULT NULL,
  `mae` varchar(50) DEFAULT NULL,
  `pai` varchar(50) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `naturalidade` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `operacao` varchar(50) DEFAULT NULL,
  `margem` varchar(50) DEFAULT NULL,
  `parcela` varchar(50) DEFAULT NULL,
  `fator` varchar(50) DEFAULT NULL,
  `liquido` varchar(50) DEFAULT NULL,
  `banco` varchar(50) DEFAULT NULL,
  `prazo` varchar(50) DEFAULT NULL,
 
  `data` varchar(50),
  PRIMARY KEY (`id`)
);


create table arquivosoperacional(
    id_arquivos int primary key auto_increment,
    id int,
    nome varchar(50),
    arquivorg  varchar(50),			
    arquivocpf  varchar(50),			
    contrato varchar(50),			
    cc  varchar(50),			
    res varchar(50),			
    intencionamento varchar(50),  
    data varchar(50)
);


ALTER TABLE operacional ADD cep varchar(50) AFTER uf;


create table pendencias(
    id int primary key auto_increment,
    id_contrato int,
    nome varchar(50),         
    status enum('Em andamento','Pendencia','Pago!','Cancelado'),
    texto varchar(250)    
);

