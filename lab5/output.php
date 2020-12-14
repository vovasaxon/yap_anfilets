<html>
<style>
    body { background: url(back.jpg); }
  </style>
  <body>

<?php include_once 'class.php';
  echo'  <h4>Вывод данных:</h4>';
$Companies_array->output();
?>

    <form action="index.php" method="GET">
        <button>Back</button>
    </form>
    </body>
</html>
