<?php
include 'connection.php';
include 'getUsersData.php';
include 'reg_modal/register_modal.php';
include 'del_modal/delete_modal.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Homepage</title>
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
  }

  .header-icon {
    margin: 10px;
  }

  #add-btn {
    margin: 5px;
    padding: 5px;
    font-weight: bold;
    font-size: .8rem;
  }

  #user-details {
    /* display: none; */
    box-sizing: border-box;
    margin: 20px;
    overflow: scroll;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  }

  table {
    border-collapse: collapse;
    padding: 1100;
    background-color: white;

  }

  th {
    background-color: rgba(0, 0, 0, .4);
    color: rgba(0, 0, 0, .7);
  }

  td,
  th {
    /* border: 1px solid rgba(0, 0, 0, .1); */
    padding: 7px;

  }

  tr:nth-child(even) {
    background-color: rgba(0, 0, 0, .1);
  }
</style>
<link rel="stylesheet" href="reg_modal/register_modal_style.css">

<body>
  <header>
    <a href="admin-home.php"><img class="header-icon" src="img/icon-admin32.png"></a>
    <a href="admin-logout.php"><img class="header-icon" src="img/logout.png"></a>
  </header>

  <div id="user-details">
    <button id="add-btn">Add User</button>
    <table>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Birth of Date</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Contact No.</th>
        <th>Email</th>
        <th>Department</th>
        <th>SSS</th>
        <th>TIN</th>
        <th>PhilHealth</th>
        <th></th>
      </tr>

      <?php
      while ($row = $result->fetch_assoc()) {
      ?>

        <tr>
          <td style="text-align: center;"><?php echo $row['id']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['first_name']; ?></td>
          <td><?php echo $row['middle_name']; ?></td>
          <td><?php echo $row['last_name']; ?></td>
          <td><?php echo $row['bod']; ?></td>
          <td style="text-align: center;"><?php echo $row['gender']; ?></td>
          <td><?php echo $row['barangay']; ?>, <?php echo $row['city']; ?>, <?php echo $row['province']; ?></td>
          <td><?php echo $row['contact_no']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['department']; ?></td>
          <td><?php echo $row['sss']; ?></td>
          <td><?php echo $row['tin']; ?></td>
          <td><?php echo $row['philhealth']; ?></td>
          <td id="edit-icon">
            <form action="admin-edit-user.php" method="post">
              <button type="submit" name="edit_modal" value="<?php echo $row['id'] ?>">
                <img src="img/edit.png">
              </button>
            </form>
            <form method="post">
              <button id="delete-btn" type="submit" name="delete-btn" value="<?php echo $row['id']; ?>">
                <img src="img/delete.png">
              </button>
            </form>
          </td>
        </tr>

      <?php
      }
      ?>
    </table>
  </div>

  <script>
    let add_btn = document.getElementById('add-btn');
    let modal_container = document.getElementById('modal-container');
    let cancel_btn = document.getElementById('cancel-btn');

    add_btn.addEventListener('click', () => {
      modal_container.style.display = 'block';
    });

    cancel_btn.addEventListener('click', () => {
      modal_container.style.display = 'none';
    });

    // const delete_btn = document.getElementsByClassName('delete-btn');
    // for (let i = 0; i < delete_length; i++) {
    //   delete_btn[i].style.display = "none";
    // }
  </script>

</body>

</html>