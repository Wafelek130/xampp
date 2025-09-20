-- use baza;
-- Zapytanie 1: wstawiające do tabeli rezerwacje rekord z danymi: numer stolika = 1, data=„2017-07-
-- 04”, liczba osób = 4, numer telefonu = „111222333”, wartość pola id nadawana jest automatycznie

INSERT INTO rezerwacje
(nr_stolika,data_rez,liczba_osob,telefon)
VALUES
(1,'2017-07-04',4,111222333);

-- Zapytanie 2: wybierające z tabeli dania jedynie pola nazwa i cena dla dań mięsnych

SELECT nazwa, cena
FROM dania
WHERE typ = 2;

-- Zapytanie 3: wybierające z tabeli dania jedynie pole nazwa dla takich przekąsek, których cena jest
-- mniejsza od 15 zł

SELECT nazwa
FROM dania
WHERE cena < 15;

-- Zapytanie 4: aktualizujące dane w tabeli pracownicy. Dla wszystkich pracowników, którzy
-- zatrudnieni są jako kelner, należy dokonać zmiany stanowiska na barman

UPDATE pracownicy
SET stanowisko = 4
WHERE stanowisko = 3;
