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
 $Username = mysqli_real_escape_string ($con,$_POST['Username']);
 $Password = mysqli_real_escape_string ($con,$_POST['Password']);
 $c_password = mysqli_real_escape_string($con,$_POST['c_password']);
 $Email    = mysqli_real_escape_string ($con,$_POST['Email']);
 $Mobile   = mysqli_real_escape_string ($con,$_POST['Mobile']);

 $q=" SELECT * FROM signin where Username = '$Username' && Password = '$Password'";
 $result=mysqli_query($con,$q);
 $num = mysqli_num_rows($result);

 if($num==1)
 {

	 echo "You Have Signed Up Already";

 }
 else if($num==4)
 {
	 
	 echo "Email Already exits Try with another email";
 }	 
 else if($_POST['Password']==$_POST['c_password'])
 {
	 $qy="INSERT INTO signin(Username,Password,c_password,Email,Mobile) VALUES('$Username','$Password','$c_password','$Email','$Mobile')";
	 mysqli_query($con,$qy);
	  echo "You Have Successfully Signed Up <script>alert('Please Login After Sign Up')</script>";
 }
 else
 {
	 echo "<script>alert('Password does not matched')</script>";

 }



header('refresh:1;url=index.html');
 ?>
