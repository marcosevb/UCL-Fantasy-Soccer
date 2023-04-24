For this project I choose to basically make a fantasy soccer web application for the 2023-24 season of the Champions League.
Fantasy sports is essentially where users select players for their team to score points across a tournament's completion.

1. Players Table

| playerID (PK) | firstName | lastName | position | clubID (FK) |
| ------------- | --------- | -------- | -------- | ----------- |
| 1234          | Miguel    | Almiron  | forward  | 1111        |
| 5678          | Lionel    | Messi    | forward  | 2222        |

Attributes: playerID, firstName, lastName, position, clubID\
The Primary Keys: playerID\
Foreign Keys: clubID\
Foreign Key Constraints: clubID references Clubs(clubID)\
Functional Dependencies: playerID -> firstName, lastName, position, clubID\
3NF: YES

2. Clubs Table

| clubID (PK) | name                | location            | yearFounded | leagueID (FK) |
| ----------- | ------------------- | ------------------- | ----------- | ------------- |
| 1111        | Newcastle United    | Newcastle upon Tyne | 1892        | 4343          |
| 2222        | Paris Saint Germain | Paris               | 1970        | 8989          |

Attributes: clubID, name, location, yearFounded, leagueID\
The Primary Key: clubID\
Foreign Key: leagueID\
Foreign Key Constraints: leagueID references Leagues(leagueID)\
Functional Dependencies: clubID -> name, location, yearFounded, leagueID\
3NF: YES

3. Leagues Table

| leagueID (PK) | name           | country | rank |
| ------------- | -------------- | ------- | ---- |
| 4343          | Premier League | England | 1    |
| 8989          | Ligue 1        | France  | 2    |

Attributes: leagueID, name, country, rank\
The Primary Key: leagueID\
Foreign Key: none\
Foreign Key Constraints: N/A\
Functional Dependencies: leagueID -> name, country, rank\
3NF: YES

4. Stats Table (all competitions from previous season)

| playerID (PK, FK) | appearances | goals | assists | cleanSheets |
| ----------------- | ----------- | ----- | ------- | ----------- |
| 1234              | 26          | 11    | 1       | 0           |
| 5678              | 35          | 20    | 18      | 0           |

Attributes: playerID, appearances, goals, assists, cleanSheets\
The Primary Key: playerID\
Foreign Key: playerID\
Foreign Key Constraint: playerID references Players(playerID)\
Functional Dependencies: playerID -> appearances, goals, assists, cleanSheets\
3NF: YES
