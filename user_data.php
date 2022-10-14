<?php
$name = $_POST ["name"];
$email = $_POST ["email"];
$date_of_birth = $_POST ["date_of_birth"];
$gender = $_POST ["gender"];
$country = $_POST ["country"];

echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "DATE OF BIRTH: " . $date_of_birth . "<br>";
echo "GENDER: " . $gender . "<br>";
echo "COUNTRY: " . $country . "<br>";
?>

<?php
$filename='./userdata.csv';
$handle=fopen($filename, 'a');
fwrite($handle, "$name, $email, $date_of_birth ,$gender,$country \n");
fclose($handle);
?>