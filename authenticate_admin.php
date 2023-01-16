<?php
include 'connection.php';
if (isset($_POST['login'])) {
  if (!empty($_POST['username']) || !empty($_POST['password'])) {
    $sql = "SELECT * FROM Admin WHERE admin_username = '" . $_POST['username'] . "' AND admin_password = '" . $_POST['password'] . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row['admin_id'];
        header('location: admin-home.php');
      }
    }
  }
} else {
}
