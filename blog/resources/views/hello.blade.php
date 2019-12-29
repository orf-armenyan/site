Hello world
<?php
echo "<br>Cтрока " . __LINE__ . " в файле " . __FILE__."<br>Директория-".__DIR__."<br>";
$model = "Apple II";
$producer = "Apple";
$year = 1978;
 
$data = compact('model', 'producer', 'year');
print_r($data);
?>