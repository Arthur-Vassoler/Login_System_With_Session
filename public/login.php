<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">

          <title>Login</title>

          <link rel="stylesheet" href="css/style.css">
     </head>
     <body>
          <form action="../src/exe_login.php" method="post">
               <div class="form_login">
                    <h2>Login</h2>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Insert your E-mail">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Insert your Senha">

                    <button type="submit">Log In</button>

                    <a href="#">Don't have an account? Create Here!</a>
               </div>
          </form>
     </body>
</html>