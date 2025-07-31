<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="keshav";

$conn=mysqli_connect($server_name,$username,$password,$database_name);


if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
     $Address = $_POST['Address'];
	 $Number = $_POST['Number'];
     $Date = $_POST['Date'];
     $Time = $_POST['Time'];
     $Waste = $_POST['waste'];
     $chkstr = implode(",",$Waste);
     $Message = $_POST['Message'];

	 $sql_query = "INSERT INTO pickup (Name,Email,Address,Number,Date,Time,Waste,Message)
	 VALUES ('$Name','$Email','$Address','$Number','$Date','$Time','$chkstr','$Message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo  '<script> alert("You have successfully scheduled a pickup!")</script>';
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>