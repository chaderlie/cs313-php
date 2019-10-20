UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Kirk')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Kathryn')
WHERE first_name='Lance';

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Kirk')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Kathryn')
WHERE first_name='Dayla';

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Kirk')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Kathryn')
WHERE first_name='Kraig';

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Kirk')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Kathryn')
WHERE first_name='Claire';

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Kirk')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Kathryn')
WHERE first_name='Sarah';

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Kirk')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Kathryn')
WHERE first_name='Laura';

UPDATE family_members
SET father_id = (SELECT member_id FROM family_members WHERE first_name='Kirk')
,   mother_id = (SELECT member_id FROM family_members WHERE first_name='Kathryn')
WHERE first_name='Camille';