<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Haderlie et al</title>
  <link rel="stylesheet" type="text/css" href="family_tree.css" />
  <style>
    img.intext {
      border-radius: 5px;
      width: 15%;
      height: auto;
      margin: 3px 6px 3px 6px;
    }
  </style>
</head>

<body>
  <header>
    <h1 class="logo">Haderlie Et Al.</h1>
  </header>
  <hr />
  <ul class="menu">
    <li><a href="homepage.php">Home</a></li>
    <li><a href="family_tree.php">Family Tree</a></li>
    <li><a href="memory_list.php">Memories</a></li>
    <li><a href="add_memory.php">Add a Memory</a></li>
  </ul>
  <div class="a">
    <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Welcome to Haderlie et al.</h1>
    <p>
      This website was created for Kirk and Katie Haderlie and all their descendents (and kids-in-law, of course).
      Still working on the content and style of the thing.
      Should be working good soon!
    </p>
    <h3 style="font-family:'Yu Gothic'; text-transform: uppercase;">Who are Kirk and Katie?</h3>
    <p>
      Kirk and Katie were married in 1990 in the Los Angeles temple. Just over a year later, their
      first child was born! Six others followed to come to a total of two boys and five girls. Three of
      those children are now married. The second oldest, Dayla, and her husband, Peter, have their own child now, making Kirk and Katie
      grandparents. The oldest Haderlie child, Lance, and his wife, Nicole, are expecting their first baby
      to arrive in mid-February. Alex and Claire have yet to make any grand announcements, but we will see how
      that goes in the next year or so.</p>
    <p>
      <h3 style="font-family:'Yu Gothic'; text-transform: uppercase;">Birthdays!</h3>
      The following family members have birthdays in the next few months:
      <p>
        <ul>
          <?php
          $month = date('m');
          $next_month = ($month + 1) % 12;
          if ($next_month == 0)
            $next_month = 12;
          echo $month;
          echo "<br/>";
          echo $next_month;
          echo "<br/>";

          $query = 'SELECT first_name, last_name, birth_date, birth_month FROM family_members WHERE (birth_month = :month OR birth_month = :next_month) ORDER BY birth_month ASC, birth_date ASC;';

          $statement = $db->prepare($query);
          $statement->bindValue(':month', $month);
          $statement->bindValue(':next_month', $next_month);

          foreach ($db-execute as $row) {
            $first = $row['first_name'];
            $last = $row['last_name'];
            $birth_month = $row['birth_month'];
            $day = $row['birth_date'];

            $dateObj   = DateTime::createFromFormat('!m', $birth_month);
            $monthName = $dateObj->format('F');
            echo $first;
            echo $last;
            echo $birth_month;
            $order = "";
            if ($day == 1) {
              $order = "st";
            } else if ($day == 2) {
              $order = "nd";
            } else if ($day == 3) {
              $order = "rd";
            } else {
              $order = "th";
            }
            echo "<li>$first $last, will have a birthday on: $monthName $day$order</li> ";
            echo "<br/>";
            echo "<hr>";
          }
          ?>
        </ul>
        <h4 style="font-family:'Yu Gothic'; text-transform: uppercase;">The following family members
          have created an account on this website</h4>

        <ul>
          <?php
          foreach ($db->query('SELECT first_name,
                last_name 
            FROM site_users su, family_members fm
            WHERE su.member_id = fm.member_id;') as $row) {
            $first = $row['first_name'];
            $last = $row['last_name'];
            echo "<li>$first $last</li> ";
            echo "<br/>";
          }
          ?>
        </ul>
      </p>

    </p>
    <div style="text-align: center; font-family: Arial; font-size: 18px;">
      <a href="family_tree.php" class="buttonlike">Family Tree</a>
      <a href="memory_list.php" class="buttonlike">Memories</a>
      <a href="add_memory.php" class="buttonlike">Add Memory</a>

    </div>
  </div>
  <footer>Thank you for visiting!</footer>
</body>

</html>