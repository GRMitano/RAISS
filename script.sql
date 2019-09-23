CREATE DATABASE raiss;
CREATE TABLE usuarios (
  ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  Login varchar(30) NOT NULL,
  Senha varchar(80) NOT NULL,
  Nivel int(1) UNSIGNED NOT NULL DEFAULT '1',
  Ativo bool NOT NULL DEFAULT '0',
  Tentativas int(1) UNSIGNED NOT NULL DEFAULT '0',
  Cadastro datetime NOT NULL,
  PRIMARY KEY ( ID ),
  UNIQUE KEY Login ( Login ))
DEFAULT CHARSET=utf8;
INSERT INTO usuarios (Login, Senha, Nivel, Ativo, Cadastro)
VALUES ('Administrador', 'Senha', 2, 1, NOW());
/* ATENÇÃO: troque 'uruario_raiss' pelo nome do seu uruário */
GRANT ALL PRIVILEGES ON raiss.* TO 'usuario_rais@localhost' IDENTIFIED BY 'projeto' WITH GRANT OPTIONS;
