CREATE TABLE dayconverter (
  name varchar(50),
  currency varchar(50),
  timezone varchar(5) NOT NULL,
  offset varchar(30) NOT NULL,
  PRIMARY KEY (name)
);

INSERT INTO dayconverter VALUES ('Kiribati/Kiritimati','Australian_Dollar(AUD)','LINT','UTC +14 Hours');
INSERT INTO dayconverter VALUES ('Samoa/Apia','Tala(WST)','WST','UTC +13 hours');
INSERT INTO dayconverter VALUES ('NZ/Wellington','NZ_Dollar(NSD)','NZST','UTC +12 hours');
INSERT INTO dayconverter VALUES ('Vanuatu/Port_Vila','Vatu(VUV)','VUT','UTC +11 hours');
INSERT INTO dayconverter VALUES ('Australia/Sydney','Australian_Dollar(AUD)','AEST','UTC +10 hours');
INSERT INTO dayconverter VALUES ('South_Korea/Seoul','South_Korean_Won(KRW)','KST','UTC +9 hours');
INSERT INTO dayconverter VALUES ('Taipei/Taiwan','New_Taiwan_Dollar(TWD)','CST','UTC +8 hours');
INSERT INTO dayconverter VALUES ('Singapore/Singapore','Singapore_Dollar(SGD)','SGT','UTC +7 hours');
INSERT INTO dayconverter VALUES ('India/Kolkata','Indian_Rupee(INR)','IST','UTC +6 hours');
INSERT INTO dayconverter VALUES ('Maldives/Male','Rufiyaa(MVR)','MVT','UTC +5 hours');
INSERT INTO dayconverter VALUES ('Oman/Muscat','Omani_Rial(OMR)','GST','UTC +4 hours');
INSERT INTO dayconverter VALUES ('Yemen/Sana','Yemeni_Rial(YER)','AST','UTC +3 hours');
INSERT INTO dayconverter VALUES ('South_Africa/Johannesburg','Rand(ZAR)','SAST','UTC +2 hours');
INSERT INTO dayconverter VALUES ('Malta/Valletta','Euro(EUR)' ,'CEST','UTC +1 hour');
INSERT INTO dayconverter VALUES ('United_Kingdom/Isle_Of_Man','Manx_Pound(IMP)','BST','UTC - No Difference');
INSERT INTO dayconverter VALUES ('Sierra_Leone/Freetown','Leone(SLL)','GMT','UTC -1 hour');
INSERT INTO dayconverter VALUES ('Cabo_Verde/Praia','Cabo_Verdean_Escudo(CVE)','CVT','UTC -2 hours');
INSERT INTO dayconverter VALUES ('Brazil/Brasilia','Real(BRL)','BRT','UTC -3 hours');
INSERT INTO dayconverter VALUES ('United_Kingdom/Bermuda','Bermudian_Dollar(BMD)','ADT','UTC -4 hours');
INSERT INTO dayconverter VALUES ('Peru/Lima','Sol(PEN)','PET','UTC -5 hours');
INSERT INTO dayconverter VALUES ('United_States/Houston','United_States_Dollars(USD)','CDT','UTC -6 hours');
INSERT INTO dayconverter VALUES ('Chile/Easter_Island','Chilean_Peso(CLP)','EAST','UTC -7 hours');
INSERT INTO dayconverter VALUES ('United_States/Los_Angeles','United_States_Dollars(USD)','PDT','UTC -8 hours');
INSERT INTO dayconverter VALUES ('Canada/Whitehorse','Canadian_Dollar(CAD)','PDT','UTC -9 hours');
INSERT INTO dayconverter VALUES ('United_States/Fairbanks','United_States_Dollars(USD)','AKDT','UTC -10 hours'); 
INSERT INTO dayconverter VALUES ('Cook_Islands/Rarotonga','NZ_Dollar(NZD)','CKT','UTC -11 hours'); 



 

