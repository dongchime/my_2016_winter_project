<?php
  $conn = mysqli_connect("localhost", "root", "heeshinV369");
  mysqli_select_db($conn, "plfixturesproject");
  $result = mysqli_query($conn, 'SELECT * FROM fixtures');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type=text/css href="stylefs.css">
  </head>
  <body>
    <header>
      <a href="http://localhost/PLFixturesProject/footballsc.php"><img src="https://resources-pl.pulselive.com/ver/i/elements/premier-league-logo-header.png" alt="EPL"></a>
      <h1><a href="http://localhost/PLFixturesProject/footballsc.php">Premier League Fixtures</a></h1>
    </header>
        <article>
          <br>
          Team: <input type=text name=team>
          Date: <input type=text name=date>
          Location: <input type=text name=location>
          <input type=submit value="search">

      <?php
        echo "<table border=1 <tr> <th>HomeTeam</th> <th>AwayTeam</th> <th>Date</th> <th>Time</th> <th>Location</th> </tr>";
        $n = 1;
        while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['HomeTeam'] . "</td>";
          echo "<td>" . $row['AwayTeam'] . "</td>";
          echo "<td>" . $row['Date'] . "</td>";
          echo "<td>" . $row['Time'] . "</td>";
          echo "<td>" . $row['Location'] . "</td>";
          echo "</tr>";
          $n++;
        }
        echo "</table>";
        mysqli_close($conn);
       ?>
    </article>
  </body>
</html>
