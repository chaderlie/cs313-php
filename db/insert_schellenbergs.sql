INSERT INTO family_members (first_name, middle_name, last_name, birth_date, is_male) 
VALUES ('Peter', 'Grant', 'Schellenberg', '1980-02-02', true);

INSERT INTO family_members (first_name, middle_name, last_name, birth_date, is_male) 
VALUES ('Dayla', 'Haderlie', 'Schellenberg', '1983-03-02', false);

INSERT INTO family_members (first_name, middle_name, last_name, birth_date, is_male) 
VALUES ('Rosemary', 'RLou', 'Schellenberg', '2018-03-02', false);

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Peter')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Dayla')
WHERE first_name='Rosemary';
