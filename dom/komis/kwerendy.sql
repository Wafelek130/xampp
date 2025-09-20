-- a) zapytanie 1: wybierające jedynie pola id, marka i model ze wszystkich rekordów tabeli Samochody
SELECT id, marka, model 
FROM Samochody;


-- b) zapytanie 2: wybierające jedynie pola id samochodu oraz Klient dla wszystkich rekordów tabeli Zamowienia
SELECT Samochody_id, Klient
FROM zamowienia;



-- c) zapytanie 3: wybierające wszystkie pola z tabeli Samochody, dla których marka to Fiat;

SELECT *
FROM Samochody
WHERE marka LIKE "Fiat";