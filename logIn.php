<!-- The form -->
<?php include "connect.php" ?>
<div class="form-popup" id="myForm">
  <form action="authenticate.php" method="POST" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="customerPassword" placeholder="Enter Password"  required>
    <h2 style="font-size: 15px; color: #082B44;">Don't have an Account? <a href="SignUp.php">Sign Up</a></h2>
    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
  <!-- form end -->