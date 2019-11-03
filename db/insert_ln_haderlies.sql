INSERT INTO family_members (first_name, last_name, birth_month, birth_date, is_male) 
VALUES ('Nicole', 'Haderlie', 3, 6, false);

INSERT INTO family_members (first_name, middle_name, last_name, birth_month, birth_date, is_male) 
VALUES ('Lance', 'Frederick', 'Haderlie',  10, 22, true);

UPDATE family_members
SET spouse_id = (SELECT member_id FROM family_members WHERE first_name='Lance')
WHERE first_name='Nicole';

UPDATE family_members
SET spouse_id = (SELECT member_id FROM family_members WHERE first_name='Nicole')
WHERE first_name='Lance';