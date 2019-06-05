<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css?fbclid=IwAR0fy8YRCu7IPN_vHn8Wmc-tv7nj-aIIgq2wJ5LZRYiawOr-jmIphiQa3No">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1 style="color:red;text-align:center;">Welcome to Login Form</h1>
        <div class="login-form">
                <form action="verify.php" method="POST">
                  <div class="login">
                      <h1>login </h1>
                  </div>
              
                
              
            <span class="username" name="email">Username * :</span>&nbsp;<input type="text" name="username" placeholder="Email or Username" ><br/>
                <span class="username" name="password">Password * :</span>&nbsp; <input class="pass" type="password" name="password" placeholder="Password"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit">Login</button><br>
</form>
                <a href="index.php">Create  an account?</a>
                </div>
</body>
</html>