<html>
<head>
	<title>Reservation</title>
</head>
<style type="text/css">
  h2
  {
    color: #003284;
  } 
</style>
<body>
<?php
session_start();
if($_SESSION['email']==""&&$_SESSION['pwd']=="")
{
 ?>
<script type="text/javascript">
window.location="login.php";  
</script>
<?php 
}
?>
<?php
$fno=$_GET['fno'];
$from=$_GET['from'];
$to=$_GET['to'];
$depart_date=$_GET['date'];
$rate=$_GET['rate'];
?>
<!---Header File-->
<?php include('header.php'); ?> 
<hr>
<div class="container">
  <h2>Fill Your Details:</h2>
  <form method = "post" class="form-horizontal"  action="pay.php?fno=<?php echo $fno ?>&&from=<?php echo $from ?>&&to=<?php echo $to ?>&&date=<?php echo $depart_date ?>&&rate=<?php echo $rate ?>">
    <br>
    <?php
    echo "<h3>You are booking your ticket from " .$from. " to " .$to. " of Flight No : ".$fno. " Dated: ".$depart_date.".</h3>"; 
    ?>
    <h3>No. of tickets: </h3>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <input type="text" name="no" style="width:40px;"/> 
    </div>
    </div>
    <table align="center" border='1' class="table table-striped">
      <thead>
            <tr align='center'>
              <th scope="col">Serial No</th>
              <th scope="col">Name</th>
              <th scope="col">Sex</th>
              <th scope="col">Age</th>
            </tr>
      </thead>
  <tbody> 
    <tr>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <p>1.</p>
            </div>
          </div>
        </td>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="text" name="name1"/>
              </div>
          </div>
        </td>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10"><select class="custom-select" name="sex"><option value="male">Male</option><option value="female">Female</option></select>
            </div>
        </div>
        </td>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="text" name="age" style="width:40px;"/>
            </div>
          </div> 
        </td>
    </tr>
    <tr>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <p>2.</p>
            </div>
          </div>
        </td>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="text" name="name2"/>
              </div>
          </div>
        </td>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10"><select class="custom-select" name="sex"><option value="male">Male</option><option value="female">Female</option></select>
            </div>
        </div>
        </td>
        <td>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="text" name="age" style="width:40px;"/>
            </div>
          </div> 
        </td>
    </tr>
  </tbody>
  </table>
  <script language="javascript">
  function show_alert()
  {
    alert("Booking Sucessful. Download Your Ticket Invoice.");  
  }
  </script>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit" onclick="show_alert()">Submit</button>
    </div>
  </div>
  <br>
<div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a class="btn btn-primary" href="book.php" role="button">Close</a>
      </div> 
</div>
  </form>
</div>
<hr>
<!-- Footer bar-->
<footer class="footer footer-transparent">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">ARS</h6>
          <p style="text-align:justify">Airline Reservation System provides options for viewing different flights available with different timings for a particular date and provides customers with the booking facility.</p>
        </div>
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Company</h6>
          <p>
            <a href="aboutus.php">About Us</a>
          </p>
          <p>
            <a href="contactus.php">Contact Us</a>
          </p>
          <p>
            <a href="t&c.php">Terms & Condition</a>
          </p>
          <p>
            <a href="help.php">Help</a>
          </p>
        </div>
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Account</h6>
          <p>
            <a href="register.php">Register</a>
          </p>
          <p>
            <a href="logout.php">Log Out</a>
          </p>
        </div>
        <!-- Grid column -->
      <!-- Grid row -->
      <div class="row d-flex align-items-center">
   </div>
    <!-- Footer Links -->
</div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Copyright&copy; 2019 All Rights Reserved: ARS
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer bar-->
</body>
</html>