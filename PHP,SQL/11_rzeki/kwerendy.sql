-- ‒ Zapytanie 1: wybierające jedynie pola nazwa, rzeka, stanAlarmowy z tabeli wodowskazy

SELECT nazwa, rzeka, stanAlarmowy
FROM wodowskazy;

-- ‒ Zapytanie 2: wybierające jedynie pola nazwa, rzeka, stanOstrzegawczy, stanAlarmowy
-- z tabeli wodowskazy oraz odpowiadające im pole stanWody z tabeli pomiary dla daty pomiaru
-- 2022-05-05. Należy posłużyć się relacją

SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody
FROM wodowskazy
    INNER JOIN pomiary ON pomiary.wodowskazy_id = wodowskazy.id
WHERE dataPomiaru = '2022-05-05';

-- ‒ Zapytanie 3: wybierające jedynie pola nazwa, rzeka, stanOstrzegawczy, stanAlarmowy
-- z tabeli wodowskazy oraz odpowiadające im pole stanWody z tabeli pomiary dla daty pomiaru
-- 2022-05-05 oraz takie, dla których stanWody jest wyższy niż stanOstrzegawczy. Należy
-- posłużyć się relacją

SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody
FROM wodowskazy
    INNER JOIN pomiary ON pomiary.wodowskazy_id = wodowskazy.id
WHERE dataPomiaru = '2022-05-05' AND stanWody > stanOstrzegawczy;

-- ‒ Zapytanie 4: wybierające jedynie datę pomiaru oraz liczące średnie stany wody z tabeli
-- pomiary grupując je według daty pomiaru

SELECT dataPomiaru, AVG(stanWody)
FROM pomiary
ORDER BY dataPomiaru;