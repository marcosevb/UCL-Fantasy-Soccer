CREATE TABLE Leagues (
    leagueID INT NOT NULL,
    name VARCHAR(50) NOT NULL,
    country VARCHAR(30) NOT NULL,
    rank INT NOT NULL,
    PRIMARY KEY (leagueID)
);

CREATE TABLE Clubs (
    clubID INT NOT NULL,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    yearFounded INT NOT NULL,
    leagueID INT NOT NULL,
    PRIMARY KEY (clubID),
    FOREIGN KEY (leagueID) REFERENCES Leagues(leagueID)
);

CREATE TABLE Players (
    playerID INT NOT NULL,
    firstName VARCHAR(40) NOT NULL,
    lastName VARCHAR(40) NOT NULL, 
    position VARCHAR(20) NOT NULL,
    clubID INT NOT NULL,
    PRIMARY KEY (playerID),
    FOREIGN KEY (clubID) REFERENCES Clubs(clubID)
);

CREATE TABLE Stats (
    playerID INT NOT NULL,
    appearances INT NOT NULL,
    goals INT,
    assists INT,
    cleanSheets INT,
    PRIMARY KEY (playerID),
    FOREIGN KEY (playerID) REFERENCES Players(playerID)
);