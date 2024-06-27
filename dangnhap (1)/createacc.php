<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Create.css'>

    <link rel="icon" href="./logo/logo-removebg-preview.png">
</head>
<body>
    <div class="khung">
        <div class="khung1">
        <div class="trongkhung">
            <h2 style="text-align: center;">Create an account</h2>
            <form action="\php\dangky.php" method="POST">
                <div class="khoangcach">
                <label >FirstName</label><br>
                <input type="text" class="b" name="Firstname" required>
               
            </div>
            <div class="khoangcach">
                <label >MiddleName</label><br>
                <input type="text" class="b" name="Middlename" required>
                
            </div>
            <div class="khoangcach">
                <label >Lastname</label><br>
                <input type="text" class="b" name="Lastname" required>
                
            </div>
            <div class="khoangcach">
                <label >Email</label><br>
                <input type="text" class="b" name="email" required>
                
            </div>
            <div class="khoangcach">
                <label >Username</label>
                <br>
                <input type="text" class="b"  name="username" required>
            </div>

            <div class="khoangcach" >
                <label >Password</label>
                <br>
                <input type="text" class="b" name="password" required>
            </div>
        
            
                <button class="button" type="submit" name="dangky" value="dangky" >Create Your Account</button>
            
            </form>
        </div>
        <div class="duoi">
            <p>Already have an account</p>
            <a href="login.html">Login</a>
        </div>
    </div>
    </div>
    
</body>
</html>