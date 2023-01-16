<?php
  include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<style>
  body {
    font-family: sans-serif;
    margin: 0;
    width: 100%;
    height: 100vh;
    box-sizing: border-box;
  }

  #login-container {
    display: inline-block;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 10px 30px;
    background-color: rgba(138, 138, 138, .4);
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
  }

  h2 {
    text-align: center;
    margin-bottom: 15px;
  }

  form * {
    display: block;
    margin-bottom: 8px;
  }

  input[type="submit"] {
    -webkit-appearance: button;
    margin: 5px auto;
    font-size: .8rem;
    font-weight: bold;
    padding: 5px;
  }
</style>

<body>
  <div id="login-container">
    <h2>Login</h2>
    <form action="" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
      <label for="password">Password</label>
      <input type="text" name="username" id="password">
      <input type="submit" name="login">
      <p>
    </form>
  </div>
</body>

</html>