CREATE DATABASE moj_CMS CHARACTER SET utf8;
CREATE TABLE moj_CMS.tabela (
  nr int,
  rodzic int,
  dzieci char(20),
  typ_elementu char(20),
  tag_otwierajacy char(20),
  tag_zamykajacy char(20),
  atrybut1 char(20),
  atrybut2 char(20),
  atrybut3 char(20),
  atrybut4 char(20),
  zawartosc char(255)
);
INSERT INTO moj_CMS.tabela (nr, dzieci, typ_elementu, tag_otwierajacy, tag_zamykajacy) VALUES (1, '2 4', 'dokument HTML', '<body>', '</body>');

INSERT INTO moj_CMS.tabela (nr, rodzic, dzieci, typ_elementu, tag_otwierajacy, tag_zamykajacy, zawartosc) VALUES (2, 1, '3', 'naglowek', '<header>', '</header>', "");

INSERT INTO moj_CMS.tabela (nr, rodzic, dzieci, typ_elementu, tag_otwierajacy, tag_zamykajacy, zawartosc) VALUES (3, 2, '', 'nagłówek 1', '<h1>', '</h1>', 'Kurs programowania webowego');

INSERT INTO moj_CMS.tabela (nr, rodzic, dzieci, typ_elementu, tag_otwierajacy, tag_zamykajacy, zawartosc) VALUES (4, 1, '5 6', 'sekcja', '<section>', '</section>', "");

INSERT INTO moj_CMS.tabela (nr, rodzic, dzieci, typ_elementu, tag_otwierajacy, tag_zamykajacy, zawartosc) VALUES (5, 4, '', 'nagłówek 2', '<h2>', '</h2>', 'HTML');

INSERT INTO moj_CMS.tabela (nr, rodzic, dzieci, typ_elementu, tag_otwierajacy, tag_zamykajacy, zawartosc) VALUES (6, 4, '', 'akapit', '<p>', '</p>', '(ang. HyperText Markup Language) – hipertekstowy język znaczników, wykorzystywany do tworzenia dokumentów hipertekstowych.');
