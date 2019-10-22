i i myDb.sql \ i insert_hockers.sql \ i insert_haderlies.sql \ i insert_ln_haderlies.sql \ i insert_schellenbergs.sql \ i add_k_and_k_kids.sql \ i insert_stories.sql
SELECT
  *
FROM
  family_members;
SELECT
  title,
  memory_dscr,
  owner_id
FROM
  memories;
SELECT
  *
FROM
  member_tags;
SELECT
  first_name,
  last_name
FROM
  site_users su,
  family_members fm
WHERE
  su.member_id = fm.member_id;
SELECT
  first_name,
  last_name
FROM
  member_tags mt,
  family_members fm
WHERE
  mt.memory_id = 2
  AND mt.person_id = fm.member_id;