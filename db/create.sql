CREATE TABLE types
(  id          SERIAL      NOT NULL PRIMARY KEY
,  type_name   VARCHAR(15) NOT NULL
,  type_id     INT         NOT NULL
);

CREATE TABLE pokemon
(  id       SERIAL         NOT NULL PRIMARY KEY
,  name     VARCHAR(15)    NOT NULL
,  type_1   INT            NOT NULL REFERENCES types(type_id)
,  type_2   INT                     REFERENCES types(type_id)
,  pokedex  INT            NOT NULL
);

CREATE TABLE pokeUser
( id              SERIAL            NOT NULL PRIMARY KEY
, username        VARCHAR (50)      NOT NULL UNIQUE
, userpassword    VARCHAR (1000)    NOT NULL
);

CREATE TABLE team
(  id       SERIAL         NOT NULL PRIMARY KEY
,  name     VARCHAR(50)    NOT NULL
,  user_id  INT            NOT NULL REFERENCES pokeUser(id)
);

CREATE TABLE moves
(  id          SERIAL      NOT NULL PRIMARY KEY
,  move_name   VARCHAR(15)
,  move_type   INT                  REFERENCES types(type_id)
);


CREATE TABLE moveset
(  id          SERIAL      NOT NULL PRIMARY KEY
,  pokemon_id  INT         NOT NULL REFERENCES pokemon(id)
,  move_id     INT                  REFERENCES moves(id)
);

CREATE TABLE teamset
(  id          SERIAL      NOT NULL PRIMARY KEY
,  team_id     INT                  REFERENCES team(id)
,  pokemon_id  INT                  REFERENCES pokemon(id)
);