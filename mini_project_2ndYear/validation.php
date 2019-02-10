<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo "Not Connected";
}
if(!mysqli_select_db($con,'student_info'))
{
  echo "Database not selected"; 
 }
 $Username = $_POST['Username'];
 $Password = $_POST['Password'];

 $q=" SELECT * FROM signin where Username = '$Username' && Password = '$Password'";
 $result=mysqli_query($con,$q);
 $num = mysqli_num_rows($result);
 if($num==1)
 {

	 $_SESSION['User']= $Username;
	 header("refresh:2;url=index1.html");

 }
 else if(!$Username=0 && !$Password=0)
 {

	 echo "<script>alert('Username or Password Does not matched')</script>";

      header("refresh:0;url=index.html");
 }
 else
 {
	 $qy="INSERT INTO signin(Username,Password) VALUES('$Username','$Password')";
	 mysqli_query($con,$qy);

 }

?>
