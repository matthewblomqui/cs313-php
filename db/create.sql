CREATE TABLE pokemon
(  id       SERIAL      NOT NULL PRIMARY KEY
,  name     VARCHAR(15) NOT NULL
,  type     VARCHAR(10) NOT NULL
,  sub_type VARCHAR(10)
,  ability  VARCHAR(15) NOT NULL
,  nature   VARCHAR(10) NOT NULL
);

CREATE TABLE moves
(  id          SERIAL NOT NULL PRIMARY KEY
,  move_name   VARCHAR(15)
,  move_type   VARCHAR(10)
);

CREATE TABLE moveset
(  id          SERIAL NOT NULL PRIMARY KEY
,  pokemon_id  INT NOT NULL REFERENCES pokemon(id)
,  move_id     INT REFERENCES moves(id)
);

CREATE TABLE team
(  id          SERIAL NOT NULL PRIMARY KEY
,  team_id     INT
,  pokemon_id  INT REFERENCES pokemon(id)
,  team_name   VARCHAR(20)
);