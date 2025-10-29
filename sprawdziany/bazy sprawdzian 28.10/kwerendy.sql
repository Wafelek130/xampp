-- − Zapytanie 1: wybierające jedynie pola nazwa i cena z tabeli towary i wyświetlające jedynie cztery pierwsze zwrócone zapytaniem rekordy
SELECT nazwa, cena
FROM towary
LIMIT 4;


-- − Zapytanie 2: wybierające jedynie pole cena z tabeli towary dla towaru Ekierka
SELECT cena
FROM towary
WHERE nazwa = 'ekierka';

-- − Zapytanie 3: aktualizujące dane w tabeli dostawcy, rekord o id równym 2 w polu nazwa przyjmuje nową wartość „Artykuly szkolne”

UPDATE dostawcy
SET nazwa = "Artykuly szkolne"
WHERE id = 2;

-- − Zapytanie 4: wybierające jedynie pole promocja dla wszystkich rekordów z tabeli towary oraz zliczające liczbę towarów objętych i towarów nieobjętych promocją. Nazwa kolumny (alias) dla zliczenia towarów: podsumowanie.

SELECT promocja, COUNT(id) AS podsumowanie
FROM towary
GROUP BY promocja;