<?php
require 'connect.php';
if (isset($_POST['class'])){
    $class = $_POST['class'];

    $query = "INSERT INTO $class (gino, ugo) VALUES ('$class', '$class')";
    $result = mysqli_query($connection, $query);
    if($result){
        $smsg = "query eseguita correttamente";
    }
    else{
        $fmsg ="Errore nell'esecuzione della query";
    }
}
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>elaboration.php</title>
  </head>
  <body>
    <div class="container">

    </div>
  </body>
</html>
