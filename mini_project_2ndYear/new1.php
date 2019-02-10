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
 $sql="INSERT INTO stu_feed(Name,Course,Branch,feedback)VALUES('$Name','$Course','$Branch','$Feedback')";
 if(!mysqli_query($con,$sql))
 {
   echo "Not inserted";

 }
 else
 {
    echo "Details Submitted";
 }
 header("refresh:2;url=index.html;");
 ?>