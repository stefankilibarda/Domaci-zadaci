1)

INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES ('198','avokado','180'), ('468','kumkvat','200'), ('492','jabuka','100'), ('618','banane','75')

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('198','5','900','2021-06-17'), ('492','8','800','2021-06-17'), ('618','1','75','2021-06-17'), ('468','15','3000','2021-06-16'), ('492','10','1000','2021-05-01'), ('198','3','540','2021-05-01'), ('468','4','800','2021-06-17'), ('618','3','225','2021-06-16'), ('492','2','200','2021-05-01'), ('198','1','180','2021-06-16') 

2)

INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES ('789','paradajz','200'), ('776','crni luk','50'), ('761','beli luk','80')

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789','50',50*200,'2021-06-16')

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789','20',20*200,'2021-06-17')

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789','40',40*250,'2021-06-17')

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789','10',10*220,'2021-06-17')

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('776','30',30*50,'2021-05-01')

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('761','10',10*80,'2021-05-01'), ('761','3',3*80,'2021-06-17'), ('761','13',13*80,'2021-06-16')

DELETE FROM `prodaja` WHERE `barkod`='789' AND `datum`='2021-06-16'

UPDATE `prodaja` SET `cena`=cena+cena*0.1 WHERE `datum`='2021-06-17'

SELECT `barkod` FROM `prodaja` WHERE `kolicina`>1.5

SELECT DISTINCT `barkod` FROM `prodaja` WHERE `kolicina`>1.5

SELECT SUM(kolicina) AS 'ukupna kolicina', datum FROM prodaja GROUP BY datum

SELECT proizvodi.naziv, SUM(prodaja.kolicina) AS 'ukupna kolicina' FROM proizvodi JOIN prodaja ON prodaja.barkod = proizvodi.barkod GROUP BY proizvodi.barkod

SELECT proizvodi.naziv, SUM(prodaja.kolicina) AS 'ukupna kolicina', prodaja.datum FROM proizvodi JOIN prodaja ON prodaja.barkod = proizvodi.barkod GROUP BY proizvodi.barkod, prodaja.datum

3)

SELECT proizvodi.naziv, SUM(prodaja.kolicina*prodaja.cena) AS 'ukupna kolicina', prodaja.datum FROM proizvodi JOIN prodaja ON prodaja.barkod = proizvodi.barkod GROUP BY proizvodi.barkod, prodaja.datum ORDER BY proizvodi.naziv ASC




