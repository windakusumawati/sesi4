<?php
     $usr = "";
     $pwd = "";
     $salah = 0;

     if(isset($_POST["txUSER"])){
         $usr = $_POST["txUSER"];
         $pwd = $_POST["txPASS"];
 
         if($usr==""){
             $salah = 1 ;
         }else{
             echo" Isi dari Field User: ". $usr;
         }
         if($pwd==""){
             $salah = 1 ;
         }else{
             echo" Isi dari Field User: ". $pwd;
         }
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan metode POST</title>
</head>
<body>
<?php
    if($salah == 1 ){
        echo "<div style='color: red'>  User Name/Password masih kosong</div>";
    }
?>
    <form method="POST" action="latihan02.php">
            <div>
                User name
                <input type="text" name="txUSER">
            </div>
            <div>
                Password
                <input type="password" name="txPASS">
            </div>
            <div>
                
                <button type="sumbit"> login </button>
            </div>
    </form>
    
</body>
</html>