INSERT INTO Leagues
VALUES
(111,'Premier League', 'England', 1),
(333,'La Liga', 'Spain', 2),
(555,'Bundesliga', 'Germany', 3),
(777,'Serie A', 'Italy', 4),
(999,'Ligue 1', 'France', 5);

INSERT INTO Clubs
VALUES
(222,'Newcastle United','Newcastle upon Tyne', 1892, 111),
(444,'FC Barcelona','Barcelona', 1899, 333),
(666,'Borussia Dortmund','Dortmund', 1909, 555),
(888,'A.S. Roma','Rome', 1927, 777),
(000,'Paris Saint Germain','Paris', 1970, 999);

INSERT INTO Players
VALUES
(012,'Miguel', 'Almiron', 'Forward', '222'),
(034,'Ronald', 'Araujo', 'Defender', '444'),
(056,'Jude', 'Bellingham', 'Midfielder', '666'),
(078,'Paulo', 'Dybala', 'Forward', '888'),
(090,'Gianluigi', 'Donnarumma', 'Goalkeeper', '000');

INSERT INTO Stats
VALUES
(012, 26, 11, 1, NULL),
(034, 17, 0, 2, 13),
(056, 38, 10, 7, NULL ),
(078, 35, 15, 7, NULL),
(090, 47, NULL, NULL, 16);