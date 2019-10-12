DROP TABLE photos;
DROP TABLE member_tags;
DROP TABLE memories;
DROP TABLE site_users;
DROP TABLE family_members;

CREATE TABLE family_members (
    member_id               SERIAL              PRIMARY KEY,
    first_name              VARCHAR(25)         NOT NULL,
    middle_name             VARCHAR(25)                     ,
    last_name               VARCHAR(25)         NOT NULL,
    father_id               INTEGER             REFERENCES family_members(member_id),
    mother_id               INTEGER             REFERENCES family_members(member_id),
    spouse_id               INTEGER             REFERENCES family_members(member_id),
    birth_date              DATE                NOT NULL,
    is_male                 BOOLEAN             NOT NULL
);

CREATE TABLE site_users (
    site_user_id            SERIAL              PRIMARY KEY,
    username                VARCHAR(25)         NOT NULL,
    user_password           VARCHAR(25)         NOT NULL,
    member_account          INTEGER             REFERENCES family_members(member_id)
);

CREATE TABLE memories (
    memory_id           SERIAL                  PRIMARY KEY,
    title               VARCHAR(256)            NOT NULL,
    owner_id            INTEGER                 REFERENCES family_members(member_id),
    created_on          TIMESTAMP               NOT NULL,
    last_edited         TIMESTAMP               NOT NULL,
    memory_date         DATE                            ,
    memory_dscr         VARCHAR(5000)                   ,
    is_funny            BOOLEAN                         ,
    is_spiritual        BOOLEAN                         ,
    is_sad              BOOLEAN                         ,
    is_heartwarming     BOOLEAN                         ,
    is_scary            BOOLEAN                         ,
    is_sneaky           BOOLEAN                         
);

CREATE TABLE photos (
    photo_id            SERIAL                  PRIMARY KEY,
    memory_id           INTEGER                 REFERENCES memories(memory_id)
); 

CREATE TABLE member_tags (
    tag_id              SERIAL                  PRIMARY KEY,
    memory_id           INTEGER                 REFERENCES memories(memory_id),
    person_id           INTEGER                 REFERENCES family_members(member_id)
);