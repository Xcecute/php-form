<!DOCTYPE html>
<html>
<head>
	<title>Submitted</title>
</head>
<body>

<?php

//echo "<p>Hello World</p>";
$name = $_POST['name'];
$bdate = $_POST['bdate'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$email = $_POST['email'];
$position1 = $_POST['position1'];
$position2 = $_POST['position2'];
$file1 = $_POST['file1'];
$message = $_POST['message'];


echo "Your name is " . $name . "<br>";
echo "Your birthday is " . $bdate . "<br>";
echo "Your first phone number is " . $phone1 . "<br>";
echo "Your second phone number is " . $phone2 . "<br>";
echo "Your email is " . $email . "<br>";
echo "Your desired position is " . $position1 . "<br>";
echo "Your second desired position is " . $position2 . "<br>";
echo "Here are your credentials " . $file1 . "<br>";
echo "Here is your message " . $message . "<br>";

mail('apply.phr@gmail.com','Online Applicant','Name: '. $name . " " . 'Birthday: ' . $bdate . " " . 'Phone1: ' . $phone1 . " " . 'Phone2: ' . $phone2 . " " . 'Email: ' . $email . " " . 'Position1: ' . $position1 . " " . 'Position2: ' . $position2 . " ",'From: phr.sender@yahoo.com');
mail($email, 'Application', 'Your application has been sent', 'From: phr.sender@yahoo.com');
?>

</body>
</html>