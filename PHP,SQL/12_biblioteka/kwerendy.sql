SELECT id, tytul
FROM ksiazka
WHERE gatunek = 'liryka';

SELECT tytul, id_cz, data_odd
FROM ksiazka
    JOIN wypozyczenia ON wypozyczenia.id_ks = ksiazka.id
ORDER BY data_odd
LIMIT 15;

ALTER TABLE ksiazka
ADD rezerwacja TINYINT(1) DEFAULT 0;

UPDATE ksiazka
SET rezerwacja = 1
WHERE id = 1;

SELECT tytul
FROM ksiazka
WHERE id = 4;