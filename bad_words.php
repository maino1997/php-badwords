<?php 

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Harum praesentium fugiat magni atque unde, nostrum animi nulla voluptatibus accusantium dolores. 
Cupiditate enim unde, nesciunt cumque consectetur corrupti magni? Corrupti, dignissimos';

// First method with control 
$word = $_GET ? $_GET['parola'] : '';


// Without control 
// $word = $_GET['parola'];

$new_text = str_replace($word, '***', $text);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Testo non censurato</h2>
    <p><?php echo$text ?></p>
    <br>
    <br>
    <h2>Testo con parola <?php echo$word ?> cenruata</h2>
    <p><?php echo$new_text ?></p>
</body>
</html>