<?php
session_start();
$file = file_get_contents("logas.txt");
$value = unserialize($file);
echo "Main window - ", $value[0],"<br>";
echo "Fish window - ",$value[1],"<br>";
echo "Chick window - ",$value[2],"<br>";
echo "Goose window - ",$value[3],"<br>";
?>
<form action="index.php">
    <button>Main</button>
</form>