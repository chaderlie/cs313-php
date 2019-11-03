INSERT INTO family_members (first_name, middle_name, last_name, birth_month, birth_date, is_male) 
VALUES ('Peter', 'Grant', 'Schellenberg', 10, 25, true);

INSERT INTO family_members (first_name, middle_name, last_name, birth_month, birth_date, is_male) 
VALUES ('Dayla', 'Haderlie', 'Schellenberg', 11, 30, false);

INSERT INTO family_members (first_name, middle_name, last_name, birth_month, birth_date, is_male) 
VALUES ('Rosemary', 'RLou', 'Schellenberg', 10, 3, false);

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Peter')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Dayla')
WHERE first_name='Rosemary';

UPDATE family_members
SET spouse_id = (SELECT member_id FROM family_members WHERE first_name='Peter')
WHERE first_name='Dayla';

UPDATE family_members
SET spouse_id = (SELECT member_id FROM family_members WHERE first_name='Dayla')
WHERE first_name='Peter';