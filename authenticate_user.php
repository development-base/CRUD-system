<?php
include 'connection.php';
session_start();
if (isset($_POST['login'])) {
  $sql = "SELECT * FROM Users WHERE username = '" . $_POST['username'] . "' && password = '" . $_POST['password'] . "'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $_SESSION['myID'] = $row['id'];
      header('location: user-home.php');
    }
  } else {
      echo '<script>
    alert("You are not registered!");
    window.location = ("index.php");
    </script>';}
  }
