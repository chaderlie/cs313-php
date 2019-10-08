CREATE TABLE users 
( user_id           INTEGER         PRIMARY KEY
, username          VARCHAR(30)     NOT NULL   
);

CREATE TABLE speakers 
( speaker_id        INTEGER         PRIMARY KEY
, first_name        VARCHAR(50)     NOT NULL
, last_name         VARCHAR(50)     NOT NULL
, calling           VARCHAR(256)    NOT NULL
);

CREATE TABLE conferences
( conference_id     INTEGER         PRIMARY KEY 
, speaker_id        INTEGER         REFERENCES speakers(speaker_id)
, conference_date   DATE            NOT NULL
);

CREATE SEQUENCE conferences_n1 START WITH 1001;

CREATE TABLE notes
( note_id           INTEGER         PRIMARY KEY
, user_id           INTEGER         REFERENCES users(user_id)
, talk_id           INTEGER         REFERENCES talks(talk_id)
, note_content      VARCHAR(256)
);

CREATE SEQUENCE notes START WITH 1001;

CREATE TABLE talks 
( talk_id           INTEGER         PRIMARY KEY
, conference_id     INTEGER         REFERENCES conferences(conference_id)
, speaker_id        INTEGER         REFERENCES speakers(speaker_id)
);

CREATE SEQUENCE talk_n1 START WITH 1001;

INSERT INTO conferences
( 
,     
);
INSERT INTO talks (talk_id, conference_id, speaker_id) VALUES ();

INSERT INTO notes (note)