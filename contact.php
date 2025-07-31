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
	 $Number = $_POST['Number'];
     $Message = $_POST['Message'];

	 $sql_query = "INSERT INTO contact (Name,Email,Number,Message)
	 VALUES ('$Name','$Email','$Number','$Message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo  '<script> alert("Message sent successfully")</script>';
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>