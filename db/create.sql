CREATE TABLE types
(  id          SERIAL      NOT NULL PRIMARY KEY
,  type_name   VARCHAR(15) NOT NULL UNIQUE
,  type_id     INT         NOT NULL UNIQUE
);

CREATE TABLE pokemon
(  id       SERIAL         NOT NULL PRIMARY KEY
,  name     VARCHAR(50)    NOT NULL
,  type_1   INT            NOT NULL REFERENCES types (type_id)
,  type_2   INT                     REFERENCES types (type_id)
,  pokedex  INT            NOT NULL UNIQUE
);

CREATE TABLE pokeUser
( id              SERIAL            NOT NULL PRIMARY KEY
, username        VARCHAR (50)      NOT NULL UNIQUE
, userpassword    VARCHAR (1000)    NOT NULL
);

CREATE TABLE team
(  id          SERIAL      NOT NULL PRIMARY KEY
,  team_name   VARCHAR(99) NOT NULL
,  user_id     INT         NOT NULL REFERENCES pokeUser(id)
,  pokemon_1   INT                  REFERENCES pokemon(pokedex)
,  pokemon_2   INT                  REFERENCES pokemon(pokedex)
,  pokemon_3   INT                  REFERENCES pokemon(pokedex)
,  pokemon_4   INT                  REFERENCES pokemon(pokedex)
,  pokemon_5   INT                  REFERENCES pokemon(pokedex)
,  pokemon_6   INT                  REFERENCES pokemon(pokedex)
);