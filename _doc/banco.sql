use cadastro;

drop table if exists ingredientes;
drop table if exists cardapios;
drop table if exists refeicoes;

create table ingredientes(
    id int not null auto_increment,
    nome varchar(255) not null,
    calorias int not null,
    primary key(id)
);

create table refeicoes(
    id int not null auto_increment,
    nome varchar(255) not null,
    ingrediente_id int not null,
    primary key(id),
    FOREIGN KEY (ingrediente_id) REFERENCES ingredientes(id)  ON DELETE CASCADE

);

create table cardapios(
    id int not null auto_increment,
    dtref date not null,
    tipo_refeicao varchar(200) not null,
    refeicao_id int not null,
    primary key(id),
    FOREIGN KEY (refeicao_id) REFERENCES refeicoes(id)  ON DELETE CASCADE
);
