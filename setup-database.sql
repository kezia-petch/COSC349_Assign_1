/* Initally created a table with 4 collumns that are all varchar values.
 * No primary or foreign keys are present in this table.
 */
CREATE TABLE dayconverter(
  name varchar(50),
  currency varchar(50),
  timezone varchar(5),
  offset varchar(30)
);

/* The ranging countries chosen due to variance from the UTC and their
 * associated data are then inserted into the created table
 */
INSERT INTO dayconverter VALUES ('Kiribati/Kiritimati','Australian Dollar(AUD)','LINT','UTC +14 Hours');
INSERT INTO dayconverter VALUES ('Samoa/Apia','Tala(WST)','WST','UTC +13 hours');
INSERT INTO dayconverter VALUES ('NZ/Wellington','NZ Dollar(NSD)','NZST','UTC +12 hours');
INSERT INTO dayconverter VALUES ('Vanuatu/Port Vila','Vatu(VUV)','VUT','UTC +11 hours');
INSERT INTO dayconverter VALUES ('Australia/Sydney','Australian Dollar(AUD)','AEST','UTC +10 hours');
INSERT INTO dayconverter VALUES ('South Korea/Seoul','South Korean Won(KRW)','KST','UTC +9 hours');
INSERT INTO dayconverter VALUES ('Taipei/Taiwan','New Taiwan Dollar(TWD)','CST','UTC +8 hours');
INSERT INTO dayconverter VALUES ('Singapore/Singapore','Singapore Dollar(SGD)','SGT','UTC +7 hours');
INSERT INTO dayconverter VALUES ('India/Kolkata','Indian Rupee(INR)','IST','UTC +6 hours');
INSERT INTO dayconverter VALUES ('Maldives/Male','Rufiyaa(MVR)','MVT','UTC +5 hours');
INSERT INTO dayconverter VALUES ('Oman/Muscat','Omani Rial(OMR)','GST','UTC +4 hours');
INSERT INTO dayconverter VALUES ('Yemen/Sana','Yemeni Rial(YER)','AST','UTC +3 hours');
INSERT INTO dayconverter VALUES ('South Africa/Johannesburg','Rand(ZAR)','SAST','UTC +2 hours');
INSERT INTO dayconverter VALUES ('Malta/Valletta','Euro(EUR)' ,'CEST','UTC +1 hour');
INSERT INTO dayconverter VALUES ('United Kingdom/Isle Of Man','Manx Pound(IMP)','BST','No Difference');
INSERT INTO dayconverter VALUES ('Sierra Leone/Freetown','Leone(SLL)','GMT','UTC -1 hour');
INSERT INTO dayconverter VALUES ('Cabo Verde/Praia','Cabo Verdean Escudo(CVE)','CVT','UTC -2 hours');
INSERT INTO dayconverter VALUES ('Brazil/Brasilia','Real(BRL)','BRT','UTC -3 hours');
INSERT INTO dayconverter VALUES ('United Kingdom/Bermuda','Bermudian Dollar(BMD)','ADT','UTC -4 hours');
INSERT INTO dayconverter VALUES ('Peru/Lima','Sol(PEN)','PET','UTC -5 hours');
INSERT INTO dayconverter VALUES ('United States/Houston','United States Dollar(USD)','CDT','UTC -6 hours');
INSERT INTO dayconverter VALUES ('Chile/Easter Island','Chilean Peso(CLP)','EAST','UTC -7 hours');
INSERT INTO dayconverter VALUES ('United States/Los Angeles','United States Dollar(USD)','PDT','UTC -8 hours');
INSERT INTO dayconverter VALUES ('Canada/Whitehorse','Canadian Dollar(CAD)','PDT','UTC -9 hours');
INSERT INTO dayconverter VALUES ('United States/Fairbanks','United States Dollar(USD)','AKDT','UTC -10 hours'); 
INSERT INTO dayconverter VALUES ('Cook Islands/Rarotonga','NZ Dollar(NZD)','CKT','UTC -11 hours'); 



 

