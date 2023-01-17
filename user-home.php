<?php
  include 'connection.php';
  session_start();
  if (empty($_SESSION['myID'])) {
    header("location: index.php");  
  }

  $getData = "SELECT * FROM Users WHERE id ='" . $_SESSION['myID'] . "'";
  $result = $conn->query($getData);
  $row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $fname = $_POST['firstname'];
  $mname = $_POST['middlename'];
  $lname = $_POST['lastname'];
  $bod = $_POST['bod'];
  $gender = $_POST['gender'];
  $barangay = $_POST['barangay'];
  $city = $_POST['city'];
  $province = $_POST['province'];
  $contact_no = $_POST['contact_no'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $sss = $_POST['sss'];
  $tin = $_POST['tin'];
  $philh = $_POST['philhealth'];

  echo $department;

  $sql = "UPDATE Users SET username = '" . $username . "',
      password = '" . $password . "', 
      first_name = '" . $fname . "', 
      middle_name = '" . $mname . "', 
      last_name = '" . $lname . "', 
      bod = '" . $bod . "', 
      gender = '" . $gender . "', 
      barangay = '" . $barangay . "', 
      city = '" . $city . "', 
      province = '" . $province . "', 
      contact_no = '" . $contact_no . "', 
      email = '" . $email . "', 
      department = '" . $department . "', 
      sss = '" . $sss . "', 
      tin = '" . $tin . "', 
      philhealth = '" . $philh . "' WHERE id='" . $_SESSION['myID'] . "'";

  if ($conn->query($sql)) {
    echo '<script>
      alert("Personal Details Updated!");
      window.location = ("user-home.php");
    </script>';

  } else {
    echo '<script>alert("Error")</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body {
    font-family: sans-serif;
    margin: 0;
    /* background-color: rgba(0, 0, 0, .1); */
  }

  header {
    background-color: rgba(0, 0, 0, .4);
    height: 50px;
    box-sizing: border-box;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    z-index: 1;
  }

  .header-icon {
    margin: 10px;
  }

  /***** Update USER MODAL *****/
  #modal-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    overflow: scroll;
  }

  #form-container {
    background-color: white;
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 15px;
    border-radius: 8px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  }

  h3 {
    text-align: center;
  }

  #cancel-btn {
    position: absolute;
    top: 10px;
    right: 10px;
  }

  form {
    display: flex;
    justify-content: space-between;
  }

  #input1-cntr *,
  #input2-cntr * {
    display: block;
  }

  #input1-cntr>div,
  #input2-cntr>div {
    margin-bottom: 8px;
  }

  #input1-cntr,
  #input2-cntr {
    margin: 10px;
  }

  form>div {
    margin-bottom: 5px;
  }

  #Update-btn {
    -webkit-appearance: button;
    position: absolute;
    bottom: 50px;
    right: 20%;
    background-color: white;
    border: 2px solid rgba(0, 0, 0, .4);
    margin: 5px auto;
    font-size: .8rem;
    font-weight: bold;
    padding: 5px;
  }
</style>

<body>
  <header>
    <a href="user-home.php" target="_self"><img class="header-icon" src="img/user-icon.png"></a>
    <a href="user-logout.php"><img class="header-icon" src="img/user-logout.png"></a>
  </header>
</body>
<!-- *****Update USER MODAL***** -->


<div id="form-container">

  <h3>My Personal Details (ID: <?php echo $_SESSION['myID']; ?>)</h3>
  <form method="post">
    <div id="input1-cntr">

      <div>
        <label>Username</label>
        <input type="text" name="username" placeholder="username" value="<?php echo $row['username']; ?>" required>
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" placeholder="password" value="<?php echo $row['password']; ?>" required>
      </div>
      <div>
        <label>First Name</label>
        <input type="text" name="firstname" placeholder="first name" value="<?php echo $row['first_name']; ?>" required>
      </div>
      <div>
        <label>Middle Name</label>
        <input type="text" name="middlename" placeholder="middle name" value="<?php echo $row['middle_name']; ?>" required>
      </div>
      <div>
        <label>Last Name</label>
        <input type="text" name="lastname" placeholder="last name" value="<?php echo $row['last_name']; ?>" required>
      </div>
      <div>
        <label>Birth of Date</label>
        <input type="date" name="bod" value="<?php echo $row['bod']; ?>" required>
      </div>
      <div>
        <label>Gender</label>
        <select name="gender">
          <option value="M" <?php if ($row['gender'] === "M") { ?> selected="selected" <?php } ?>>Male</option>
          <option value="F" <?php if ($row['gender'] === "F") { ?> selected="selected" <?php } ?>>Female</option>
        </select>
      </div>
      <div>
        <label>Contact No.</label>
        <input type="text" name="contact_no" pattern="[0-9+]{13}" title="Invalid Contact No." value="<?php echo $row['contact_no']; ?>" maxlength="13" autocomplete="off" required></td>
        <tr>
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" value="<?php echo $row['email']; ?>" required>
      </div>
    </div>
    <div id="input2-cntr">
      <div>
        <label>Barangay</label>
        <input type="text" name="barangay" placeholder="barangay" value="<?php echo $row['barangay']; ?>" required>
      </div>
      <div>
        <label>City</label>
        <input type="text" name="city" placeholder="city" value="<?php echo $row['city']; ?>" required>
      </div>
      <div>
        <label>Province</label>
        <input type="text" name="province" placeholder="province" value="<?php echo $row['province']; ?>" required>
      </div>
      <div>
        <label>Department</label>
        <select name="department">
          <?php $dep = $row['department']; ?>
          <option value="ITSM" <?php if ($dep === "ITSM") { ?> selected="selected" <?php } ?>>ITSM</option>
          <option value="RSTL" <?php if ($dep === "RSTL") { ?> selected="selected" <?php } ?>>RSTL</option>
          <option value="FAS" <?php if ($dep === "FAS") { ?> selected="selected" <?php } ?>>FAS</option>
          <option value="ORD" <?php if ($dep === "ORD") { ?> selected="selected" <?php } ?>>ORD</option>
          <option value="COA" <?php if ($dep === "COA") { ?> selected="selected" <?php } ?>>COA</option>
        </select>
      </div>
      <div>
        <label>SSS</label>
        <input type="text" name="sss" pattern="\d{3}-\d{2}-\d{4}" placeholder="sss no." value="<?php echo $row['sss']; ?>" required>
      </div>
      <div>
        <label>TIN</label>
        <input type="text" name="tin" type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="tin no." value="<?php echo $row['tin']; ?>" required>
      </div>
      <div><label>PhilHealth</label>
        <input type="text" name="philhealth" pattern="[0-9]{2}-[0-9]{9}-[0-9]{1}" placeholder="philhealth no." value="<?php echo $row['philhealth']; ?>" required>
      </div>
    </div>
    <input id="Update-btn" type="submit" name="update" value="Update">
  </form>
</div>

</html>