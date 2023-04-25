Create:

INSERT INTO `Players`(`playerID`, `firstName`, `lastName`, `position`, `clubID`) VALUES ('$playerid','$firstname','$lastname','$position','$clubid');

INSERT INTO `Clubs`(`clubID`, `name`, `location`, `yearFounded`, `leagueID`)  VALUES ('$clubid','$name','$location','$yearfounded','$leagueid');

INSERT INTO `Leagues`(`leagueID`, `name`, `country`, `rank`)  VALUES ('$leagueid','$name','$country','$rank');

INSERT INTO `Stats`(`playerID`, `appearances`, `goals`, `assists`,`cleansheets`)  VALUES ('$playerid','$appearances','$goals','$assists','$cleansheets');

Read:

SELECT firstName,lastName,position,appearances,goals,assists,cleanSheets FROM Players NATURAL JOIN Stats;

SELECT Players.firstName,Players.lastName,Clubs.name,Leagues.country FROM Players INNER JOIN Clubs INNER JOIN Leagues ON Clubs.leagueID=Leagues.leagueID && Players.clubID=Clubs.clubID;

SELECT firstName,lastName,appearances,goals FROM Players NATURAL JOIN Stats WHERE goals = (SELECT MAX(goals) FROM Stats);

SELECT firstName,lastName,appearances,assists FROM Players NATURAL JOIN Stats WHERE assists = (SELECT MAX(assists) FROM Stats);

SELECT firstName,lastName,appearances,cleanSheets FROM Players NATURAL JOIN Stats WHERE cleanSheets = (SELECT MAX(cleanSheets) FROM Stats);

SELECT * FROM Players;
SELECT * FROM Clubs;
SELECT * FROM Leagues;
SELECT * FROM Stats;

Update:

UPDATE `Players` SET `playerID`='$playerid',`firstName`='$firstname',`lastName`='$lastname',`position`='$position',`clubID`='$clubid' WHERE `playerID`='$user_id'";

UPDATE `Clubs` SET `clubID`='$clubid',`name`='$name',`location`='$location',`yearFounded`='$yearfounded',`leagueID`='$leagueid' WHERE `clubID`='$user_id';

UPDATE `Leagues` SET `leagueID`='$leagueid',`name`='$name',`country`='$country',`rank`='$rank' WHERE `leagueID`='$user_id'; 

UPDATE `Stats` SET `playerID`='$playerid',`appearances`='$appearances',`goals`='$goals',`assists`='$assists',`cleanSheets`='$cleansheets' WHERE `playerID`='$user_id'; 

Delete:

DELETE FROM `Players` WHERE `PlayerID`='$user_id';

DELETE FROM `Clubs` WHERE `clubID`='$user_id'";

DELETE FROM `Leagues` WHERE `leagueID`='$user_id';

DELETE FROM `Stats` WHERE `playerID`='$user_id';






