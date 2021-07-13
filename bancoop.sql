create table operacional(

id   int   primary key    auto_increment,			
nome                        varchar(50),			
cpf                        varchar(50),			
rg                        varchar(50),	
emissor                        varchar(50),					
expedicao                        varchar(50),			
nascimento                        varchar(50),			                        			
civil                        varchar(50),			
profissao                        varchar(50),			
orgao                        varchar(50),			
upag                        varchar(50),			
situacao                        varchar(50),			                        			
equipe                        varchar(50),			
endereco                        varchar(50),			
bairro                        varchar(50),			
cidade                        varchar(50),			
uf                        varchar(50),			
cep                        varchar(50),			                        			
email                        varchar(50),			
fone1                        varchar(50),			
fone2                        varchar(50),			
fixo                        varchar(50),			                        			
mae                        varchar(50),			
pai                        varchar(50),			
nacionalidade                        varchar(50),			
naturalidade                        varchar(50),			
matricula                        varchar(50),			
operacao                        varchar(50),			
margem                        varchar(50),			
parcela                        varchar(50),			
fator                        varchar(50),			
liquido                        varchar(50),			
banco                        varchar(50),			
prazo                        varchar(50),		
 data                    varchar(50)


);


create table arquivosoperacional(
    id_arquivos int primary key auto_increment,
    id int,
    arquivorg  varchar(50),			
    arquivocpf  varchar(50),			
    contrato varchar(50),			
    cc  varchar(50),			
    res varchar(50),			
    intencionamento varchar(50),  
    id int,  
    foreign key (id) references operacional (id)



);


ALTER TABLE operacional ADD cep varchar(50) AFTER uf;