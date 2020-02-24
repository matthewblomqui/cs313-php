INSERT INTO pokeUser (username, userpassword) VALUES ('admin','admin');

COPY pokemon FROM 'pokedex.csv' DELIMITERS ',' CSV;

\i pokedex.sql;

-- INSERT INTO pokemon (   name
--                      ,  type_1
--                      ,  type_2
--                      ,  pokedex) 
--               VALUES (  'Lucario'
--                      ,  2
--                      ,  9
--                      ,  448);

-- INSERT INTO pokemon (   name
--                      ,  type_1
--                      ,  type_2
--                      ,  pokedex) 
--               VALUES ( 'Gengar'
--                      ,  8
--                      ,  4
--                      ,  94); 

-- INSERT INTO pokemon (   name
--                      ,  type_1
--                      ,  type_2
--                      ,  pokedex) 
--               VALUES ( 'Gardevoir'
--                      ,  14
--                      ,  18
--                      ,  282); 
   
-- INSERT INTO pokemon (   name
--                      ,  type_1
--                      ,  type_2
--                      ,  pokedex) 
--               VALUES (  'Charizard'
--                      ,  10
--                      ,  3
--                      ,  6); 

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
