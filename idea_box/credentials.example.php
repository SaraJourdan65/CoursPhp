<html>
  <head>
    <title>
      Convertisseur Euro en Dollar
    </title>
  </head>
  <body>
    <p>
      <?php
        if (isset($_GET['euro']))
        {
          $cours = 1.0684;
          $dollar = $_GET['euro'] * $cours;
          print($_GET['euro'] . " € = $dollar \$.");
        }
        else
        {
          print("Ajoutez <code>?euro=10</code> à la fin de l'adresse du site.");
        }
        if (isset($_GET['dollar']))
        {
          $cours = 1.0684;
          $euro = $_GET['dollar' * $cours;
          print($_GET['dollar'] . " $ = $euro\€.");
        }
        else
        {
          print("Ajoutez <code>?dollar=50</code> à la fin de l'adresse du site.");
        }
      ?>
    </p>
    <hr>
    <p>
      La variable <code>$_GET</code> contient <br>
      <pre><?php var_dump($_GET); ?></pre>
    </p>
  </body>
</html>
