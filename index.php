<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">

    <title>PHP Intro | Templates</title>
  </head>

  <body>


    echo "Today is " . date(Y/m/d) . <br>;


    <?php include './header.php'; ?>
      <main class="section-main">
        <?php echo '<h1 class="main-title">This 
        is site is build with templates</h1>' ?>
      </main>
    <?php include './footer.php'; ?>
  </body>
</html>