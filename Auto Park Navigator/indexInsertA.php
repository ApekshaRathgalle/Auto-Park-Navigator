<!DOCTYPE html>
<html>
<head>
  <title>Edit User Account</title>
  <link rel="stylesheet" href="indexA.css">
</head>
<body>
  <section>
    <form method="POST" action="insertA.php">
      <fieldset>
        <legend><b>Edit user Account</b></legend>
        <div>
          <label for="uID">ID:</label>
          <input type="text" id="uID" name="uID" placeholder="Enter ID" required />
        </div>
        <div>
          <label for="uname">Name:</label>
          <input type="text" id="uname" name="uname" placeholder="Enter Name" required />
        </div>
        <div>
          <label for="uTP">Phone Number:</label>
          <input type="tel" id="uTP" name="uTP" placeholder="Enter Phone Number" required />
        </div>
        <div>
          <label for="uADD">Address:</label>
          <select id="province" name="province">
            <option>Northern Province</option>
            <option>North Central Province</option>
            <option>Central Province</option>
            <option>Western Province</option>
            <option>North Western Province</option>
            <option>Southern Province</option>
            <option>Sabaragamuwa Province</option>
            <option>Eastern Province</option>
            <option>Uva Province</option>
          </select>
          <input type="text" id="uADD" name="uADD" placeholder="Enter Address" required />
        </div>
        <div>
          <label for="uEmail">Email:</label>
          <input type="email" id="uEmail" name="uEmail" placeholder="Enter Email" required />
        </div>
        <div>
          <label for="Cp">Current Password:</label>
          <input type="password" id="Cp" name="Cp" placeholder="Enter Current Password" required />
        </div>
        <div>
          <label for="Np">New Password:</label>
          <input type="password" id="Np" name="Np" placeholder="Enter New Password" required />
        </div>
        <div>
          <label for="Cop">Confirm Password:</label>
          <input type="password" id="Cop" name="Cop" placeholder="Enter Confirm Password" required />
        </div>
        <input type="submit" value="Submit" />
      </fieldset>
    </form>
  </section>
</body>
</html>