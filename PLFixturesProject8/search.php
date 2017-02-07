<?php
  $conn=mysql_connect("localhost","root","heeshinV369");
  $team = $_POST["team"];

  if ($team == 'Arsenal')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Arsenal\' OR AwayTeam=\'Arsenal\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Bournemouth')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Bournemouth\' OR AwayTeam=\'Bournemouth\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Burnley')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Burnley\' OR AwayTeam=\'Burnley\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Chelsea')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Chelsea\' OR AwayTeam=\'Chelsea\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Crystal Palace')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Crystal Palace\' OR AwayTeam=\'Crystal Palace\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Everton')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Everton\' OR AwayTeam=\'Everton\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Hull')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Hull\' OR AwayTeam=\'Hull\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Leicester')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Leicester\' OR AwayTeam=\'Leicester\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Liverpool')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Liverpool\' OR AwayTeam=\'Liverpool\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Man Utd')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Man Utd\' OR AwayTeam=\'Man Utd\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Man City')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Man City\' OR AwayTeam=\'Man City\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Middlesbrough')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Middlesbrough\' OR AwayTeam=\'Middlesbrough\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Southampton')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Southampton\' OR AwayTeam=\'Southampton\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Stoke')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Stoke\' OR AwayTeam=\'Stoke\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Sunderland')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Sunderland\' OR AwayTeam=\'Sunderland\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Swansea')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Swansea\' OR AwayTeam=\'Swansea\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Spurs')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Spurs\' OR AwayTeam=\'Spurs\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'Watford')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'Watford\' OR AwayTeam=\'Watford\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'West Brom')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'West Brom\' OR AwayTeam=\'West Brom\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  else if ($team == 'West Ham')
  {
    $query = 'SELECT * FROM `plfixturesproject`.`fixtures` WHERE HomeTeam=\'West Ham\' OR AwayTeam=\'West Ham\'';
    $res = mysql_query($query) or die(mysql_error());
  }
  
  echo "<table border=1 <tr> <th>HomeTeam</th> <th>AwayTeam</th> <th>Date</th> <th>Time</th> <th>Location</th> </tr>";
  while($fetch=mysql_fetch_array($res, MYSQL_ASSOC))
  {
    echo "<tr>";
    echo "<td>" . $fetch['HomeTeam'] . "</td>";
    echo "<td>" . $fetch['AwayTeam'] . "</td>";
    echo "<td>" . $fetch['Date'] . "</td>";
    echo "<td>" . $fetch['Time'] . "</td>";
    echo "<td>" . $fetch['Location'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysql_close($conn);
 ?>
