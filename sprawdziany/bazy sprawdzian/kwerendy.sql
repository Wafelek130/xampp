baza 5e_1_dane3
-- ‒ Zapytanie 1: wybierające jedynie pola id, nazwa, opis, zdjecie z tabeli produkty, dla produktów, których id jest jedną z wartości: 18, 22, 23, 25

SELECT id, nazwa, opis, zdjecie
FROM produkty
WHERE id = 18 OR id = 22 OR id = 23 OR id = 25;

-- ‒ Zapytanie 2: wybierające jedynie pola id, nazwa, opis, zdjecie z tabeli produkty, dla produktów, których pole Rodzaje_id przyjmuje wartość 12

SELECT id, nazwa, opis, zdjecie
FROM produkty
WHERE Rodzaje_id = 12;

-- ‒ Zapytanie 3: wybierające nazwę z tabeli produkty i odpowiadającą mu nazwę z tabeli rodzaje dla wierszy, których w polu opis występuje ciąg znaków: „Leia”

SELECT produkty.nazwa, rodzaje.nazwa
FROM produkty
    JOIN rodzaje on rodzaje.id = produkty.Rodzaje_id
WHERE opis LIKE '%Leia%';

-- ‒ Zapytanie 4: usuwające wiersz z tabeli produkty o id równym 15

DELETE FROM produkty
WHERE id = 15;