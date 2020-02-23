INSERT INTO types (type_name, type_id) VALUES ('normal',1);
INSERT INTO types (type_name, type_id) VALUES ('fighting',2);
INSERT INTO types (type_name, type_id) VALUES ('flying',3);
INSERT INTO types (type_name, type_id) VALUES ('poison',4);
INSERT INTO types (type_name, type_id) VALUES ('ground',5);
INSERT INTO types (type_name, type_id) VALUES ('rock',6);
INSERT INTO types (type_name, type_id) VALUES ('bug',7);
INSERT INTO types (type_name, type_id) VALUES ('ghost',8);
INSERT INTO types (type_name, type_id) VALUES ('steel',9);
INSERT INTO types (type_name, type_id) VALUES ('fire',10);
INSERT INTO types (type_name, type_id) VALUES ('water',11);
INSERT INTO types (type_name, type_id) VALUES ('grass',12);
INSERT INTO types (type_name, type_id) VALUES ('electric',13);
INSERT INTO types (type_name, type_id) VALUES ('psychic',14);
INSERT INTO types (type_name, type_id) VALUES ('ice',15);
INSERT INTO types (type_name, type_id) VALUES ('dragon',16);
INSERT INTO types (type_name, type_id) VALUES ('dark',17);
INSERT INTO types (type_name, type_id) VALUES ('fairy',18);

INSERT INTO pokeUser (username, userpassword) VALUES ('admin','admin');

INSERT INTO pokemon (   name
                     ,  type_1
                     ,  type_2
                     ,  pokedex) 
              VALUES (  'Lucario'
                     ,  2
                     ,  9
                     ,  448);

INSERT INTO pokemon (   name
                     ,  type_1
                     ,  type_2
                     ,  pokedex) 
              VALUES ( 'Gengar'
                     ,  8
                     ,  4
                     ,  94); 

INSERT INTO pokemon (   name
                     ,  type_1
                     ,  type_2
                     ,  pokedex) 
              VALUES ( 'Gardevoir'
                     ,  14
                     ,  18
                     ,  282); 
   
INSERT INTO pokemon (   name
                     ,  type_1
                     ,  type_2
                     ,  pokedex) 
              VALUES (  'Charizard'
                     ,  10
                     ,  3
                     ,  6); 

INSERT INTO team (name, user_id) VALUES ('TEAM BOSS',1);

INSERT INTO teamset (       team_id
                     ,      pokemon_id)
              VALUES (      1
                     ,      1);
INSERT INTO teamset (       team_id
                     ,      pokemon_id)
              VALUES (      1
                     ,      2);
INSERT INTO teamset (       team_id
                     ,      pokemon_id)
              VALUES (      1
                     ,      3);
INSERT INTO teamset (       team_id
                     ,      pokemon_id)
              VALUES (      1
                     ,      4);
