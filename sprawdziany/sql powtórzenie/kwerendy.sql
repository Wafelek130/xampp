SELECT * 
FROM kontenery
WHERE wartosc < 150;

SELECT DISTINCT lokalizacja
FROM magazyny;

SELECT AVG(wartosc) 
FROM kontenery;

SELECT SUM(pojemnosc), lokalizacja
FROM magazyny
GROUP BY lokalizacja;


-- SELECT SUM(pojemnosc), lokalizacja
-- FROM magazyny
-- WHERE SUM(pojemnosc) < 10
-- GROUP BY lokalizacja;

SELECT magazyny.kod, zawartosc, lokalizacja
FROM magazyny
    LEFT JOIN kontenery ON kontenery.kod = magazyny.kod
GROUP BY magazyny.kod;

SELECT magazyny.kod
FROM magazyny
    JOIN kontenery ON kontenery.kod = magazyny.kod
WHERE magazyn > pojemnosc;

DELETE FROM kontenery
WHERE wartosc > 200;

UPDATE magazyny
SET pojemnosc = 6
WHERE kod = 2;


-- SELECT * 
-- FROM filmy
-- WHERE Rating = 'NULL';


SELECT *
FROM filmy
    RIGHT JOIN kina ON kina.kod = filmy.kod;

UPDATE filmy
SET rating = 'G'
WHERE rating = 'NULL';

INSERT INTO kina
(nazwa)
VALUES
('Eksodus');

INSERT INTO filmy
(tytul)
VALUES
('The Quiet Man');

SELECT dostawcy.nazwa
FROM dostawcy
    JOIN produkty ON produkty.kod = dostawcy.kod
WHERE produkty.kod = 1;

SELECT MIN(cena), produkty.kod
FROM oferty
    JOIN produkty ON produkty.kod = oferty.produkt
GROUP BY produkty.kod;