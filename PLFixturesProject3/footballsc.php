<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type=text/css href="stylefs.css">
  </head>
  <body>
    <header>
      <img src="https://resources-pl.pulselive.com/ver/i/elements/premier-league-logo-header.png" alt="EPL">
      <h1><a href="http://localhost/PLFixturesProject/footballsc.php">Premier League Fixtures</a></h1>
    </header>
    <nav>
      <ol>
        <?php
          echo file_get_contents("list.txt");
         ?>
      </ol>
    </nav>
    <article>

        <?php
          if (empty($_GET['id']) == false)
          {
            echo file_get_contents($_GET['id'].".txt");
          }
          else
          {
            echo "<li><img src='https://media.giphy.com/media/5h5JtN14hNTTa/giphy.gif' alt='1gif'></li>";
            echo "<li><img src='http://getfile.fmkorea.com/getfile.php?code=d7054ebc0e43df08c181b20e85f975ab&file=http%3A%2F%2Fs3.amazonaws.com%2Frapgenius%2F1380489012_wayne-rooney-free-kick1.gif&r=' alt='2gif'></li>";
            echo "<li><img src='https://static1.squarespace.com/static/51a2e9abe4b01fcfc7489cbe/t/5521b836e4b07497b20347df/1428273300279/' alt='3gif'></li>";
          }
         ?>

    </article>
  </body>
</html>
