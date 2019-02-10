<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "not connected to server";
	
}
if(!mysqli_select_db($con,'student_Info'))
{
	echo "Database not selected";
	
}
$FirstName =     $_POST['FirstName'];
$LastName =      $_POST['LastName'];
$SESSION =       $_POST['SESSION'];
$RollNo =       $_POST['RollNo'];
$BRANCH =        $_POST['BRANCH'];
$Year =          $_POST['Year'];
$SEMESTER =      $_POST['SEMESTER'];
$Mobile = $_POST['Mobile'];
$ResidentType= $_POST['ResidentType'];
$HospitalNo = $_POST['HospitalNo'];
$ADDRESS =       $_POST['ADDRESS'];

 if($FirstName=='')
 {
	 echo"<script>alert('Enter Your First Name')</script>";
 }
  if($LastName=='')
 {
	 echo"<script>alert('Enter Your Last Name')</script>";
 }
  if($SESSION=='')
 {
	 echo"<script>alert('Enter Your Session')</script>";
 }
  if($RollNo=='')
 {
	 echo"<script>alert('Enter Your Roll No')</script>";
 }
  if($BRANCH=='')
 {
	 echo"<script>alert('Enter Your Branch')</script>";
 }
  if($Year=='')
 {
	 echo"<script>alert('Enter Your Year')</script>";
 }
  if($SEMESTER=='')
 {
	 echo"<script>alert('Enter Your Semester')</script>";
 }
  if($Mobile=='')
 {
	 echo"<script>alert('Enter Your Mobile')</script>";
 }
  
  if($ResidentType=='')
 {
	 echo"<script>alert('Enter Your Resident Type')</script>";
 }
  if($ADDRESS=='')
 {
	 echo"<script>alert('Enter Your ADDRESS')</script>";
 }
  if($HospitalNo='')
 {
	 echo"<script>alert('Enter Your Hospital No.')</script>";
 }
else
{
$sql="INSERT INTO register (FirstName,LastName,SESSION,RollNo,BRANCH,Year,SEMESTER,Mobile,ResidentType,HospitalNo,ADDRESS)VALUES('$FirstName','$LastName','$SESSION','$RollNo','$BRANCH','$Year','$SEMESTER','$Mobile','$ResidentType','$HospitalNo','$ADDRESS')";
if(! mysqli_query($con,$sql))
{
	echo "Not Inserted" ; 
	
}
else
{
	echo "Details Submitted";
	
}
}
header("refresh:2;url=submission.html");

?>