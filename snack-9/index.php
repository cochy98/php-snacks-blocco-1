<?php
/*
  Partendo da questa stringa $string = "c,i,n,q,u,e"; 
  trasforma la stringa in un array con un elemento per carattere,

    $array = ['c','i','n','q','u','e'];

  infine crea un array associativo della forma:
    
    $result = [
      'c' => 'c',
      'i' => 'i',
      'n' => 'n',
      'q' => 'q',
      'u' => 'u',
      'e' => 'e'
    ];
*/

$string = "c,i,n,q,u,e";
$result = explode(',', $string);
var_dump($result);

$resultAssoc = [];
foreach($result as $char){
  $resultAssoc[$char] = $char;
}
var_dump($resultAssoc);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP snack</title>
</head>
<body>
  <h3>Snack 9</h3>
</body>
</html>
