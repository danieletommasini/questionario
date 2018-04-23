<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>elaboration.php</title>
  </head>
  <body>
    <div class="container">
<?php
      session_start();
      if(isset($_SESSION['form_message'])) {
	      // display the message on screen, and then clear the message.
        echo "<script>alert('Il questionario è già stato inviato!');</script>";
      } else {
      
        $servername = "localhost";
        $username = "root";
        $password = "admini";
        $dbname = "questionario";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if (isset($_POST['class']) && isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3']) && isset($_POST['c4']) && isset($_POST['c5']) && isset($_POST['c6']) && isset($_POST['c7']) && isset($_POST['c8']) && isset($_POST['c9']) && isset($_POST['c10']) && isset($_POST['c11']) && isset($_POST['c12']) && isset($_POST['c13']) && isset($_POST['c14']) && isset($_POST['c15']) && isset($_POST['c16']) && isset($_POST['c17']) && isset($_POST['c18']) && isset($_POST['c19']) && isset($_POST['c20']) && isset($_POST['c21']) && isset($_POST['c22']) && isset($_POST['c23']) && isset($_POST['c24']) && isset($_POST['c25']) && isset($_POST['c26']) && isset($_POST['c27']) && isset($_POST['c28']) && isset($_POST['c30']) && isset($_POST['c31']) && isset($_POST['c32']) && isset($_POST['c33']) && $_POST['c34'] != "" && $_POST['c35'] != ""){
              
              $id = "NULL";
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
              
              $sql = "INSERT INTO alunni (`id`, `classe`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`)
                VALUES ('$id', '$class', '$c1', '$c2', '$c3', '$c4', '$c5', '$c6', '$c7', '$c8', '$c9', '$c10', '$c11', '$c12', '$c13', '$c14', '$c15', '$c16', '$c17', '$c18', '$c19', '$c20', '$c21', '$c22', '$c23', '$c24', '$c25', '$c26', '$c27', '$c28', '$c29', '$c30', '$c31', '$c32', '$c33', '$c34', '$c35')";
        
            	$conn->exec($sql);
            	$_SESSION['form_message'] = "Il questionario è stato inviato con successo, grazie per la partecipazione!";
            	echo "<script>alert('Il questionario è stato inviato con successo, grazie per la partecipazione!');</script>";
              
            } else {
              echo "<script>alert('Riempi tutti i campi'); history.go(-1);</script>";
            }
          } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
        }
      ?>
      
      
    </div>
  </body>
</html>
