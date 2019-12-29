CREATE DATABASE moj_CMS CHARACTER SET utf8;
CREATE TABLE moj_CMS.tabela (
  nr int,
  rodzic int,
  dzieci char(20),
  typ_elementu char(20),
  atrybut1 char(20),
  atrybut2 char(20),
  atrybut3 char(20),
  atrybut4 char(20),
  zawartosc char(255)
);
INSERT INTO moj_CMS.tabela (nr, dzieci, typ_elementu) VALUES (1, '2 3', 'dokument HTML');
INSERT INTO moj_CMS.tabela (nr, rodzic, typ_elementu, zawartosc) VALUES (2, 1, 'nagłówek 1', 'Twoja strona WWW');
INSERT INTO moj_CMS.tabela (nr, rodzic, typ_elementu, zawartosc) VALUES (3, 1, 'paragraf', 'Twoja treść');
