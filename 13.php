CREATE TABLE Stu_Reg (
    ID VARCHAR(30) PRIMARY KEY,
    Name TEXT,
    Image VARCHAR(400),
    Password VARCHAR(20) NOT NULL
);
INSERT INTO Stu_Reg (ID, Name, Image, Password)
VALUES ('1', 'John Doe', 'image.jpg', MD5('password1')),
       ('2', 'Jane Smith', 'image.png', MD5('password2')),
       ('3', 'Bob Johnson', NULL, MD5('password3'));
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Programmer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Select all records from the Stu_Reg table
    $sql = "SELECT * FROM Stu_Reg";
    $result = $conn->query($sql);

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. " - Image: " . $row["Image"]. "<br>";
    }

    $conn->close();
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Programmer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the record with ID = 2
    $sql = "DELETE FROM Stu_Reg WHERE ID = '2'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>
