<html>
<head>
	<title>Print</title>
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
<!---Header File-->
<?php include('header.php'); ?> 
<hr>
<?php 
  $fno=$_GET['fno'];
  $from=$_GET['from'];
  $to=$_GET['to'];
  $depart_date=$_GET['date'];
  $rate=$_GET['rate'];
  $no= $_POST['no'];
  $totalrate=$rate*$no;
 
  $dbhost = 'localhost:3306';
  $dbuser = 'root';
  $dbpass = '';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
  if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }

  $userid=$_SESSION['email'];
   
  $sql = "INSERT INTO book ". "(User_Id ,Flight_No ,From_Loc ,To_Loc, Date , No_Booked_Ticket ,Rate) ". "VALUES('".$userid."','".$fno."','".$from."','".$to."','".$depart_date."','".$no."','".$totalrate."')";
              
  mysql_select_db('test_db');
  $retval = mysql_query( $sql, $conn );

  echo "<div class='container'>
  <h3 align='center'>Invoice Of Ticket</h3>
  <table align='center' border='1' class='table table-striped'>
      <thead>
            <tr align='center'>
              <th scope='col'>User_Id</th>
              <th scope='col'>Flight_No</th>
              <th scope='col'>From_Loc</th>
              <th scope='col'>To_Loc</th>
              <th scope='col'>Date</th>
              <th scope='col'>No_Booked_Ticket</th>
              <th scope='col'>Rate(in RS.)</th>
            </tr>
      </thead>
  <tbody>"; 

  $sql1 = " SELECT * FROM book WHERE User_Id='$userid' ";
  mysql_select_db('test_db');
  $retval1 = mysql_query( $sql1, $conn);
  while($row1 = mysql_fetch_array($retval1))
  { 
                echo "<tr align='center'>";
                echo "<td>" . $row1[0] . "</td>";
                echo "<td>" . $row1[1] . "</td>";
                echo "<td>" . $row1[2] . "</td>";
                echo "<td>" . $row1[3] . "</td>";
                echo "<td>" . $row1[4] . "</td>";
                echo "<td>" . $row1[5] . "</td>";
                echo "<td>" . $row1[6] . "</td>";
                echo "</tr>";
  }
  ?>
  <br>
  </tbody>
</table>
<form method = "post" class="form-horizontal">
  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="button" value="Print Ticket" onClick="window.print()">
      </div>
    </div>
    <br>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <a class="btn btn-primary" href="flight.php" role="button">Close</a>
          </div> 
        </div>
</from>
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