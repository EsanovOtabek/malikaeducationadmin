<?
session_start();
require_once 'config.php';

if($_SESSION['user']=="admin"){
  header("location: index.php");
}


if(isset($_POST['submit'])){
  if($_POST['login']=="admin"&&$_POST['password']=="1"){
    $_SESSION['user']="admin";
    header("location: index.php");
  }
  else{
    exit("Autorizatsiyadan o'tmadingiz!!!");
  }
}

?>

<? include_once 'pages/head.php'; ?>
<body class="text-center">

  <main class="form-signin">
    <form action="" method="POST">
      <h1 class="h3 mb-3 fw-normal">Tizimga kirish</h1>

      <div class="form-floating">
        <input type="name" name="login" class="form-control" id="floatingInput" placeholder="Login">
        <label for="floatingInput">Login</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <input type="submit" name="submit" class="w-100 btn btn-lg btn-primary" value="Login">
      <p class="mt-5 mb-3 text-muted">&copy; 2021. Powered by <a href="http://lifepc.uz">LifePC GrouP</a></p>
    </form>
  </main>

</body>
</html>
