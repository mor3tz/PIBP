<?php session_start(); ?>

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
      <!-- =========== LOGIN SESSION =========== -->
      <div class="right">
         <form action="../cekloginuser.php" method="post" id="loginForm" class="form active">
            <h2>Login</h2>
            <input type="text" name="login" placeholder="Username atau Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
            <div class="toggle">
               Belum punya akun? <a onclick="switchForm('register')">Daftar</a>
            </div>
         </form>
         <!-- ========== REGISTER SESSION =========== -->
         <form action="../cekregister.php" method="post" id="registerForm" class="form">
            <h2>Register</h2>
            <input type="text" name="nama" placeholder="Nama Lengkap" required />
            <input type="text" name="username" placeholder="Username" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="konfirmasi" placeholder="Konfirmasi Password" required />

            <select name="jenjang" required >
               <option value=""></option>
               <option value="D3">D3</option>
               <option value="D4">D4</option>
               <option value="S1">S1</option>
               <option value="S2">S2</option>
            </select>

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