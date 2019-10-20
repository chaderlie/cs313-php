INSERT INTO family_members (first_name, last_name, birth_date, is_male) 
VALUES ('Nicole', 'Haderlie', '1983-03-02', false);

INSERT INTO family_members (first_name, middle_name, last_name, birth_date, is_male) 
VALUES ('Lance', 'Frederick', 'Haderlie', '1983-03-02', true);

INSERT INTO family_members (first_name, middle_name, last_name, birth_date, is_male) 
VALUES ('Marie', 'Lydia', 'Haderlie', '2020-03-02', false);

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Lance')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Nicole')
WHERE first_name='Marie';
