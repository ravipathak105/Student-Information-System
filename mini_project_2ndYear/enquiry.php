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
 $Name =     $_POST['Name'];
 $Mobile =   $_POST['Mobile'];
 $Email =   $_POST['Email'];
 $City = $_POST['City'];
 $College = $_POST['College'];
 $Course = $_POST['Course'];
 $Query = $_POST['Query'];
 $sql="INSERT INTO admsn_enquiry(Name,Mobile,Email,City,College,Course,Query) VALUES('$Name','$Mobile','$Email','$City','$College','$Course','$Query')";
 if(!mysqli_query($con,$sql))
 {
   echo "Not inserted";

 }
 else
 {
    echo "Details Submitted";
 }
header("refresh:2;url=index1.html");
 ?>