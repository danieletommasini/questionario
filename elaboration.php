<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questionario";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['class']) && isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3']) && isset($_POST['c4']) && isset($_POST['c5']) && isset($_POST['c6']) && isset($_POST['c7']) && isset($_POST['c8']) && isset($_POST['c9']) && isset($_POST['c10']) && isset($_POST['c11']) && isset($_POST['c12']) && isset($_POST['c13']) && isset($_POST['c14']) && isset($_POST['c15']) && isset($_POST['c16']) && isset($_POST['c17']) && isset($_POST['c18']) && isset($_POST['c19']) && isset($_POST['c20']) && isset($_POST['c21']) && isset($_POST['c22']) && isset($_POST['c23']) && isset($_POST['c24']) && isset($_POST['c25']) && isset($_POST['c26']) && isset($_POST['c27']) && isset($_POST['c28']) && isset($_POST['c29']) && isset($_POST['c30']) && isset($_POST['c31']) && isset($_POST['c32']) && isset($_POST['c33']) && isset($_POST['c34']) && isset($_POST['c35'])){
      
      $sql = $conn->prepare("INSERT INTO alunni (id, classe, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35)
        VALUES ('', :class', ':c1', ':c2', ':c3', ':c4', ':c5', ':c6', ':c7', ':c8', ':c9', ':c10', ':c11', ':c12', ':c13', ':c14', ':c15', ':c16', ':c17', ':c18', ':c19', ':c20', ':c21', ':c22', ':c23', ':c24', ':c25', ':c26', ':c27', ':c28', ':c29', ':c30', ':c31', ':c32', ':c33', ':c34', ':c35',)");
      $sql->bindParam(':class', $class);
      $sql->bindParam(':c1', $c1);
      $sql->bindParam(':c2', $c2);
      $sql->bindParam(':c3', $c3);
      $sql->bindParam(':c4', $c4);
      $sql->bindParam(':c5', $c5);
      $sql->bindParam(':c6', $c6);
      $sql->bindParam(':c7', $c7);
      $sql->bindParam(':c8', $c8);
      $sql->bindParam(':c9', $c9);
      $sql->bindParam(':c10', $c10);
      $sql->bindParam(':c11', $c11);
      $sql->bindParam(':c12', $c12);
      $sql->bindParam(':c13', $c13);
      $sql->bindParam(':c14', $c14);
      $sql->bindParam(':c15', $c15);
      $sql->bindParam(':c16', $c16);
      $sql->bindParam(':c17', $c17);
      $sql->bindParam(':c18', $c18);
      $sql->bindParam(':c19', $c19);
      $sql->bindParam(':c21', $c20);
      $sql->bindParam(':c22', $c21);
      $sql->bindParam(':c23', $c22);
      $sql->bindParam(':c24', $c23);
      $sql->bindParam(':c25', $c24);
      $sql->bindParam(':c26', $c25);
      $sql->bindParam(':c27', $c26);
      $sql->bindParam(':c27', $c27);
      $sql->bindParam(':c28', $c28);
      $sql->bindParam(':c29', $c29);
      $sql->bindParam(':c30', $c30);
      $sql->bindParam(':c31', $c31);
      $sql->bindParam(':c32', $c32);
      $sql->bindParam(':c33', $c33);
      $sql->bindParam(':c34', $c34);
      $sql->bindParam(':c35', $c35);
      
      $class = $_POST["class"]; 
      $c1 = $_POST["c1"]; 
      $c2 = $_POST["c2"]; 
      $c3 = $_POST["c3"]; 
      $c4 = $_POST["c4"]; 
      $c5 = $_POST["c5"]; 
      $c6 = $_POST["c6"]; 
      $c7 = $_POST["c7"]; 
      $c8 = $_POST["c8"]; 
      $c9 = $_POST["c9"]; 
      $c10 = $_POST["c10"]; 
      $c11 = $_POST["c11"]; 
      $c12 = $_POST["c12"]; 
      $c13 = $_POST["c13"]; 
      $c14 = $_POST["c14"];
      $c15 = $_POST["c15"];
      $c16 = $_POST["c16"];
      $c17 = $_POST["c17"];
      $c18 = $_POST["c18"];
      $c19 = $_POST["c19"]; 
      $c20 = $_POST["c20"]; 
      $c21 = $_POST["c21"];
      $c22 = $_POST["c22"]; 
      $c23 = $_POST["c23"]; 
      $c24 = $_POST["c24"]; 
      $c25 = $_POST["c25"];
      $c26 = $_POST["c26"];
      $c27 = $_POST["c27"];
      $c28 = $_POST["c28"];
      $c29 = $_POST["c29"];
      $c30 = $_POST["c30"];
      $c31 = $_POST["c31"]; 
      $c32 = $_POST["c32"]; 
      $c33 = $_POST["c33"];
      $c34 = $_POST["c34"]; 
      $c35 = $_POST["c35"];

      
    	$sql->execute();
      
    } else {
      echo "<script>alert('Riempi tutti i campi'); history.go(-1);</script>";
    }
       }
   catch(PDOException $e)
       {
       echo "Error: " . $e->getMessage();
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
