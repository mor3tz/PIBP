<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- =============== CSS =============== -->
   <link rel="stylesheet" href="../assets/CSS/login.css">
   <title>Login Portal Informasi Beasiswa</title>

</head>

<body>
   <div class="container">
      <div class="left">
         <img src="../assets/img/3186535.jpg" alt="Background" />
      </div>

      <div class="right">
         <form action="/index.php" id="loginForm" class="form active">
            <h2>Login</h2>
            <input type="email" placeholder="Email" required />
            <input type="password" placeholder="Password" required />
            <button type="submit">Login</button>
            <div class="toggle">
               Belum punya akun? <a onclick="switchForm('register')">Daftar</a>
            </div>
         </form>

         <form action="/index.php" id="registerForm" class="form">
            <h2>Register</h2>
            <input type="text" placeholder="Nama Lengkap" required />
            <input type="email" placeholder="Email" required />
            <input type="password" placeholder="Password" required />
            <button type="submit">Register</button>
            <div class="toggle">
               Sudah punya akun? <a onclick="switchForm('login')">Login</a>
            </div>
         </form>
      </div>
   </div>
   </div>
   <!-- =============== JS =============== -->
   <script src="../assets/JS/login.js"></script>
</body>

</html>