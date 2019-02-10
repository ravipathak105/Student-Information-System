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
 $Name=     $_POST['Name'];
 $Course=   $_POST['Course'];
 $Branch=   $_POST['Branch'];
 $Feedback= $_POST['Feedback'];
 if($Name=='')
 {
	 echo"<script>alert('Enter Your Name')</script>";
 }
 if($Course=='')
 {
	 echo"<script>alert('Enter Your Course')</script>";
 }
 if($Branch=='')
 {
	 echo"<script>alert('Enter Your Branch')</script>";
 }
 if($Feedback=='')
 {
	 echo"<script>alert('Enter Your Feedback')</script>";
 }
else{
 $sql="INSERT INTO stu_feed(Name,Course,Branch,feedback)VALUES('$Name','$Course','$Branch','$Feedback')";
 if(!mysqli_query($con,$sql))
 {
   echo "Not inserted";

 }
 else
 {
    echo "Details Submitted";
 }
	}
header("refresh:2;url=index1.html");
?>