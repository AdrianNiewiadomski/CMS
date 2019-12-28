CREATE DATABASE moj_CMS;
CREATE TABLE moj_CMS.tabela (
  nr int,
  rodzic int,
  typ_elementu char(20),
  atrybut1 char(20),
  atrybut2 char(20),
  atrybut3 char(20),
  atrybut4 char(20),
  zawartosc char(255)
);
INSERT INTO moj_CMS.tabela (nr, typ_elementu) VALUES (1, 'html');
INSERT INTO moj_CMS.tabela (nr, rodzic, typ_elementu) VALUES (2, 1, 'head');
INSERT INTO moj_CMS.tabela (nr, rodzic, typ_elementu) VALUES (3, 1, 'body');
