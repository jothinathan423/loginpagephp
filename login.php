
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
    </style>
</head>
<body>
    <div class="desktop">
        <div class="frame9"></div>
        <img class="logo" src="logo0108-02_generated 1 (1).png" alt="">
        <div class="heading1">Bellefit</div>
        <div class="heading2">Create Account</div>
        <form action="login2.php" method="POST">
        <input class="heading3" placeholder="Full Name" id="logo2" type="text" name="firstname" required>
        <input class="heading4" placeholder="Email Address" id="logo3" name="email" type="email" required>
        <div class="heading5">
        <input class="hea" placeholder="Password" id="logo4" name="password" type="password"  minlength="6" required>
        <img src="ri_lock-password-fill.png" class="q1" alt="">
        <img src="pass-hide.png" onclick="pass()" class="pass-icon" id="pass-icon" alt="">
    </div>
        <input class="heading6" type="checkbox" name="" id="" required>
        <div class="heading7">I agree with <a class="heading8" href="#">Terms</a> and <a class="heading8" href="#">Privacy</a></div>
        <button type="submit" class="heading9" name="submit" value="submit">SIGN UP</button>
        </form>
        <div class="heading10">
            <img src="Group 4.png" alt="" style="
    top: 166px;
    position: relative;
">
            
        </div>
    </div>
    



    
    
</body>
<script>
    var a;
    function pass()
    {
        if(a==1)
        {
            document.getElementById('logo4').type='password';
            document.getElementById('pass-icon').src='pass-hide.png';
            a=0;
        }
        else
        {
            document.getElementById('logo4').type='text';
            document.getElementById('pass-icon').src='pass-show.png';
            a=1;
        }
    }
</script>
</html>