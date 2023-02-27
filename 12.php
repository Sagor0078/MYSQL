// CRETE DATABASE
<?php 
 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $conn = mysqli_connect($hostname,$username,$password);
 if(!$conn){
 	echo die(mysqli_connect_error());
 }

$sql = "CREATE DATABASE pustStudent";
// mysqali_query($conn,$sql);
if(mysqli_query($conn,$sql)){
	echo 'DB Created Successfully!';
}else{
	echo mysqli_error($conn);
}
mysqli_close($conn);
?>


// CERETE TABLE**
<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pustStudent';
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
	echo die(mysqli_connect_error());
}

$sql = "CREATE TABLE student(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(20) NOT NULL,session VARCHAR(20) NOT NULL,phone_no VARCHAR(20) NOT NULL,city VARCHAR(20) NOT NULL,gender VARCHAR(20)
)";

if(mysqli_query($conn,$sql)){
	echo "table created";
}else{
	echo "table not created";
}
mysqli_close($conn);
?>

// INSERT TABLE 
<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pustStudent';
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
	echo die(mysqli_connect_error());
}

$sql = "INSERT INTO student(name,session,phone_no,city,gender) VALUES('SHA_ALOM_PATINETA','2018-2019','01xxx-xxxxxx','Natore','Male')";


if(mysqli_query($conn,$sql)){
	echo 'inserted sucessfully';
}else{
	echo mysqli_connect_error($conn);
}
mysqli_close($conn);
?>

// UPDATE TABLE 
<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pustStudent';
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
	echo die(mysqli_connect_error());
}

$sql = "UPDATE student SET name = 'MOF',session = '2018-19',phone_no = '0174xxxxxxx',city = 'Srinagar',gender = 'Female' WHERE id = 2";

if(mysqli_query($conn,$sql)){
	echo 'Updated query';
}else{
	echo $sql.' '.mysqli_error($conn);
}
mysqli_close($conn);
?>
// READ TABLE 
<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pustStudent';
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
	echo die(mysqli_connect_error());
}
// $sql = "UPDATE student SET name = 'MOF',session = '2018-19',phone_no = '0174xxxxxxx',city = 'Srinagar',gender = 'Female' WHERE id = 2";

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// print_r(mysqli_fetch_assoc($result));
	while($data = mysqli_fetch_assoc($result)){
		echo $data['id'].'  '.$data['name'].'  '.$data['session'].'  '.$data['phone_no'].'  '.$data['city'].'  '.$data['gender'].'<br>';
	}
}else{
	echo 'no data found';
}
mysqli_close($conn);
?>
// DELETE TABLE 
<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pustStudent';
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
	echo die(mysqli_connect_error());
}

$sql = "DELETE FROM student WHERE id = 2";
if(mysqli_query($conn,$sql)){
	echo 'DATA DELETED';
}else{
	echo "NOT DELETE";
}
mysqli_close($conn);
?>
