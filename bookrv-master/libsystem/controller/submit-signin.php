<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookrv');
  //check connection
  if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  include_once("submit-signup.php");

if (isset($_POST['signin_btn'])){

	$stud_id = $_POST['stud_num'];
	$password = $_POST['password'];

  $querysignin = "SELECT * FROM stud_info WHERE stud_id LIKE '$stud_id' && password LIKE '$password'";
  $resultsignin = mysqli_query($conn, $querysignin);

  	if(mysqli_num_rows($resultsignin) > 0)
    {
      	echo '<script>window.location.href = "user-index";</script>';

    }

    else {
      function phpAlert($msg){
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    phpAlert( "Invalid Account");
    }
    }
    
