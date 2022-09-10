<?php 
include "config.php";





if($stmt = $conn->prepare('SELECT id, password FROM users WHERE firstname = ?')) {
    $stmt->bind_param('s', $_POST['firstname']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0) {

        ?>


<div class="desktop">
        <div class="frame9"></div>
        <img class="logo" src="logo0108-02_generated 1 (1).png" alt="">
        <div class="heading1">Bellefit</div>
        <div class="heading2">
        <?php    
      echo 'Username Already Exist';
      ?> 

</div>

    

           <a class="heading9" style="text-decoration: none ;" href="login.php">
           <center>
               <br>
           Try again
           </center></a>

        <div class="heading10">
            <img src="Group 4.png" alt="" style="
    top: 166px;
    position: relative;
">
            
        </div>
    </div>

    
      <?php
    }
    else{
        if($stmt = $conn->prepare('INSERT INTO users (firstname, password, email) VALUES (?, ?, ?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['firstname'], $password, $_POST['email']);
            $stmt->execute();

            ?>

<div class="desktop">
        <div class="frame9"></div>
        <img class="logo" src="logo0108-02_generated 1 (1).png" alt="">
        <div class="heading1">Bellefit</div>
        <div class="heading2">
        <?php
            echo 'Your Account Registered Successfully';
    ?>

</div>

    



        <div class="heading10">
            <img src="Group 4.png" alt="" style="
    top: 166px;
    position: relative;
">
            
        </div>
    </div>

            </div>

            <?php
        }

    }
    $stmt->close();
}


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    



    
    
</body>
</html>