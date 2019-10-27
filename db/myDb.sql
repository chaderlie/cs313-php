/*Create the family member table*/
CREATE TABLE family_members (
    member_id               SERIAL              PRIMARY KEY
    , first_name              VARCHAR(25)         NOT NULL
    , middle_name             VARCHAR(25)                     
    , last_name               VARCHAR(25)         NOT NULL
    , father_id               INTEGER             REFERENCES family_members(member_id)
    , mother_id               INTEGER             REFERENCES family_members(member_id)
    , spouse_id               INTEGER             REFERENCES family_members(member_id)
    , birth_date              DATE                NOT NULL
    , is_male                 BOOLEAN             NOT NULL
);

/*Create the table of all the users of the site*/
CREATE TABLE site_users (
      site_user_id            SERIAL              PRIMARY KEY
    , username                VARCHAR(25)         NOT NULL
    , user_password           VARCHAR(25)         NOT NULL
    , member_id               INTEGER             REFERENCES family_members(member_id)
);

/*Create the table for all the memories*/
CREATE TABLE memories (
    memory_id                   SERIAL                  PRIMARY KEY
    , title                     VARCHAR(256)            NOT NULL
    , owner_id                  INTEGER                 REFERENCES family_members(member_id)
    , created_on                TIMESTAMP               NOT NULL
    , last_edited               TIMESTAMP               NOT NULL
    , memory_date               DATE                            
    , memory_dscr               TEXT                   
    , is_funny                  BOOLEAN                         
    , is_spiritual              BOOLEAN                         
    , is_sad                    BOOLEAN                         
    , is_heartwarming           BOOLEAN                         
    , is_scary                  BOOLEAN                         
    , is_sneaky                 BOOLEAN  
    , got_someone_in_trouble    BOOLEAN                       
);

/*Create a table of all the photos, which are linked to a memory*/
CREATE TABLE photos (
    photo_id            SERIAL                  PRIMARY KEY
    , memory_id           INTEGER                 REFERENCES memories(memory_id)
); 

/*Create a table of all the family members that are tagged in a memory*/
CREATE TABLE member_tags (
    tag_id                SERIAL                  PRIMARY KEY
    , memory_id           INTEGER                 REFERENCES memories(memory_id)
    , person_id           INTEGER                 REFERENCES family_members(member_id)
);