<html>
<style>
    body { background: url(back.jpg); }
  </style>
  <body>
<h4>Поиск по данным:</h4>
<form action='' method="GET">
    <input type="text" placeholder="поиск" name="search">
    <input type='submit' value='Search' name="Submit">
</form>
<?php
include_once 'class.php';
$Companies_array->searchphp($_GET['search']);
?>



    <form action="index.php" method="GET">
        <button>Back</button>
    </form>
    </body>
</html>