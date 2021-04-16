CREATE TABLE details('ID' varchar(12), 'Name' varchar(50), 'Email' varchar(50), 'ContactNumber' integer(10), 'CurrentBalance' decimal);

INSERT INTO details('ID', 'Name', 'Email', 'ContactNumber', 'CurrentBalance')
VALUES(100000000001, 'Jessica Pearson', 'jesspearson@lawfirm.com', 123456789, 84328787),
	  (100000000002, 'Harvey Reginald Specter', 'harvspecter@lawfirm.com', 123456798, 79732960),
	  (100000000003, 'Louis Marlow Litt', 'loiuslitt@lawfirm.com', 123457698, 7554321),
	  (100000000004, 'Donna Paulson', 'donnpaulson@lawfirm.com', 123546798, 876540),
	  (100000000005, 'Michael James Ross', 'michross@lawfirm.com', 123546978, 7529744),
	  (100000000006, 'Rachel Zane', 'rachzane@lawfirm.com', 1023546978, 765320),
	  (100000000007, 'Travis Tanner', 'travtanner@lawfirm.com', 1203546978, 78965320),
	  (100000000008, 'Vivian Tenaka', 'vivitenaka@lawfirm.com', 1205346978, 89675320),
	  (100000000009, 'Katrina Bennett', 'katrbennett@lawfirm.com', 1203549678, 7896542),
	  (100000000010, 'Samantha Wheeler', 'samawheeler@lawfirm.com', 1250346978, 645837011);

COMMIT;