    -- zapytanie 1: wybierające jedynie pola gatunek i obraz z tabeli Zwierzeta jedynie dla ptaków
        SELECT gatunek, obraz
        FROM Zwierzeta
        WHERE Gromady_id = 4;
    -- zapytanie 2: wybierające jedynie pola id, Gromady_id, gatunek, wystepowanie z tabeli Zwierzeta dla tych zwierząt, które są ptakami lub ssakami
        SELECT id,Gromady_id,gatunek,wystepowanie
        FROM Zwierzeta
        WHERE Gromady_id BETWEEN 4 AND 5;
    -- zapytanie 3: wybierające jedynie pole gatunek z tabeli Zwierzeta oraz odpowiadające mu pola id i rodzaj z tabeli Odzywianie. Należy posłużyć się relacją
        SELECT gatunek, Odzywianie.id, rodzaj
        FROM Zwierzeta
        JOIN Odzywianie ON Odzywianie.id = Zwierzeta.Odzywianie_id;
    -- zapytanie 4: usuwające kolumnę informacja z tabeli Odzywianie
        ALTER TABLE odzywianie DROP informacja;