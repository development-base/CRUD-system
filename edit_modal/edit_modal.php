//TODO
<!-- *****EDIT USER MODAL***** -->
<link rel="stylesheet" href="edit_modal_style.css">
<div id="modal-container">

  <div id="form-container">
    <img id="cancel-btn" src="img/cancel.png" width="24px">
    <h3>Edit User: <?php echo </h3>
    <form method="post">
      <div id="input1-cntr">
        <div>
          <label>Username</label>
          <input type="text" name="username" placeholder="username" required>
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" placeholder="password" required>
        </div>
        <div>
          <label>First Name</label>
          <input type="text" name="firstname" placeholder="first name" required>
        </div>
        <div>
          <label>Middle Name</label>
          <input type="text" name="middlename" placeholder="middle name" required>
        </div>
        <div>
          <label>Last Name</label>
          <input type="text" name="lastname" placeholder="last name" required>
        </div>
        <div>
          <label>Birth of Date</label>
          <input type="date" name="bod" required>
        </div>
        <div>
          <label>Gender</label>
          <select name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
        </div>
        <div>
          <label>Contact No.</label>
          <input type="text" name="contact_no" pattern="[0-9+]{13}" title="Invalid Contact No." value="+63" maxlength="13" autocomplete="off" required></td>
          <tr>
        </div>
        <div>
          <label>Email</label>
          <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" required>
        </div>
      </div>
      <div id="input2-cntr">
        <div>
          <label>Barangay</label>
          <input type="text" name="barangay" placeholder="barangay" required>
        </div>
        <div>
          <label>City</label>
          <input type="text" name="city" placeholder="city" required>
        </div>
        <div>
          <label>Province</label>
          <input type="text" name="province" placeholder="province" required>
        </div>
        <div>
          <label>Department</label>
          <select name="department">
            <option value="ITSM">ITSM</option>
            <option value="RSTL">RSTL</option>
            <option value="FAS">FAS</option>
            <option value="ORD">ORD</option>
            <option value="COA">COA</option>
          </select>
        </div>
        <div>
          <label>SSS</label>
          <input type="text" name="sss" pattern="\d{3}-\d{2}-\d{4}" placeholder="sss no." required>
        </div>
        <div>
          <label>TIN</label>
          <input type="text" name="tin" type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="tin no." required>
        </div>
        <div><label>PhilHealth</label>
          <input type="text" name="philhealth" pattern="[0-9]{2}-[0-9]{9}-[0-9]{1}" placeholder="philhealth no." required>
        </div>
      </div>
      <input id="register-btn" type="submit" name="register" value="Register">
    </form>
  </div>
</div>
******************