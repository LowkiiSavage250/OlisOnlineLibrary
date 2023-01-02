CREATE TABLE IF NOT EXISTS Books (
bookNo VARCHAR(4),
title VARCHAR(50),
author VARCHAR(30),
year INTEGER,
price DECIMAL(8,2),
PRIMARY KEY (bookNo));

CREATE TABLE IF NOT EXISTS Clients (
clientNo VARCHAR(4),
name VARCHAR(30),
age INTEGER,
email VARCHAR(50),
PRIMARY KEY (clientNo));

CREATE TABLE IF NOT EXISTS Reservations (
bookNo VARCHAR(4),
clientNo VARCHAR(4),
dateOut VARCHAR(10),
dateDue VARCHAR(10),
PRIMARY KEY (bookNo,clientNo,dateOut));

INSERT INTO Books VALUES('B101','A Handful of Dust','Evelyn Waugh','2004','80.99');
INSERT INTO Books VALUES('B102','A Scanner Darkly','Agatha Christie','1944','39.99');
INSERT INTO Books VALUES('B103','A Time of Gifts','John Steinbeck','1938','52.79');
INSERT INTO Books VALUES('B104','An Evil Cradling','Brian Keenan','1975','44.49');
INSERT INTO Books VALUES('B105','As I Lay Dying','William Faulkner','1981','35.99');
INSERT INTO Books VALUES('B106','Behold the Man','Michael Moorcock','2011','108.49');
INSERT INTO Books VALUES('B107','Butter In a Lordly Dish','Agatha Christie','1949','49.25');
INSERT INTO Books VALUES('B108','Carrion Comfort','Brian Keenan','1967','66.49');
INSERT INTO Books VALUES('B109','Clouds of Witness','Brian Keenan','1969','35.99');
INSERT INTO Books VALUES('B110','Consider the Lilies','Isaac Asimov','1999','49.79');
INSERT INTO Books VALUES('B111','Dying of the Light','George Martin','1981','39.99');
INSERT INTO Books VALUES('B112','East of Eden','John Steinbeck','1940','44.99');
INSERT INTO Books VALUES('B113','Endless Night','Agatha Christie','1952','52.49');
INSERT INTO Books VALUES('B114','Gone with the Wind','Margaret Mitchell','2001','96.49');
INSERT INTO Books VALUES('B115','Great Work of Time','John Crowley','1943','65.25');
INSERT INTO Books VALUES('B116','Mother Night','Kurt Vonnegut','1999','39.25');
INSERT INTO Books VALUES('B117','Mr Standfast','John Buchan','1978','39.49');
INSERT INTO Books VALUES('B118','Nectar in a Sieve','Kamala Markandaya','1966','80.99');
INSERT INTO Books VALUES('B119','No Longer at Ease','Brian Keenan','1971','40.25');
INSERT INTO Books VALUES('B120','Of Human Bondage','Agatha Christie','1947','44.79');
INSERT INTO Books VALUES('B121','Paths of Glory','Agatha Christie','1952','66.99');
INSERT INTO Books VALUES('B122','Postern of Fate','Agatha Christie','1948','35.25');
INSERT INTO Books VALUES('B123','Precious Bane','Mary Webb','1943','15.25');
INSERT INTO Books VALUES('B124','Recalled to Life','William Faulkner','1999','40.49');
INSERT INTO Books VALUES('B125','Shall not Perish','William Faulkner','1978','60.49');
INSERT INTO Books VALUES('B126','Specimen Days','John Steinbeck','1947','66.49');
INSERT INTO Books VALUES('B127','Surprised by Joy','Brian Keenan','1968','60.49');
INSERT INTO Books VALUES('B128','Terrible Swift Sword','Agatha Christie','1944','40.49');
INSERT INTO Books VALUES('B129','That Good Night','John Steinbeck','1945','35.49');
INSERT INTO Books VALUES('B130','The Golden Bowl','Henry James','1971','48.25');
INSERT INTO Books VALUES('B131','The Grapes of Wrath','John Steinbeck','1939','40.79');
INSERT INTO Books VALUES('B132','The Green Bay Tree','Louis Bromfield','1978','63.99');
INSERT INTO Books VALUES('B133','The House of Mirth','Brian Keenan','1966','65.79');
INSERT INTO Books VALUES('B134','The Last Temptation','John Steinbeck','1943','60.99');
INSERT INTO Books VALUES('B135','The Lathe of Heaven','William Faulkner','1986','65.99');
INSERT INTO Books VALUES('B136','The Millstone','Margaret Drabble','2001','70.79');
INSERT INTO Books VALUES('B137','The Moving Finger','Agatha Christie','1943','60.79');
INSERT INTO Books VALUES('B138','The Moving Toyshop','Edmund Crispin','1999','52.25');
INSERT INTO Books VALUES('B139','The Painted Veil','Henry James','1978','50.49');
INSERT INTO Books VALUES('B140','The Proper Study','Isaac Asimov','1994','54.99');
INSERT INTO Books VALUES('B141','Time of our Darkness','William Faulkner','1982','49.25');
INSERT INTO Books VALUES('B142','Vanity Fair','Agatha Christie','1951','65.99');

