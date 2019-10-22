INSERT INTO
  memories (
    title,
    owner_id,
    created_on,
    last_edited,
    memory_date,
    memory_dscr,
    is_funny
  )
VALUES
  (
    'Built a Cardboard House',
    (
      SELECT
        member_id
      FROM
        family_members
      WHERE
        first_name = 'Claire'
    ),
    now(),
    now(),
    '2000-12-25',
    'It was Christmas and we built a fort out of boxes! Then we slept in it.',
    TRUE
  );

INSERT INTO
  memories (
    title,
    owner_id,
    created_on,
    last_edited,
    memory_date,
    memory_dscr,
    is_funny
  )
VALUES
  (
    'Littlest Pet Shop Empire',
    (
      SELECT
        member_id
      FROM
        family_members
      WHERE
        first_name = 'Claire'
    ),
    now(),
    now(),
    '2012-11-02',
    'Spent hours and hours and hours making walls and buildings out of popcicle sticks. Covered the entire family room 
in fences! Had many towns for our 200+ Littlest Pet Shop pets.',
    TRUE
  );

INSERT INTO
  member_tags (memory_id, person_id)
VALUES
  (
    (
      SELECT
        memory_id
      FROM
        memories
      WHERE
        title = 'Littlest Pet Shop Empire'
    ),
    (
      SELECT
        member_id
      FROM
        family_members
      WHERE
        first_name = 'Sarah'
    )
  );
  
INSERT INTO
  member_tags (memory_id, person_id)
VALUES
  (
    (
      SELECT
        memory_id
      FROM
        memories
      WHERE
        title = 'Littlest Pet Shop Empire'
    ),
    (
      SELECT
        member_id
      FROM
        family_members
      WHERE
        first_name = 'Claire'
    )
  );

  INSERT INTO
  member_tags (memory_id, person_id)
VALUES
  (
    (
      SELECT
        memory_id
      FROM
        memories
      WHERE
        title = 'Littlest Pet Shop Empire'
    ),
    (
      SELECT
        member_id
      FROM
        family_members
      WHERE
        first_name = 'Kraig'
    )
  );

  INSERT INTO
  member_tags (memory_id, person_id)
VALUES
  (
    (
      SELECT
        memory_id
      FROM
        memories
      WHERE
        title = 'Built a Cardboard House'
    ),
    (
      SELECT
        member_id
      FROM
        family_members
      WHERE
        first_name = 'Lance'
    )
  );