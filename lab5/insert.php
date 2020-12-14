<html>
<style>
    body { background: url(back.jpg); }
  </style>
<body>



<?php
include_once 'class.php';

if(isset($_POST['Title']) && isset($_POST['Sobstvennost']) && isset($_POST['Employees']) 
&& !empty($_POST['Title']) && !empty($_POST['Sobstvennost']) && !empty($_POST['Employees']))
{      
$Companies_array->addRow(array("Title"=>$_POST['Title'],"Sobstvennost"=>$_POST['Sobstvennost'],"Employees"=>$_POST['Employees']));
$Companies_array->writephp($Companies_array->data);
    echo "Added<br>";
}
else{exit("Неверно введены данные!");}
?>

    <form action="index.php" method="GET">
        <button>Back</button>
    </form>
    </body>
</html>