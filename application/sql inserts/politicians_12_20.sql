
INSERT INTO EvaluameDB.Politicians (FirstName,LastName,RegionId,State,PoliticianTypeId,PoliticianPicturePath,Twitter,PartyId) VALUES 
( 'Michelle','Bachelet Jeria',16,1,4,'MichelleBacheletJeria','GobiernodeChile',6);

INSERT INTO EvaluameDB.Politicians (FirstName,LastName,PartyId,RegionId,PoliticianTypeId,PoliticianPicturePath,Twitter)
VALUES('Andres','Allamand Zavala',2,13,1,'AndresAllamandZavala','allamand'),
('Isabel','Allende Bussi',6,3,1,'IsabelAllendeBussi','iallendebussi'),
('Pedro','Araya Guerrero',1,2,1,'PedroArayaGuerrero','ArayaPedro'),
('Carlos','Bianchi Chelech',1,12,1,'CarlosBianchiChelech','BianchiPrensa'),
('Francisco','Chahuan Chahuan',2,5,1,'FranciscoChahuanChahuan','chahuan'),
('Juan','Coloma Correa',5,7,1,'JuanAntonioColomaCorrea','jacoloma'),
('Alfonso','De Urresti Longton',6,14,1,'AlfonsoDeUrrestiLongton','adeurresti'),
('Alberto','Espina Otero',2,9,1,'AlbertoEspinaOtero','albertoespina'),
('Alejandro','Garcia Huidobro Sanfuentes',5,6,1,'AlejandroGarciaHuidobroSanfuentes','Senadoragh'),
('Jose','Garcia Ruminot',2,9,1,'JoseGarciaRuminot','jgarciaruminot'),
('Guido','Girardi Lavin',4,13,1,'GuidoGirardiLavin','guidogirardi'),
('Carolina','Goic Boroevic',3,12,1,'CarolinaGoicBoroevic','carolinagoic'),
('Alejandro','Guillier Alvarez',1,2,1,'AlejandroGuillierAlvarez','aleguillier'),
('Felipe','Harboe Bascunan',4,8,1,'FelipeHarboeBascunan','felipeharboe'),
('Antonio','Horvath Kiss',1,11,1,'AntonioHorvathKiss','Antoniohorvath'),
('Ricardo','Lagos Weber',4,5,1,'RicardoLagosWeber','lagosweber'),
('Hernan','Larrain Fernandez',5,7,1,'HernanLarrainFernandez','HernanLarrainF'),
('Juan','Letelier Morel',6,6,1,'JuanPabloLetelierMorel','jplchile'),
('Manuel Antonio','Matta Aragay',3,7,1,'ManuelAntonioMattaAragay','SenadorMatta'),
('Carlos','Montes Cisternas',6,13,1,'CarlosMontesCisternas','carlosmontestwt'),
('Ivan','Moreira Barros',5,10,1,'IvanMoreiraBarros','ivanmoreirab'),
('Adriana','Munoz DAlbora',4,4,1,'AdrianaMunozDAlbora','_adrianamunoz'),
('Alejandro','Navarro Brain',10,8,1,'AlejandroNavarroBrain','senadornavarro'),
('Jaime','Orpis Bouchon',5,1,1,'JaimeOrpisBouchon','jaimeorpisb'),
('Manuel','Ossandon Irarrazabal',2,13,1,'ManuelJoseOssandonIrarrazabal','mjossandon'),
('Lily','Perez San Martin',1,5,1,'LilyPerezSanMartin','lilyperez'),
('Victor','Perez Varela',5,8,1,'VictorPerezVarela','senadorVPV'),
('Jorge','Pizarro Soto',3,4,1,'JorgePizarroSoto','pizarrosenador'),
('Baldo','Prokurica Prokurica',2,3,1,'BaldoProkuricaProkurica','bprokurica'),
('Jaime','Quintana Leal',4,9,1,'JaimeQuintanaLeal','senadorquintana'),
('Rabindranath','Quinteros Lara',6,10,1,'RabindranathQuinterosLara','quinterosenador'),
('Fulvio','Rossi Ciocca',6,1,1,'FulvioRossiCiocca','FulvioRossiC'),
('Eugenio','Tuma Zedan',4,9,1,'EugenioTumaZedan','SenadorTuma'),
('Jacqueline','Van Rysselberghe Herrera',5,8,1,'JacquelineVanRysselbergheHerrera','jvanbiobio'),
('Ena','Von Baer Jahn',5,14,1,'EnaVonBaerJahn','enavonbaer'),
('Ignacio','Walker Prieto',3,5,1,'IgnacioWalkerPrieto','ignaciowalker'),
('Patricio','Walker Prieto',3,11,1,'PatricioWalkerPrieto','patriciowalker'),
('Andres','Zaldivar Larrain',3,7,1,'AndresZaldivarLarrain','andreszaldivarl');

update EvaluameDB.Politicians
set State=true
where PoliticianTypeId=1
