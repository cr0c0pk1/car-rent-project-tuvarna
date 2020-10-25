create table if not exists avtomobil(
id_vid int(11) NOT NULL,
id_model int(11) NOT NULL,
cena decimal(5,2) DEFAULT NULL,
id_avt int(11) NOT NULL,
Primary key (id_avt));


create table klient(
ime_k varchar(20),
adres_k varchar(50),
tel_k varchar(13),
id_klient int(11),
primary key (id_klient));


create table slujitel(
ime_s varchar(20),
id_poz int(11),
tel_s varchar(13),
id_slujitel int(11),
primary key (id_slujitel));


create table naem(
id_klient int(11),
id_avt int(11),
id_slujitel int(11),
data date,
br_dni int(11),
id_naem int(11),
primary key (id_naem));


create table marka(
id_marka int(11),
marka varchar(20),
primary key (id_marka));


create table model(
id_model int(11),
model varchar(20),
id_marka int(11),
primary key(id_model));


create table poziciq(
id_poz int(11),
poziciq varchar(20),
primary key(id_poz));


create table vid(
id_vid int(11),
vid_avt varchar(20),
primary key(id_vid));



alter table avtomobil
add foreign key (id_vid)
references vid(id_vid);

alter table avtomobil
add foreign key (id_model)
references model(id_model);

alter table slujitel
add foreign key (id_poz)
references poziciq(id_poz);

alter table naem
add foreign key (id_klient)
references klient(id_klient);

alter table naem
add foreign key (id_avt)
references avtomobil(id_avt);

alter table naem
add foreign key (id_slujitel)
references slujitel(id_slujitel);

alter table model
add foreign key (id_marka)
references marka(id_marka);



insert into vid(id_vid, vid_avt)
values(1, 'sedan');

insert into vid(id_vid, vid_avt)
values(2, 'hatchback');

insert into vid(id_vid, vid_avt)
values(3, 'touring');

insert into vid(id_vid, vid_avt)
values(4, 'convertible');

insert into vid(id_vid, vid_avt)
values(5, 'pickup');

insert into marka(id_marka, marka)
values(1, 'Honda');

insert into marka(id_marka, marka)
values(2, 'Honda');

insert into marka(id_marka, marka)
values(3, 'BMW');

insert into marka(id_marka, marka)
values(4, 'Ford');

insert into marka(id_marka, marka)
values(5, 'Toyota');

insert into model(id_model, model, id_marka)
values(1, 'Accord', 1);

insert into model(id_model, model, id_marka)
values(2, 'Civic', 2);

insert into model(id_model, model, id_marka)
values(3, '525', 3);

insert into model(id_model, model, id_marka)
values(4, 'Mustang', 4);

insert into model(id_model, model, id_marka)
values(5, 'Tundra', 5);


insert into avtomobil(id_vid, id_model, cena, id_avt)
values(1,1,50,1);

insert into avtomobil(id_vid, id_model, cena, id_avt)
values(2,2,30,2);

insert into avtomobil(id_vid, id_model, cena, id_avt)
values(3,3,80,3);

insert into avtomobil(id_vid, id_model, cena, id_avt)
values(4,4,90,4);

insert into avtomobil(id_vid, id_model, cena, id_avt)
values(5,5,120,5);

insert into klient(ime_k, adres_k, tel_k, id_klient)
values('Ivan','Varna, ul. Knyaz Nikolaevich, N:3','0899145649',1);

insert into klient(ime_k, adres_k, tel_k, id_klient)
values('Georgi','Varna, ul. Vasil Drumev, N:17','0891419763',2);

insert into klient(ime_k, adres_k, tel_k, id_klient)
values('Vasil','Burgas, ul. General Parensov, N:10','0883412698',3);

insert into klient(ime_k, adres_k, tel_k, id_klient)
values('Nikolay','Ruse, ul. Lyuben Karavelov, N:35','0892373465',4);

insert into klient(ime_k, adres_k, tel_k, id_klient)
values('Ivan','Varna, bul. 8-mi Primorski polk, N:41','0872653417',5);

insert into poziciq(id_poz, poziciq)
values(1,'avtomonotior');

insert into poziciq(id_poz, poziciq)
values(2,'rabotnik - avtomivka');

insert into poziciq(id_poz, poziciq)
values(3,'gumadjiq');

insert into poziciq(id_poz, poziciq)
values(4,'rabotnik - poddryjka');

insert into poziciq(id_poz, poziciq)
values(5,'shofior');

insert into slujitel(ime_s, id_poz, tel_s, id_slujitel)
values('Valentin', 1, '0893637982', 1);

insert into slujitel(ime_s, id_poz, tel_s, id_slujitel)
values('Kostadin', 2, '0898637956', 2);

insert into slujitel(ime_s, id_poz, tel_s, id_slujitel)
values('Ivan', 3, '0871914462', 3);

insert into slujitel(ime_s, id_poz, tel_s, id_slujitel)
values('Lyubomir', 4, '0873696724', 4);

insert into slujitel(ime_s, id_poz, tel_s, id_slujitel)
values('Petar', 5, '0890695414', 5);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(1, 1, 1, '2019-03-05', 3, 1);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(2, 2, 2, '2019-03-20', 5, 2);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(3, 3, 3, '2019-06-04', 2, 3);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(4, 4, 4, '2019-06-15', 10, 4);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(5, 5, 5, '2019-06-15', 5, 5);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(1, 2, 2, '2019-04-10', 3, 6);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(1, 2, 2, '2019-06-09', 7, 7);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(3, 1, 4, '2019-06-20', 4, 8);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(4, 5, 1, '2019-07-15', 2, 9);

insert into naem(id_klient, id_avt, id_slujitel, data, br_dni, id_naem)
values(5, 5, 3, '2019-09-16', 4, 10);


CREATE TABLE IF NOT EXISTS admin (
id_admin int(11),
username varchar(10),
password varchar(20),
Primary key(id_admin));

insert into admin(id_admin, username, password)
values(1, 'admin', 'admin');