INSERT INTO Clients VALUES('C201','Kewon Song','36','ksong@gmail.com');
INSERT INTO Clients VALUES('C202','Frank Mancione','14','FMancione@hotmail.com');
INSERT INTO Clients VALUES('C203','Angela Peterkin','66','angela@gmail.com');
INSERT INTO Clients VALUES('C204','Stephanie Johnson','16','sjohnson@gmail.com');
INSERT INTO Clients VALUES('C205','Rafael Bah','17','rbah@yahoo.com');
INSERT INTO Clients VALUES('C206','Leisa Aras','49',NULL);
INSERT INTO Clients VALUES('C207','Robert Salsberry','55','rsalsberry@hotmail.com');
INSERT INTO Clients VALUES('C208','Alfina Chanti','24',NULL);
INSERT INTO Clients VALUES('C209','Connie Profaci','32','cprofaci@juno.com');
INSERT INTO Clients VALUES('C210','Steven Plac','17','steven@yahoo.com');
INSERT INTO Clients VALUES('C211','Steven Plac','17','steven@yahoo.com');
INSERT INTO Clients VALUES('C212','Cindy Lyon','20','cindy.lyon@hotmail.com');
INSERT INTO Clients VALUES('C213','Nicole Gary','26','ngary@gmail.com');
INSERT INTO Clients VALUES('C214','Cindy Lyon','20','cindy.lyon@hotmail.com');

INSERT INTO Reservations VALUES('B102','C201','10/24/2021','11/07/2021');
INSERT INTO Reservations VALUES('B106','C201','10/25/2021','11/08/2021');
INSERT INTO Reservations VALUES('B110','C201','10/19/2021','11/02/2021');
INSERT INTO Reservations VALUES('B114','C201','10/15/2021','10/29/2021');
INSERT INTO Reservations VALUES('B118','C201','10/24/2021','11/07/2021');
INSERT INTO Reservations VALUES('B122','C203','10/15/2021','10/29/2021');
INSERT INTO Reservations VALUES('B126','C202','10/10/2021','10/24/2021');
INSERT INTO Reservations VALUES('B130','C202','10/01/2021','10/15/2021');
INSERT INTO Reservations VALUES('B134','C202','10/08/2021','10/22/2021');
INSERT INTO Reservations VALUES('B134','C202','10/22/2021','11/05/2021');
INSERT INTO Reservations VALUES('B138','C202','10/18/2021','11/01/2021');
INSERT INTO Reservations VALUES('B142','C201','10/25/2021','11/08/2021');
INSERT INTO Reservations VALUES('B103','C204','10/01/2020','10/15/2020');
INSERT INTO Reservations VALUES('B106','C203','09/22/2021','10/05/2021');
INSERT INTO Reservations VALUES('B109','C204','10/01/2020','10/15/2020');
INSERT INTO Reservations VALUES('B112','C204','10/24/2021','11/07/2021');
INSERT INTO Reservations VALUES('B115','C203','10/22/2021','11/05/2021');
INSERT INTO Reservations VALUES('B130','C203','10/15/2021','10/29/2021');
INSERT INTO Reservations VALUES('B133','C204','09/22/2021','10/05/2021');
INSERT INTO Reservations VALUES('B136','C204','10/19/2021','11/02/2021');
INSERT INTO Reservations VALUES('B139','C204','10/24/2021','11/07/2021');
INSERT INTO Reservations VALUES('B130','C205','10/29/2021','11/12/2021');
INSERT INTO Reservations VALUES('B133','C205','10/15/2021','10/29/2021');
INSERT INTO Reservations VALUES('B136','C205','10/01/2021','10/15/2021');
INSERT INTO Reservations VALUES('B139','C205','09/25/2021','10/08/2021');
INSERT INTO Reservations VALUES('B103','C212','10/18/2020','11/01/2020');
INSERT INTO Reservations VALUES('B105','C212','10/18/2021','11/01/2021');
INSERT INTO Reservations VALUES('B107','C207','10/24/2021','11/07/2021');
INSERT INTO Reservations VALUES('B109','C203','10/22/2020','11/05/2020');
INSERT INTO Reservations VALUES('B111','C209','10/18/2021','11/01/2021');
INSERT INTO Reservations VALUES('B113','C209','10/05/2021','10/19/2021');
INSERT INTO Reservations VALUES('B113','C209','10/19/2021','11/02/2021');
INSERT INTO Reservations VALUES('B113','C209','11/02/2021','11/16/2021');
INSERT INTO Reservations VALUES('B115','C209','10/01/2021','10/15/2021');
INSERT INTO Reservations VALUES('B117','C209','10/10/2021','10/24/2021');
INSERT INTO Reservations VALUES('B119','C207','10/11/2021','10/25/2021');
INSERT INTO Reservations VALUES('B119','C207','10/25/2021','11/08/2021');
INSERT INTO Reservations VALUES('B121','C207','10/10/2021','10/24/2021');
INSERT INTO Reservations VALUES('B123','C212','10/15/2021','10/29/2021');
INSERT INTO Reservations VALUES('B125','C207','10/19/2021','11/02/2021');
INSERT INTO Reservations VALUES('B127','C207','10/22/2021','11/05/2021');
INSERT INTO Reservations VALUES('B129','C207','10/24/2021','11/07/2021');
INSERT INTO Reservations VALUES('B131','C212','10/10/2021','10/24/2021');
INSERT INTO Reservations VALUES('B133','C212','10/29/2021','11/12/2021');
INSERT INTO Reservations VALUES('B135','C203','10/24/2021','11/07/2021');